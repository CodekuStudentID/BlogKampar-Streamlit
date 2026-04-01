<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dunia Kampar</title>
    <link rel="icon" type="image/png" href="{{ asset('img/1774678106345-removebg-preview.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles

    </head>
<body class="bg-white text-slate-900 antialiased relative overflow-x-hidden">
<div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none bg-white">

    <div class="absolute -top-[5%] -left-[10%] w-[300px] h-[300px] md:w-[600px] md:h-[600px] bg-emerald-400/20 rounded-full blur-[80px] md:blur-[150px] animate-pulse"></div>

    <div class="hidden md:block absolute top-[20%] -right-[10%] w-[700px] h-[700px] bg-green-300/25 rounded-full blur-[160px]"></div>

    <div class="absolute -bottom-[10%] left-1/2 -translate-x-1/2 md:left-[10%] md:translate-x-0 w-[350px] h-[350px] md:w-[500px] md:h-[500px] bg-emerald-500/15 rounded-full blur-[100px] md:blur-[140px]"></div>

    <div class="absolute inset-0 bg-white/30 backdrop-blur-[40px] md:backdrop-blur-[80px]"></div>
</div>

    <nav x-data="{ open: false, userMenu: false }" class="bg-white/80 backdrop-blur-md border-b border-gray-100 fixed w-full z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">

                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('web.index') }}" class="flex items-center gap-3 group" wire:navigate>
                        <img src="{{ asset('img/1774678106345-removebg-preview.png') }}" class="h-10 w-auto transition-transform group-hover:scale-105" alt="Logo">
                        <span class="text-xl font-bold tracking-tight text-gray-800 hidden sm:block">Kampar<span class="text-green-600">Channel</span></span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('web.about') }}" class="text-sm font-medium text-gray-600 hover:text-green-600 transition" wire:navigate>About</a>
                    <a href="{{ route('web.privacy') }}" class="text-sm font-medium text-gray-600 hover:text-green-600 transition" wire:navigate>Privacy Policy</a>
                    <a href="{{ route('web.terms') }}" class="text-sm font-medium text-gray-600 hover:text-green-600 transition" wire:navigate>Terms Of Services</a>

                    <div class="h-6 w-px bg-gray-200 mx-2"></div>
                     <livewire:search-posts />

                    @auth
                        <div class="relative">
                            <button @click="userMenu = !userMenu" @click.away="userMenu = false" class="flex items-center gap-2 text-sm font-semibold text-gray-700 hover:text-green-600 focus:outline-none transition">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>

                            <div x-show="userMenu"
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="transform opacity-0 scale-95"
                                 x-transition:enter-end="transform opacity-100 scale-100"
                                 class="absolute right-0 mt-3 w-48 bg-white border border-gray-100 rounded-xl shadow-xl py-2 z-50"
                                 style="display: none;">
                                @if(Auth::user()->email === 'admin@gmail.com')
                                    <a href="/admin" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Admin Panel</a>
                                @endif
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" wire:navigate>User Dashboard</a>
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" wire:navigate>Settings</a>
                                <hr class="my-1 border-gray-100">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">Log Out</button>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="flex items-center gap-4">
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 hover:text-green-600 transition" wire:navigate>Login</a>
                            <a href="{{ route('register') }}" class="px-5 py-2 bg-green-600 text-white text-sm font-semibold rounded-full hover:bg-green-700 transition shadow-sm" wire:navigate>Join Now</a>
                        </div>
                    @endauth
                </div>

                <div class="md:hidden flex items-center">
                    <button @click="open = !open" class="text-gray-600 hover:text-green-600 focus:outline-none p-2 rounded-lg bg-gray-50">
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
             class="md:hidden bg-white border-b border-gray-100 px-4 pt-2 pb-6 space-y-3"
             style="display: none;">

             <a href="{{ route('web.about') }}" class="text-sm font-medium text-gray-600 hover:text-green-600 transition" wire:navigate>About</a>
            <a href="{{ route('web.privacy') }}" class="block text-base font-medium text-gray-700 hover:text-green-600" wire:navigate>Privacy Policy</a>
            <a href="{{ route('web.terms') }}" class="block text-base font-medium text-gray-700 hover:text-green-600" wire:navigate>Terms Of Services</a>

            <hr class="border-gray-100">

            @auth
                <div class="pt-2">
                    <p class="text-sm font-bold text-gray-800 mb-3">{{ Auth::user()->name }}</p>
                    <a href="{{ route('dashboard') }}" class="block text-gray-700 py-1" wire:navigate>Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="mt-2">
                        @csrf
                        <button type="submit" class="text-red-600 font-medium">Log Out</button>
                    </form>
                </div>
            @else
                <div class="grid grid-cols-2 gap-4 pt-2">
                    <a href="{{ route('login') }}" class="text-center py-2 text-sm font-medium text-gray-700 border border-gray-200 rounded-lg" wire:navigate>Login</a>
                    <a href="{{ route('register') }}" class="text-center py-2 text-sm font-medium text-white bg-green-600 rounded-lg shadow-sm" wire:navigate>Register</a>
                </div>
            @endauth
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
