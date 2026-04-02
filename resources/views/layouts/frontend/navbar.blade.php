<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dunia Kampar</title>
    <link rel="icon" type="image/png" href="{{ asset('img/1774678106345-removebg-preview.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @livewireStyles
    </head>
<body class="bg-white text-slate-900 antialiased relative overflow-x-hidden">
<div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none bg-white">

    <div class="absolute -top-[5%] -left-[10%] w-[300px] h-[300px] md:w-[600px] md:h-[600px] bg-emerald-400/20 rounded-full blur-[80px] md:blur-[150px] animate-pulse"></div>

    <div class="hidden md:block absolute top-[20%] -right-[10%] w-[700px] h-[700px] bg-green-300/25 rounded-full blur-[160px]"></div>

    <div class="absolute -bottom-[10%] left-1/2 -translate-x-1/2 md:left-[10%] md:translate-x-0 w-[350px] h-[350px] md:w-[500px] md:h-[500px] bg-emerald-500/15 rounded-full blur-[100px] md:blur-[140px]"></div>

    <div class="absolute inset-0 bg-white/30 backdrop-blur-[40px] md:backdrop-blur-[80px]"></div>
</div>

    <nav x-data="{ open: false, userMenu: false }" class="bg-white/90 backdrop-blur-md border-b border-gray-100 fixed w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('web.index') }}" class="flex items-center gap-2 group" wire:navigate>
                    <img src="{{ asset('img/1774678106345-removebg-preview.png') }}" class="h-9 w-auto transition-transform group-hover:scale-105" alt="Logo">
                    <span class="text-lg font-bold tracking-tight text-gray-800 hidden lg:block">Kampar<span class="text-green-600">Channel</span></span>
                </a>
            </div>

            <div class="hidden xl:flex items-center space-x-5">
                <div class="flex items-center space-x-4 text-[13px] font-medium text-gray-600">
                    <a href="{{ route('web.about') }}" class="hover:text-green-600 transition" wire:navigate>About</a>
                    <a href="{{ route('web.contacts') }}" class="hover:text-green-600 transition" wire:navigate>Contacts</a>
                    <div class="h-4 w-px bg-gray-200 mx-1"></div>
                    <a href="{{ route('web.category', 'nasional') }}" class="hover:text-green-600 transition uppercase" wire:navigate>Kampar</a>
                    <a href="{{ route('web.category', 'ekonomi') }}" class="hover:text-green-600 transition uppercase" wire:navigate>Ekonomi</a>
                    <a href="{{ route('web.category', 'budaya') }}" class="hover:text-green-600 transition uppercase" wire:navigate>Budaya</a>
                    <a href="{{ route('web.category', 'olahraga') }}" class="hover:text-green-600 transition uppercase" wire:navigate>Olahraga</a>
                    <a href="{{ route('web.category', 'teknologi') }}" class="hover:text-green-600 transition uppercase" wire:navigate>Teknologi</a>
                    <a href="{{ route('web.category', 'hiburan') }}" class="hover:text-green-600 transition uppercase" wire:navigate>Hiburan</a>
                </div>

                <div class="h-6 w-px bg-gray-200 mx-2"></div>

                <livewire:search-posts />

                @auth
                    <div class="relative ml-2">
                        <button @click="userMenu = !userMenu" @click.away="userMenu = false" class="flex items-center gap-2 text-sm font-semibold text-gray-700 hover:text-green-600 focus:outline-none transition">
                            <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-700">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <svg class="w-4 h-4 transition-transform" :class="userMenu ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>

                        <div x-show="userMenu" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" class="absolute right-0 mt-3 w-48 bg-white border border-gray-100 rounded-xl shadow-xl py-2 z-50" style="display: none;">
                            @if(Auth::user()->email === 'admin@gmail.com')
                                <a href="/admin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Admin Panel</a>
                            @endif
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Dashboard</a>
                            <hr class="my-1 border-gray-100">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 italic">Log Out</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-bold text-white bg-green-600 px-5 py-2 rounded-full hover:bg-green-700 transition shadow-sm">Login</a>
                @endauth
            </div>

            <div class="xl:hidden flex items-center gap-3">
                <livewire:search-posts />

                <button @click="open = !open" class="text-gray-600 hover:text-green-600 focus:outline-none p-2 rounded-xl bg-gray-50 border border-gray-100 transition-colors">
                    <svg class="w-6 h-6" x-show="!open" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                    <svg class="w-6 h-6" x-show="open" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="xl:hidden bg-white border-b border-gray-100 overflow-hidden"
         style="display: none;">

        <div class="px-4 pt-2 pb-6 space-y-1">
            <div class="py-2 text-[10px] font-black uppercase tracking-widest text-gray-400">Main Menu</div>
            <a href="{{ route('web.about') }}" class="block px-4 py-2.5 text-base font-semibold text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-xl transition" wire:navigate>About</a>
            <a href="{{ route('web.contacts') }}" class="block px-4 py-2.5 text-base font-semibold text-gray-700 hover:bg-green-50 hover:text-green-600 rounded-xl transition" wire:navigate>Contacts</a>

            <div class="py-2 text-[10px] font-black uppercase tracking-widest text-gray-400 mt-2">Kategori Berita</div>
            <div class="grid grid-cols-2 gap-1">
                <a href="{{ route('web.category', 'nasional') }}" class="px-4 py-2.5 text-sm font-bold text-gray-600 hover:text-green-600 transition uppercase" wire:navigate>Kampar</a>
                <a href="{{ route('web.category', 'ekonomi') }}" class="px-4 py-2.5 text-sm font-bold text-gray-600 hover:text-green-600 transition uppercase" wire:navigate>Ekonomi</a>
                <a href="{{ route('web.category', 'budaya') }}" class="px-4 py-2.5 text-sm font-bold text-gray-600 hover:text-green-600 transition uppercase" wire:navigate>Budaya</a>
                <a href="{{ route('web.category', 'olahraga') }}" class="px-4 py-2.5 text-sm font-bold text-gray-600 hover:text-green-600 transition uppercase" wire:navigate>Olahraga</a>
                <a href="{{ route('web.category', 'teknologi') }}" class="px-4 py-2.5 text-sm font-bold text-gray-600 hover:text-green-600 transition uppercase" wire:navigate>Teknologi</a>
                <a href="{{ route('web.category', 'hiburan') }}" class="px-4 py-2.5 text-sm font-bold text-gray-600 hover:text-green-600 transition uppercase" wire:navigate>Hiburan</a>
            </div>

            <hr class="border-gray-100 my-4">

            @auth
                <div class="bg-gray-50 rounded-2xl p-4">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-green-600 flex items-center justify-center text-white font-bold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-sm font-black text-gray-800">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <a href="{{ route('dashboard') }}" class="block w-full py-2 text-sm font-bold text-gray-700">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left py-2 text-sm font-bold text-red-600">Logout</button>
                        </form>
                    </div>
                </div>
            @else
                <div class="flex flex-col gap-3 pt-2">
                    <a href="{{ route('login') }}" class="flex justify-center items-center py-3 text-sm font-bold text-gray-700 border-2 border-gray-100 rounded-2xl hover:bg-gray-50 transition" wire:navigate>Login</a>
                    <a href="{{ route('register') }}" class="flex justify-center items-center py-3 text-sm font-bold text-white bg-green-600 rounded-2xl shadow-md" wire:navigate>Daftar Sekarang</a>
                </div>
            @endauth
        </div>
    </div>
</nav>

    <div class="h-16"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
        <x-dynamicpath />
    </div>

    <main class="py-2">
        @yield('content')
    </main>

    @livewireScripts
</body>
</html>
