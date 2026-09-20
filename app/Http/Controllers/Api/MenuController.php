<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        return MenuResource::collection(
            Menu::where('is_active', true)->get()
        );
    }

    public function show(Menu $menu)
    {
        return new MenuResource($menu);
    }
}

