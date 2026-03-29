@extends('layouts.frontend.layout')
@section('content')

    @if (empty([$mostPopular, $newPosts, $topPosts]))
        <div>data is not found</div>
    @else
        <x-banner />
        <x-about />
        <x-textartikel />

        {{-- Hero Section --}}
        <section class="pt-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $mostPopular->images) }}" alt="{{ $mostPopular->title }}"
                    class="w-full h-96 object-cover">

                {{-- Overlay --}}
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-6">
                    <h2 class="text-3xl font-bold mb-2">{{ $mostPopular->title }}</h2>
                    <p class="text-sm mb-4">{{ $mostPopular->created_at->format('d F Y') }}</p>
                    <a href="{{ route('web.show', $mostPopular->slug) }}"
                        class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </section>

        {{-- Dua Kolom Section --}}
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- Kiri: Berita Terbaru --}}
                <div class="md:col-span-2 space-y-6">
                    <h3 class="text-2xl font-bold">Berita Terbaru</h3>
<hr class="border-2">
                    @foreach ($newPosts as $post)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ asset('storage/' . $post->images) }}" alt="{{ $post->title }}"
                                class="w-full h-48 object-cover">
                            <div class="p-4">
                                <div class="flex justify-between items-center mb-2">
                                    <h4 class="text-xl font-bold">{{ $post->title }}</h4>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <!-- Icon mata -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        {{ $post->views }}
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500 mb-2">{{ $post->created_at->format('d F Y') }}</p>

                                <span class="text-sm text-gray-500">
                                    Category : {{ $mostPopular->category }}
                                </span>
<hr>
                                <a href="{{ route('web.show', $post->slug) }}" class="text-yellow-600 hover:underline">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach

                    {{-- Pagination --}}
                    <div class="mt-6">
                        {{ $newPosts->links() }}
                    </div>
                </div>

                {{-- Kanan: Berita Populer --}}
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold mb-4">Berita Populer</h3>
<hr class="border-2">
                    @foreach ($topPosts as $post)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ asset('storage/' . $post->images) }}" alt="{{ $post->title }}"
                                class="w-full h-32 object-cover">
                            <div class="p-3">
                                <div class="flex justify-between items-center mb-1">
                                    <h4 class="font-semibold">{{ $post->title }}</h4>
                                    <div class="flex items-center text-gray-500 text-sm">
                                        <!-- Icon mata -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                        {{ $post->views }}
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500">{{ $post->created_at->format('d F Y') }}</p>
                                <span class="text-sm text-gray-500">
                                    Category : {{ $mostPopular->category }}
                                </span>
<hr>
                                <a href="{{ route('web.show', $post->slug) }}" class="text-yellow-600 hover:underline">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
