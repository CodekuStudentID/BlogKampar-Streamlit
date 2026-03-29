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

<body class="bg-gray-100">

    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="{{route('web.index')}}" class="flex items-center space-x-2 text-green-600 font-bold text-2xl" wire:navigate>
                    <img src="{{ asset('img/1774678106345-removebg-preview.png') }}" width="150" height="150" alt=""
                        srcset="">
                    <span>Kampar Channel</span>
                </a>
{{-- Dekstop Navigation --}}
                <div class="hidden md:flex space-x-6">
                    <a href="{{route('web.privacy')}}" class="text-gray-700 hover:text-red-600 font-medium" wire:navigate>Privacy Policy</a>
                    <a href="{{route('web.terms')}}" class="text-gray-700 hover:text-red-600 font-medium" wire:navigate>Terms Of Services</a>
                    <a href="/admin/login" class="text-gray-700 hover:text-red-600 font-medium" wire:navigate>Login</a>
                </div>
{{-- Mobile Menu Button --}}
                <div class="md:hidden">
                    <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                        class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
{{-- Mobile Menu --}}
        <div id="mobile-menu" class="md:hidden hidden px-2 pt-2 pb-3 space-y-1 bg-white shadow-md">
            <a href="{{route('web.privacy')}}" class="block text-gray-700 hover:text-red-600 font-medium" wire:navigate>Privacy Police</a>
            <a href="{{route('web.terms')}}" class="block text-gray-700 hover:text-red-600 font-medium" wire:navigate>Terms Of Services</a>
            <a href="/admin/login" class="text-gray-700 hover:text-red-600 font-medium" wire:navigate>Login</a>
        </div>
    </nav>

<main>
    @yield('content')
</main>
