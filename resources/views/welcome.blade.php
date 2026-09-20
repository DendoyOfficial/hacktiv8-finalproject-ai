<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Madjoe Cafe - Teman Harianmu yang Setia</title>

<!-- Tailwind CSS v3 (CDN) + config eksternal (harus setelah CDN) -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="{{ asset('js/tailwind-config.js') }}"></script>

<!-- Font Awesome Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>

<!-- Custom CSS -->
<link href="{{ asset('/css/madjoe.css') }}" rel="stylesheet"/>
</head>
<body class="font-sans text-white bg-madjoe antialiased selection:bg-white selection:text-madjoe">

<!-- BEGIN: MainHeader -->
<header class="sticky top-0 z-40 bg-[#b91c1c] border-b border-white/15 shadow-md transition-all duration-300"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between"><a class="flex items-center group" href="#"><div class="h-11 px-2 py-1 flex items-center justify-center group-hover:scale-105 transition-transform duration-200"><img alt="Madjoe Coffee &amp; Bakery" class="h-9 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGl7GeS6cv3B-thkN2_HHD9kwbpstA5hQqUrZ6hWDCqAhaEf9jDm51C7LLMB6IR2FOcoJWBRMx5QcqEW1YdV_ocJXIlM3Ck_Tca4S-aext2T9XvhKyMr0Oy5WGP81Jpf8G4T0cnUu29XOe51lbIgrqaGUnmJQW3Tvfme3UVGVZaUrjESKNhvuxesvlzAjqZRDVMLINwC6SDo5pn0Cj1iLJsWlQFzmrANcQgNtU86dSY8lZ7n2mvxlyqUH-hN2YtMIHH7M"/></div></a><nav class="hidden md:flex items-center space-x-8 text-sm font-semibold text-white/90"><a class="hover:text-white transition-colors" href="#cerita">Cerita Kami</a><a class="hover:text-white transition-colors" href="#menu">Menu</a><a class="hover:text-white transition-colors" href="#outlet">Outlet</a><a class="hover:text-white transition-colors" href="#halal">Sertifikasi Halal</a><a class="hover:text-white transition-colors" href="#kemitraan">Kemitraan</a><a class="hover:text-white transition-colors" href="#komunitas">Madjoe Event</a></nav><div class="hidden lg:flex items-center gap-3"><a class="inline-flex items-center gap-2 bg-white hover:bg-neutral-100 text-madjoe px-5 py-2.5 rounded-full text-sm font-bold shadow-md hover:shadow-lg transition-all" href="https://wa.me/" target="_blank"><i class="fa-solid fa-mug-hot text-madjoe"></i><span>Pesan Sekarang</span></a></div><button aria-label="Buka Menu" class="md:hidden text-white hover:text-neutral-200 focus:outline-none p-2" id="mobileMenuBtn"><i class="fa-solid fa-bars text-2xl"></i></button></div><div class="hidden md:hidden bg-white border-b border-neutral-200 px-6 py-5 space-y-4 shadow-xl text-neutral-800" id="mobileMenu"><a class="block font-medium text-neutral-800 hover:text-madjoe py-1" href="#cerita">Cerita Kami</a><a class="block font-medium text-neutral-800 hover:text-madjoe py-1" href="#menu">Menu Favorit</a><a class="block font-medium text-neutral-800 hover:text-madjoe py-1" href="#outlet">Outlet</a><a class="block font-medium text-neutral-800 hover:text-madjoe py-1" href="#halal">Sertifikasi Halal</a><a class="block font-medium text-neutral-800 hover:text-madjoe py-1" href="#kemitraan">Kemitraan</a><a class="block font-medium text-neutral-800 hover:text-madjoe py-1" href="#komunitas">Madjoe Event</a><div class="pt-2"><a class="w-full text-center block bg-madjoe text-white py-2.5 rounded-xl font-bold" href="#menu">Pesan Sekarang</a></div></div></header>
<!-- END: MainHeader -->

<main>
<!-- BEGIN: HeroSection -->
<section class="relative bg-gradient-to-br from-madjoe-dark via-[#b91c1c] to-madjoe-deeper text-white overflow-hidden border-b border-white/10"><div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#ffffff_1.2px,transparent_1.2px)] [background-size:22px_22px]"></div><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 relative z-10"><div class="grid lg:grid-cols-12 gap-10 lg:gap-12 items-center"><div class="lg:col-span-6 space-y-6 text-center lg:text-left"><div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/15 border border-white/25 text-xs font-bold uppercase tracking-wider text-white shadow-inner"><span class="w-2 h-2 rounded-full bg-amber-300 animate-ping"></span><span>Kopi Rasa Istimewa • Harga Sahabat</span></div><h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-tight text-white">Menemani Langkah &amp; Hari-Harimu Bersama <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 via-white to-red-100">Madjoe</span>.</h1><p class="text-base sm:text-lg text-red-100 max-w-xl mx-auto lg:mx-0 font-normal leading-relaxed">Dari cangkir kopi pertama hingga obrolan hangat senja hari. Madjoe hadir menyajikan racikan biji kopi Nusantara berkualitas dan kehangatan tulus di setiap tegukan.</p><div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2"><a class="px-8 py-4 rounded-full bg-white hover:bg-neutral-100 text-madjoe font-extrabold shadow-lg hover:-translate-y-0.5 transition-all flex items-center gap-2" href="#menu"><span>Eksplor Menu Favorit</span><i class="fa-solid fa-arrow-right text-xs"></i></a><a class="px-7 py-4 rounded-full bg-black/30 hover:bg-black/40 border border-white/30 text-white font-bold backdrop-blur-sm transition-all flex items-center gap-2" href="#kemitraan"><i class="fa-solid fa-handshake text-sm"></i><span>Gabung Kemitraan</span></a></div><div class="pt-4 flex items-center justify-center lg:justify-start gap-6 border-t border-white/15 text-left"><div class="flex items-center gap-3"><div class="flex -space-x-2"><div class="w-9 h-9 rounded-full bg-amber-500 border-2 border-white flex items-center justify-center text-xs font-black text-white shadow-sm"><i class="fa-solid fa-coffee"></i></div><div class="w-9 h-9 rounded-full bg-emerald-500 border-2 border-white flex items-center justify-center text-xs font-black text-white shadow-sm"><i class="fa-solid fa-heart"></i></div><div class="w-9 h-9 rounded-full bg-madjoe-dark border-2 border-white flex items-center justify-center text-xs font-black text-white shadow-sm"><i class="fa-solid fa-certificate"></i></div></div><div><div class="flex items-center gap-1 text-amber-300 text-xs"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><span class="text-white font-bold ml-1 text-xs">4.9 / 5.0</span></div><p class="text-[11px] text-red-100 font-medium">Dipilih &gt;80.000 Teman Madjoe</p></div></div></div></div><div class="lg:col-span-6 relative"><div class="relative mx-auto max-w-lg lg:max-w-none"><div class="absolute -inset-4 bg-gradient-to-r from-amber-200/20 via-white/10 to-madjoe-deeper rounded-3xl opacity-40 blur-2xl"></div><div class="relative rounded-3xl overflow-hidden border-4 border-white/30 shadow-2xl bg-madjoe-dark group"><img alt="Suasana Hangat Madjoe Cafe" class="w-full h-80 sm:h-[420px] object-cover object-center transform group-hover:scale-105 transition duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBw_uEVAwjT_RD2XdR9OC5ZOWN8Abrd1p9pgbSykvH5pywXydbvxCiFQ5r8QS65tSWRAvhz8W3ocF645yNn5dykymFYBN7f6_zGW1gZ2MuAG-4T3-NRKOCrmq0xVrQQnRPEiE2sPYRuPrclj4z59OGLFUMZsDZSxJ7H1Q3htqjnNTjUjtkUSe-5CxbM_yDXpNT7TFtNGfTTGMgG9B98QRpEZ0Zy2foV6Q9Vn0L2_xEls1YD3DEudE4qNg"/><div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-transparent pointer-events-none"></div><div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-black/40 backdrop-blur-md border border-white/20 text-xs font-bold text-white"><span class="w-2 h-2 rounded-full bg-emerald-400"></span> Ruang Nyaman &amp; Hangat</div><div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-md p-4 rounded-2xl text-neutral-900 shadow-xl border border-white/60 flex items-center justify-between"><div class="flex items-center gap-3"><div class="w-10 h-10 rounded-xl bg-madjoe flex items-center justify-center text-white flex-shrink-0"><i class="fa-solid fa-mug-saucer text-lg"></i></div><div><p class="text-[11px] font-bold uppercase tracking-wider text-madjoe">Signature Blend</p><p class="text-sm sm:text-base font-extrabold text-neutral-900 leading-tight">Kopi Susu Madjoe Aren</p><p class="text-[11px] text-neutral-500 font-medium">100% Gula Aren Organik &amp; Kopi Murni</p></div></div><div class="bg-red-50 border border-madjoe/20 text-madjoe font-black text-sm px-3.5 py-1.5 rounded-xl shadow-sm text-center flex-shrink-0"><span class="text-[10px] block font-semibold text-neutral-500 uppercase leading-none">Hanya</span>Rp 18k</div></div></div></div></div></div></div></section>
<!-- END: HeroSection -->

<!-- BEGIN: CounterStats -->
<section class="py-14 bg-white border-b border-neutral-200"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="grid grid-cols-1 md:grid-cols-3 gap-8 divide-y md:divide-y-0 md:divide-x divide-neutral-200 text-center"><div class="py-4 md:py-0"><div class="text-4xl lg:text-5xl font-extrabold text-madjoe mb-1 tracking-tight drop-shadow-sm">16+</div><p class="text-neutral-500 font-semibold text-sm uppercase tracking-wider">Kabupaten / Kota</p></div><div class="py-4 md:py-0"><div class="text-4xl lg:text-5xl font-extrabold text-madjoe mb-1 tracking-tight drop-shadow-sm">80.000+</div><p class="text-neutral-500 font-semibold text-sm uppercase tracking-wider">Teman Madjoe Setia</p></div><div class="py-4 md:py-0"><div class="text-4xl lg:text-5xl font-extrabold text-madjoe mb-1 tracking-tight drop-shadow-sm">53+</div><p class="text-neutral-500 font-semibold text-sm uppercase tracking-wider">Outlet Aktif Beroperasi</p></div></div></div></section>
<!-- END: CounterStats -->

<!-- BEGIN: StoryAboutSection -->
<section class="py-20 lg:py-24 bg-white overflow-hidden border-b border-neutral-200" id="cerita"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="grid lg:grid-cols-12 gap-10 items-center mb-16"><div class="lg:col-span-6"><span class="text-xs font-extrabold tracking-widest text-madjoe uppercase mb-2 block">Cerita Di Balik Cangkir</span><h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-neutral-900 tracking-tight leading-tight">Teman Harianmu <br class="hidden sm:inline"/>yang Selalu Setia.</h2></div><div class="lg:col-span-6"><p class="text-neutral-700 text-base sm:text-lg leading-relaxed">Kejar deadline, diskusi santai, atau sekadar rehat sejenak dari hiruk-pikuk aktivitas, Teman Madjoe tak pernah berjalan sendirian. Barista kami selalu siap menyambutmu dengan racikan kopi istimewa dan senyuman tulus untuk merayakan setiap pencapaian kecilmu setiap hari.</p></div></div><div class="relative rounded-3xl overflow-hidden shadow-xl bg-neutral-100 border-4 border-neutral-200"><img alt="Keluarga Barista Madjoe" class="w-full h-80 sm:h-[460px] object-cover object-top hover:scale-[1.02] transition duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1-6Ax9KwnARKnypwddttXa8bLw4qxqOLZMVKAJN5qJ47ExCKaPvc4W8pfMm68R1oVLBLakVVLccsZdO2gtu9MkHCmVff-KaDFWyYz8fOFvW4Gbth_4-sWYMpICQxTcIsK3NPN1P9m0Av3QkBfHYg3evp-0i1I8cK1BqO9UUBLodXwLdZ1IUbC24gqaIMm4utW1L73xBcIZXQiUsAjZZrh_sbv9_XfktZhF3jq89GCuInqHnm7fPBtyg"/><div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent flex flex-col justify-end p-6 sm:p-10 text-white"><div class="max-w-xl"><span class="px-3 py-1 bg-madjoe text-white text-xs font-bold rounded-md uppercase tracking-wider mb-3 inline-block border border-white/20">Dedikasi Penuh Cinta</span><h3 class="text-2xl sm:text-3xl font-bold text-white">Diracik Oleh Barista Berpengalaman</h3><p class="text-neutral-200 text-sm mt-2">Setiap biji kopi kami sangrai dengan presisi tinggi demi menjaga konsistensi cita rasa autentik khas nusantara.</p></div></div></div></div></section>
<!-- END: StoryAboutSection -->

<!-- BEGIN: MenuSection -->
<section class="py-20 lg:py-28 bg-[#b91c1c] text-white border-b border-white/10 relative overflow-hidden" id="menu"><div class="absolute inset-0 opacity-15 pointer-events-none bg-[radial-gradient(#ffffff_1.2px,transparent_1.2px)] [background-size:22px_22px]"></div><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10"><div class="text-center max-w-3xl mx-auto mb-16"><span class="inline-block text-xs font-extrabold uppercase tracking-widest bg-white/20 border border-white/25 px-4 py-1.5 rounded-full text-amber-200 mb-3">Pilihan Terlaris</span><h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight">Favorit Teman Madjoe</h2><p class="text-red-100 mt-3 text-base sm:text-lg leading-relaxed">Kombinasi rasa yang kaya, segar, dan bikin harimu semakin bertenaga. Temukan menu favoritmu hari ini!</p></div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"><div class="group bg-white rounded-3xl p-5 border border-white/20 shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between text-neutral-800"><div class="relative bg-neutral-100 rounded-2xl p-6 mb-4 flex items-center justify-center overflow-hidden h-64"><span class="absolute top-3 left-3 bg-madjoe text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase z-10">Best Seller</span><img alt="Kopi Susu Madjoe" class="h-44 object-cover rounded-xl group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdRdwK88sf-WqaHYRVR2uN89Jl357-1LKkeYG1dfVzSUoG2Ba1dhcOksJQmiHRgajJRX67JtI0FugqSvTkaG1siCtazMf_swe_QH8NlMBazumZ5Ssgtt4ajncolJ1_VzVMO2GcUOdrtK3BuHZN647HbIz1lhG_qH-LFQx9P1olWNUGViQe2B1gUzZ4TWFSDPRrgFA8BUgL0P-OtdCMgc7ILXE0Qn6uFdRh0MyY7wfXwKYoUHvWqQfIcQ"/></div><div><div class="flex items-center justify-between"><span class="text-xs font-bold text-neutral-400 uppercase">Espresso Based</span><span class="text-madjoe font-black text-base">Rp 18.000</span></div><h3 class="text-lg font-bold text-neutral-900 mt-1 group-hover:text-madjoe transition-colors">Kopi Susu Madjoe</h3><p class="text-xs text-neutral-500 mt-1 leading-relaxed">Espresso lembut berpadu susu creamy dan manisnya gula aren murni khas nusantara.</p><button class="mt-4 w-full py-2.5 rounded-xl bg-madjoe hover:bg-madjoe-dark text-white text-xs font-bold transition-colors flex items-center justify-center gap-1.5 shadow-md"><i class="fa-solid fa-cart-plus text-xs"></i> Pesan Menu</button></div></div><div class="group bg-white rounded-3xl p-5 border border-white/20 shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between text-neutral-800"><div class="relative bg-neutral-100 rounded-2xl p-6 mb-4 flex items-center justify-center overflow-hidden h-64"><span class="absolute top-3 left-3 bg-amber-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase z-10">Signature</span><img alt="Kopi Susu Raya Madjoe" class="h-44 object-cover rounded-xl group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHpFih6B25umt47X23z8a_Ckjb8iUU-mILRP-zIj-Uu6AIRZc6DIjFQTTtSoQXyaHAQ7WHV11eHBVCJX_rfUWS4GdrIzk3RqU_iHoZESNxA5NpgZQfNY7PjoerddUFR32Iq0ybvoIe2A-qYZzlF3Re5qgnRE1va9le70DB809ftOcYuY2F8Pzb1NQe_PKKNEOKT6gMwoWF24C9fynYpz2UkxKR2ST-J8OaX_kLZWlAe6PnWNEOM6cCvw"/></div><div><div class="flex items-center justify-between"><span class="text-xs font-bold text-neutral-400 uppercase">Signature Series</span><span class="text-madjoe font-black text-base">Rp 22.000</span></div><h3 class="text-lg font-bold text-neutral-900 mt-1 group-hover:text-madjoe transition-colors">Kopi Susu Raya</h3><p class="text-xs text-neutral-500 mt-1 leading-relaxed">Double shot espresso dengan ekstra foam lembut dan hint karamel bakar menggoda.</p><button class="mt-4 w-full py-2.5 rounded-xl bg-madjoe hover:bg-madjoe-dark text-white text-xs font-bold transition-colors flex items-center justify-center gap-1.5 shadow-md"><i class="fa-solid fa-cart-plus text-xs"></i> Pesan Menu</button></div></div><div class="group bg-white rounded-3xl p-5 border border-white/20 shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between text-neutral-800"><div class="relative bg-neutral-100 rounded-2xl p-6 mb-4 flex items-center justify-center overflow-hidden h-64"><span class="absolute top-3 left-3 bg-emerald-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase z-10">Non-Coffee</span><img alt="Matcha Macchiato" class="h-44 object-cover rounded-xl group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBfHLXP3ikY7IXlXuuM7ltdU-LeYIdwotqfTElOI9tby5PQMBKdDmKuylSTQugs70QM6AbibxZTX10lS4ChyZTPS-wTdwhVjpA5CeUP3sEKbyiVOlqoGfUu1LAF_k7FuB7-szojJIjBxs7DpHDOrbp9i5mHK-X5WK3_EZHoePvRwsBDRPXLPuFR5fFn0bj7l0Xus89G9JT0xVepbS0at1k2uRInkjGBgHULdT48kE8FyO-kNM-qgaLZXA"/></div><div><div class="flex items-center justify-between"><span class="text-xs font-bold text-neutral-400 uppercase">Artisan Tea</span><span class="text-madjoe font-black text-base">Rp 24.000</span></div><h3 class="text-lg font-bold text-neutral-900 mt-1 group-hover:text-madjoe transition-colors">Matcha Macchiato</h3><p class="text-xs text-neutral-500 mt-1 leading-relaxed">Bubuk matcha murni Uji dengan lapisan krim macchiato gurih manis lembut.</p><button class="mt-4 w-full py-2.5 rounded-xl bg-madjoe hover:bg-madjoe-dark text-white text-xs font-bold transition-colors flex items-center justify-center gap-1.5 shadow-md"><i class="fa-solid fa-cart-plus text-xs"></i> Pesan Menu</button></div></div><div class="group bg-white rounded-3xl p-5 border border-white/20 shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between text-neutral-800"><div class="relative bg-neutral-100 rounded-2xl p-6 mb-4 flex items-center justify-center overflow-hidden h-64"><span class="absolute top-3 left-3 bg-cyan-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase z-10">Fresh</span><img alt="Lemon Punch Americano" class="h-44 object-cover rounded-xl group-hover:scale-110 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5aHlIn5GPsHqCG6x2aeTJ2W-bphfOIr1mqjGT0mmSQS0Hq5o5N2hYxgv0DKcflAXuIcT6ElusedeaRcrxXaj3C-mcn_m0yvJKbBmnk78EJtzbJEFy4OJoQ1-JkkdC8G0AQ_3pY6ne7MnSglIe-H9Sshts3IRjGQ4GZ27cbJ1lAV1g8E6kI6E8T2runTPlqv4W7XEZRASnLti6KNjUfdlUNJVPwtj4PMC3zZHDGgwGYAJ3v7QmV0OQIg"/></div><div><div class="flex items-center justify-between"><span class="text-xs font-bold text-neutral-400 uppercase">Refreshing</span><span class="text-madjoe font-black text-base">Rp 20.000</span></div><h3 class="text-lg font-bold text-neutral-900 mt-1 group-hover:text-madjoe transition-colors">Lemon Americano</h3><p class="text-xs text-neutral-500 mt-1 leading-relaxed">Segarnya sari lemon asli berpadu pahit eksotis espresso arabika dingin.</p><button class="mt-4 w-full py-2.5 rounded-xl bg-madjoe hover:bg-madjoe-dark text-white text-xs font-bold transition-colors flex items-center justify-center gap-1.5 shadow-md"><i class="fa-solid fa-cart-plus text-xs"></i> Pesan Menu</button></div></div></div></div></section>
<!-- END: MenuSection -->

<!-- BEGIN: HalalCertification -->
<section class="py-16 bg-white border-b border-neutral-200" id="halal"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="bg-neutral-50 rounded-3xl p-8 sm:p-12 shadow-sm border border-neutral-200"><div class="grid lg:grid-cols-12 gap-8 items-center"><div class="lg:col-span-5 flex justify-center"><div class="relative rounded-2xl overflow-hidden shadow-md max-w-sm w-full border border-neutral-200"><img alt="Penyerahan Sertifikat Halal Madjoe" class="w-full h-64 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCj5CU82tKkSUoo38MMt6RdZqVwYMYBwrQJ0ce6OIavLRzVH_zxZfT_m06vVz_2JJYJFfpxJ_fwt7V4NX0eiaXIwKSWyL228KtYf2DKYZGcIQShbnda5zWpKnOyMeHBztN0BPPXyTJaArVeaN_qS3kruYNcDdwD6zrBDiCm3nWXYI4iEgKs3HrS4e462J3rU6YultqUaD9CSZBIWcbGYntq0H67Cvby4KtQeVrY4vJ9bG43MYGghIkXuA"/><div class="absolute top-3 right-3 bg-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1 shadow-md"><i class="fa-solid fa-circle-check"></i> 100% Halal</div></div></div><div class="lg:col-span-7 space-y-4"><div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-500/10 text-emerald-600 text-xs font-bold rounded-lg border border-emerald-500/20"><i class="fa-solid fa-shield-halved"></i> Jaminan Mutu &amp; Kebaikan</div><h2 class="text-2xl sm:text-3xl font-black text-neutral-900">Sertifikasi Halal Resmi BPJPH &amp; MUI</h2><p class="text-neutral-700 text-sm sm:text-base leading-relaxed">Kami berkomitmen memberikan ketenangan dan kenyamanan optimal bagi seluruh penikmat kopi di Indonesia. Madjoe secara konsisten mengaplikasikan Sistem Jaminan Produk Halal (SJPH) yang telah terverifikasi resmi oleh BPJPH dan LPPOM MUI di seluruh lini operasional outlet kami.</p><div class="pt-2 flex items-center gap-4 text-xs font-mono text-neutral-800 bg-white p-3 rounded-xl border border-neutral-200 inline-flex shadow-sm"><i class="fa-solid fa-certificate text-emerald-600 text-base"></i><span>ID REGISTRASI HALAL: <strong class="text-madjoe font-bold">ID41110024716500725</strong></span></div></div></div></div></div></section>
<!-- END: HalalCertification -->

<!-- BEGIN: PartnershipBanner -->
<section class="py-20 lg:py-24 bg-gradient-to-r from-madjoe-deeper via-madjoe-dark to-madjoe text-white relative overflow-hidden border-b border-white/10" id="kemitraan">
<div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
<span class="inline-block text-xs font-extrabold uppercase tracking-widest bg-black/30 px-4 py-1.5 rounded-full mb-4 border border-white/20">
          Peluang Bisnis Kedai Kopi
        </span>
<h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight max-w-2xl mx-auto leading-tight text-white">
          Mari Melangkah Maju Bersama Madjoe
        </h2>
<p class="text-red-100 text-base sm:text-lg max-w-2xl mx-auto mt-4 leading-relaxed font-normal">
          Satukan langkah untuk jangkauan yang lebih luas. Wujudkan impian memiliki kedai kopi mandiri yang menguntungkan dan dicintai komunitas lokal Anda.
        </p>
<div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
<a class="px-8 py-4 rounded-full bg-white text-madjoe font-extrabold hover:bg-neutral-100 shadow-xl transition-all flex items-center gap-2" href="#chatWidget" onclick="openChatWithContext('Halo, saya tertarik dengan proposal kemitraan / franchise Madjoe Cafe!')">
<i class="fa-solid fa-handshake"></i>
<span>Daftar Kemitraan</span>
</a>
<a class="px-8 py-4 rounded-full bg-black/40 hover:bg-black/60 border border-white/30 text-white font-bold backdrop-blur-sm transition-all" href="https://wa.me/" target="_blank">
            Hubungi Tim Ekspansi
          </a>
</div>
<div class="mt-14 max-w-4xl mx-auto rounded-2xl overflow-hidden border border-white/20 shadow-2xl">
<img alt="Teman Madjoe Menikmati Waktu Bersama" class="w-full h-64 sm:h-96 object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIrWQWJiCm72FFUOvcXUMsbKJoRvfGiy_GSnlwIjshTq4VNg4YcKIEHwaVR1CNvjiA9sjX0zxjjUJ01J7wwP4cjbKRTRztW_IiJE-c0IJVSLFcyYfgxkebdO9-23_VNBL6YFvlmDlN1IY2-8bdb9ZPmH2BaJ5GIgAEyGEiD_n9yMMYiWEmPBGSqJzVioUgLyFBWZNBLqR_K_p65gN2gobIur7a3y-noWwFfQotlJRUIn1em_5HN-b23Q"/>
</div>
</div>
</section>
<!-- END: PartnershipBanner -->

<!-- BEGIN: CommunitySocialFeed -->
<section class="py-20 lg:py-24 bg-white border-b border-neutral-200" id="komunitas"><div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"><div class="text-center mb-12"><h2 class="text-3xl sm:text-4xl font-black text-neutral-900 tracking-tight">@@madjoecafe</h2><p class="text-madjoe text-sm mt-2 font-semibold">Bagikan momen serumu bersama kami dengan tagar #TemanMadjoe</p></div><div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6"><div class="relative group rounded-3xl overflow-hidden shadow-md aspect-square bg-neutral-100 border border-neutral-200"><img alt="Instagram Post 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBID-j-EdwD6SYgIda6cGKhfDRYroSnVG1f1awEiKxdEHkDkRyhFrJnYejMZMZvUkftKJBiey_M1q1MY66PBikHzPqEnCp9cJCG7-9Y1rBo8-im0mQcGqtSvUW1AH7zgICiZUmRswqltUEPG73JorSAGPgP-myCXumKelzSvjWLvToKiKteYu5ig_uF0Hcpcrid6WuQ2QixRQgQ4gDSuXHmCeFNCX0l1Ygn3aNorQD524uz1-wFPVAIhA"/><div class="absolute inset-0 bg-madjoe-dark/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4 text-white text-lg"><span><i class="fa-solid fa-heart text-white"></i> 1.2k</span><span><i class="fa-solid fa-comment text-white"></i> 84</span></div></div><div class="relative group rounded-3xl overflow-hidden shadow-md aspect-square bg-neutral-100 border border-neutral-200"><img alt="Instagram Post 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuARSaQpJ2VM7-lXn1t4J-Pp_XP2dyZ7WnPAC7Qit9Wzi8t44GGN-glW0PbG1n_cvOropb0P91SgkQPK3PbNpYi6c_PfPeG9rzIOFu_PeJuSxiyjZMUoBT3gqSGJ7rYGTeYXQjXK9A0aCQjlv8eg5QnX4YOxzdgUB7--mW50p-c-qxIZ9G1WTdOU3QZGojxItbWcwTgdQXTPdC07ly3FUph9OVESVnqCAdzSgAAEtdnm2dGRjp4TUQZ7bQ"/><div class="absolute inset-0 bg-madjoe-dark/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4 text-white text-lg"><span><i class="fa-solid fa-heart text-white"></i> 2.4k</span><span><i class="fa-solid fa-comment text-white"></i> 112</span></div></div><div class="relative group rounded-3xl overflow-hidden shadow-md aspect-square bg-neutral-100 border border-neutral-200"><img alt="Instagram Post 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYvMunqwEjnu43zeoxIudwWayW6eZbAYnkBPYtqCLK7dVeNWdqat8Hecd9s9IWqsBhnWMKrHqo0BsuXrxRpA4sGrmM-lZ5xKRbjQMFDZpQFhYB8frR1mRiwbbPc22WHed0QQQ9osIag1gs7VA76y7n7xxpgdgxAGUDj7UgpZmASfm2My16AnSvHW6Y4wlgyRM16Bg4ONWxHQ0X0TVTL0l6o0byy1bNwCXcppkLKuQV9nBHinOUinDEXA"/><div class="absolute inset-0 bg-madjoe-dark/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4 text-white text-lg"><span><i class="fa-solid fa-heart text-white"></i> 980</span><span><i class="fa-solid fa-comment text-white"></i> 45</span></div></div></div></div></section>
<!-- END: CommunitySocialFeed -->
</main>

<!-- BEGIN: Footer -->
<footer class="bg-madjoe-deeper text-red-100 pt-16 pb-12 border-t border-white/10">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-white/10">
<!-- Brand Summary -->
<div class="lg:col-span-2 space-y-4"><div class="flex items-center"><div class="h-12 px-3 py-1 flex items-center justify-center rounded-xl bg-white/10 border border-white/15"><img alt="Madjoe Coffee &amp; Bakery" class="h-9 w-auto object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7PSMKC6orvWvnvFkZYAWQDP-j8RfkwvYwfxJL3AB4FISd0CJ5v_o0gadOEu2gOu_KBQJAzPzjcfA_Jou5kQW9XWxHfpnhoYjBX06KLCFVA4RJH1ZAGdvdNkXZBePMRojlCVkL0-wb79uS7z7bq050yZ2QPzqA6qmgW7vucBxjoci7RokECxq6NRhzFeUUxvbABnuPUtQbKXK1FtNX2ip64dSIrgxRqu2Yb0G8hqGlKQ9HqjkFaIt9qmM5HbSUusFtVPY"/></div></div><p class="text-sm text-red-100 max-w-sm leading-relaxed">Dari kedai kecil hingga jaringan cafe yang melayani ribuan penikmat rasa setiap hari. Kami berdedikasi menyajikan kopi terbaik Nusantara dengan sentuhan kehangatan tulus.</p><div class="flex items-center gap-4 pt-2 text-white"><a aria-label="Instagram" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white hover:text-madjoe flex items-center justify-center transition-colors" href="#"><i class="fa-brands fa-instagram text-sm"></i></a><a aria-label="TikTok" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white hover:text-madjoe flex items-center justify-center transition-colors" href="#"><i class="fa-brands fa-tiktok text-sm"></i></a><a aria-label="YouTube" class="w-9 h-9 rounded-full bg-white/10 hover:bg-white hover:text-madjoe flex items-center justify-center transition-colors" href="#"><i class="fa-brands fa-youtube text-sm"></i></a></div></div>
<!-- Links: Halaman -->
<div>
<h4 class="text-white text-sm font-bold tracking-wider uppercase mb-4">Halaman</h4>
<ul class="space-y-2.5 text-sm text-red-200">
<li><a class="hover:text-white transition-colors" href="#cerita">Cerita Kami</a></li>
<li><a class="hover:text-white transition-colors" href="#outlet">Daftar Outlet</a></li>
<li><a class="hover:text-white transition-colors" href="#menu">Menu Favorit</a></li>
<li><a class="hover:text-white transition-colors" href="#kemitraan">Program Kemitraan</a></li>
<li><a class="hover:text-white transition-colors" href="#karir">Karir &amp; Barista</a></li>
</ul>
</div>
<!-- Links: Hubungi Kami -->
<div>
<h4 class="text-white text-sm font-bold tracking-wider uppercase mb-4">Hubungi Kami</h4>
<ul class="space-y-3 text-sm text-red-100">
<li class="flex items-start gap-2.5">
<i class="fa-solid fa-location-dot text-amber-300 mt-1 text-sm"></i>
<span>Jl. Perdana No. 88, Pontianak &amp; Kota Besar Indonesia</span>
</li>
<li class="flex items-center gap-2.5">
<i class="fa-solid fa-phone text-amber-300 text-sm"></i>
<span>+62 811-5701-402</span>
</li>
<li class="flex items-center gap-2.5">
<i class="fa-solid fa-envelope text-amber-300 text-sm"></i>
<span>halo@@madjoecafe.id</span>
</li>
</ul>
</div>
<!-- Sertifikasi Halal Info -->
<div>
<h4 class="text-white text-sm font-bold tracking-wider uppercase mb-4">Sertifikasi Resmi</h4>
<div class="bg-black/30 border border-white/15 p-4 rounded-2xl">
<div class="flex items-center gap-3">
<i class="fa-solid fa-certificate text-2xl text-emerald-400"></i>
<div>
<p class="text-xs font-bold text-white uppercase">Halal Indonesia</p>
<p class="text-[10px] text-red-200 font-mono mt-0.5">ID41110024716500725</p>
</div>
</div>
<p class="text-[11px] text-red-200 mt-2">Teruji dan patuh pada ketentuan SJPH BPJPH Republik Indonesia.</p>
</div>
</div>
</div>
<!-- Copyright Subfooter -->
<div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-red-200 gap-4">
<div class="flex items-center gap-2">
<span class="font-extrabold text-white">Menemani Harimu.</span>
<span>© 2026 Madjoe Coffee &amp; Bakery. Hak Cipta Dilindungi.</span>
</div>
<div class="flex items-center gap-6">
<a class="hover:text-white" href="#">Kebijakan Privasi</a>
<a class="hover:text-white" href="#">Syarat &amp; Ketentuan</a>
</div>
</div>
</div>
</footer>
<!-- END: Footer -->

<!-- BEGIN: FloatingCustomerServiceWidget -->
<div class="fixed bottom-6 right-6 z-50 flex flex-col items-end pointer-events-auto" data-purpose="floating-cs-widget" id="chatWidget">
<div class="hidden w-[340px] sm:w-[380px] bg-white rounded-3xl shadow-2xl border border-neutral-200 overflow-hidden mb-4 transition-all duration-300 transform scale-95 opacity-0" id="chatPopover">
<div class="bg-gradient-to-r from-madjoe-dark to-madjoe text-white p-4 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="relative">
<div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center font-bold text-white">
<i class="fa-solid fa-mug-saucer text-lg"></i>
</div>
<span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-400 border-2 border-madjoe rounded-full"></span>
</div>
<div>
<h4 class="font-bold text-sm leading-tight">Barista Madjoe (CS)</h4>
<p class="text-[11px] text-red-100">Siap melayani • <span class="font-semibold text-emerald-300">Online</span></p>
</div>
</div>
<button aria-label="Tutup Chat" class="text-white/80 hover:text-white text-lg w-8 h-8 rounded-full hover:bg-white/10 flex items-center justify-center" id="closeChatBtn">
<i class="fa-solid fa-xmark"></i>
</button>
</div>
<div class="p-4 space-y-3 bg-neutral-50 h-72 overflow-y-auto custom-scroll text-xs">
<div class="flex gap-2">
<div class="w-7 h-7 rounded-full bg-madjoe text-white flex items-center justify-center flex-shrink-0 text-[10px]">
<i class="fa-solid fa-coffee"></i>
</div>
<div class="bg-white p-3 rounded-2xl rounded-tl-none border border-neutral-200 shadow-sm max-w-[80%] text-neutral-800">
<p class="font-semibold">Halo Teman Madjoe! 👋</p>
<p class="mt-1">Ada yang bisa kami bantu seputar menu, promo hari ini, atau informasi kemitraan franchise?</p>
</div>
</div>
<div class="pt-2 space-y-1.5 pl-9">
<p class="text-[10px] font-bold text-neutral-400 uppercase tracking-wider">Pertanyaan Cepat:</p>
<button class="block w-full text-left bg-white hover:bg-neutral-100 text-neutral-700 font-medium px-3 py-1.5 rounded-xl border border-neutral-200 hover:border-red-300 transition-colors" onclick="sendQuickReply('Rekomendasi menu terlaris Madjoe apa saja?')">
            ☕ Rekomendasi Menu Terlaris
          </button>
<button class="block w-full text-left bg-white hover:bg-neutral-100 text-neutral-700 font-medium px-3 py-1.5 rounded-xl border border-neutral-200 hover:border-red-300 transition-colors" onclick="sendQuickReply('Bisa kirimkan info paket kemitraan Madjoe?')">
            🤝 Info Proposal Kemitraan
          </button>
<button class="block w-full text-left bg-white hover:bg-neutral-100 text-neutral-700 font-medium px-3 py-1.5 rounded-xl border border-neutral-200 hover:border-red-300 transition-colors" onclick="sendQuickReply('Di mana lokasi outlet Madjoe terdekat?')">
            📍 Lokasi Outlet Terdekat
          </button>
</div>
<div class="space-y-3" id="dynamicMessages"></div>
</div>
<form class="p-3 bg-white border-t border-neutral-200 flex items-center gap-2" id="chatForm">
<input class="w-full text-xs rounded-xl border-neutral-300 text-neutral-800 focus:border-madjoe focus:ring-madjoe py-2 px-3" id="chatInput" placeholder="Ketik pesan untuk Barista..." type="text"/>
<button aria-label="Kirim Pesan" class="bg-madjoe hover:bg-madjoe-dark text-white w-9 h-9 rounded-xl flex items-center justify-center flex-shrink-0 transition-colors" type="submit">
<i class="fa-solid fa-paper-plane text-xs"></i>
</button>
</form>
</div>
<button aria-label="Buka Chat CS Madjoe" class="group relative flex items-center gap-3 bg-white hover:bg-neutral-100 text-madjoe p-3.5 sm:px-5 sm:py-3.5 rounded-full shadow-2xl hover:shadow-black/30 hover:-translate-y-1 transition-all duration-300 border-2 border-madjoe-dark" id="chatLauncher">
<span class="absolute top-0 right-0 -mt-1 -mr-1 flex h-3.5 w-3.5">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-emerald-500 border-2 border-white"></span>
</span>
<div class="text-xl group-hover:rotate-12 transition-transform duration-200">
<i class="fa-solid fa-comments"></i>
</div>
<div class="hidden sm:flex flex-col text-left">
<span class="text-xs font-bold leading-tight">Tanya Barista</span>
<span class="text-[10px] text-emerald-600 font-semibold leading-none">Online Sekarang</span>
</div>
</button>
</div>
<!-- END: FloatingCustomerServiceWidget -->

<script src="{{ asset('/js/madjoe.js') }}" defer></script>
</body>
</html>