<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'message'        => ['required', 'string', 'max:500'],
            'history'        => ['nullable', 'array', 'max:10'],
            'history.*.role' => ['in:user,model'],
            'history.*.text' => ['string', 'max:5000'],
        ]);

        $contents = collect($data['history'] ?? [])
            ->map(fn ($h) => ['role' => $h['role'], 'parts' => [['text' => $h['text']]]])
            ->all();
        $contents[] = ['role' => 'user', 'parts' => [['text' => $data['message']]]];

        $model = config('services.gemini.model');

        try {
            $res = Http::withHeaders(['x-goog-api-key' => (string) config('services.gemini.key')])
                ->timeout(20)
                ->post("https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent", [
                    'system_instruction' => ['parts' => [['text' =>
                        'Kamu adalah Barista Madjoe, customer service Madjoe Coffee & Bakery. '
                        . 'Jawab singkat, ramah, dalam bahasa Indonesia. '
                        . 'Topik: menu, promo, outlet, dan kemitraan. '
                        . 'Kalau tidak tahu, arahkan ke WhatsApp +62 811-5701-402.'
                    ]]],
                    'contents' => $contents,
                ]);
        } catch (\Throwable $e) {
            Log::error('Gemini connection error: ' . $e->getMessage());
            return response()->json(['reply' => 'Maaf, sistem sedang sibuk. Coba lagi ya!'], 502);
        }

        if ($res->failed()) {
            Log::error('Gemini API error', ['status' => $res->status(), 'body' => $res->body()]);
            return response()->json(['reply' => 'Maaf, sistem sedang sibuk. Coba lagi ya!'], 502);
        }

        return response()->json([
            'reply' => $res->json('candidates.0.content.parts.0.text')
                ?? 'Maaf, saya belum bisa menjawab itu.',
        ]);
    }
}