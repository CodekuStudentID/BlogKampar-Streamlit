@extends('layouts.frontend.layout')
@section('content')
    <div class="max-w-7xl mx-auto px-4 py-6">
        <!-- 🔥 COVER IMAGE -->
        <div style="margin-top: 50px" class="mb-6">
            <img src="{{ asset('storage/' . $post->images) }}" alt="{{ $post->title }}"
                class="w-full h-[400px] object-cover rounded-xl" loading="lazy">
        </div>
        <x-dynamicpath />


        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow">
                <h1 class="text-3xl font-bold mb-3">
                    {{ $post->title }}
                </h1>

                <div class="text-gray-500 text-sm mb-4">
                    {{ $post->created_at->format('d M Y') }} • {{ $post->views ?? 0 }} views
                </div>

                <div class="prose max-w-none">
                    {!! $post->content !!}
                </div>

                <div class="flex items-center space-x-2">

                    {{-- component likes menggunakan livewire --}}
                   <livewire:like-button :post="$post" :key="$post->id" />


                    <span class="text-sm font-bold text-gray-700">
                        Category : {{$post->category}}
                    </span>
                </div>
            </div>

            <!-- 🔵 RIGHT: POPULAR POSTS -->
            <div class="bg-white p-4 rounded-xl shadow">
                <h2 class="text-xl font-semibold mb-4 border-b pb-2">
                    🔥 Berita Populer
                </h2>

                @foreach ($popularPosts as $item)
                    <div class="flex gap-3 mb-4">
                        <img src="{{ asset('storage/' . $item->images) }}" class="w-20 h-20 object-cover rounded"
                            loading="lazy">

                        <div>
                            <a href="{{ route('web.show', $item->slug) }}"
                                class="font-semibold text-sm hover:text-red-500">
                                {{ $item->title }}
                            </a>

                            <div class="text-xs text-gray-500">
                                {{ $item->views ?? 0 }} views
                            </div>
                            <br>
                            <a href="{{ route('web.show', $item->slug) }}" style="color: red" class="px-4 py-2 rounded">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- 🔥 ARTIKEL TERBARU -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6 border-b pb-2">
                🆕 Artikel Terbaru
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                @foreach ($latestPosts as $item)
                    <div class="bg-white rounded-lg overflow-hidden shadow">
                        <img src="{{ asset('storage/' . $item->images) }}" class="w-full h-32 object-cover" loading="lazy">

                        <div class="p-3">
                            <a href="{{ route('web.show', $item->slug) }}"
                                class="font-semibold text-sm hover:text-red-500">
                                {{ \Illuminate\Support\Str::limit($item->title, 50) }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
