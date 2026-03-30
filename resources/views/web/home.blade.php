@extends('layouts.frontend.layout')

@section('content')

    {{-- Hero/Banner Tetap di Atas --}}
    <x-banner />
    <x-about />
    <x-textartikel />

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- SECTION 1: BREAKING NEWS / NASIONAL (Layout: 1 Main + 3 Side) --}}
        <section class="py-10 border-b border-gray-100">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-extrabold text-gray-900 border-l-4 border-red-600 pl-3 uppercase tracking-tight">Nasional</h2>
                <a href="#" class="text-sm font-bold text-red-600 hover:underline">Lihat Semua</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                {{-- Main Nasional --}}
                <div class="lg:col-span-7 group cursor-pointer">
                    <div class="relative rounded-2xl overflow-hidden h-80 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1596436889106-be35e843f974?q=80&w=1000" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" alt="">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 p-6">
                            <span class="bg-red-600 text-[10px] text-white px-2 py-1 rounded mb-3 inline-block font-bold">TERKINI</span>
                            <h3 class="text-2xl font-bold text-white mb-3 leading-tight">Kebijakan Baru Pemerintah di Sektor Ekonomi Digital Tahun 2026</h3>
                            <div class="flex items-center gap-4 text-gray-300 text-xs">
                                <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path></svg> 1.2k</span>
                                <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg> 5.4k</span>
                                <a href="#" class="ml-auto text-white font-bold hover:text-red-400">Baca Selengkapnya &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Side Nasional List --}}
                <div class="lg:col-span-5 space-y-4">
                    @for ($i = 0; $i < 3; $i++)
                    <div class="flex gap-4 p-2 hover:bg-gray-50 rounded-xl transition group">
                        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=200" class="w-24 h-20 object-cover rounded-lg shadow-sm" alt="">
                        <div class="flex flex-col justify-between">
                            <h4 class="text-sm font-bold text-gray-800 group-hover:text-red-600 line-clamp-2 leading-snug">Update Pembangunan Infrastruktur Jalan Lintas Kampar - Pekanbaru</h4>
                            <div class="flex items-center gap-3 text-[10px] text-gray-400 font-bold">
                                <span>120 Likes</span>
                                <span>•</span>
                                <a href="#" class="text-red-600 uppercase">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section>

        {{-- SECTION 2: BUDAYA & LIFESTYLE (Layout: Horizontal Scroll/Grid Cards) --}}
        <section class="py-12">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-extrabold text-gray-900 border-l-4 border-green-600 pl-3 uppercase tracking-tight">Budaya & Hiburan</h2>
                <div class="flex gap-2">
                    <button class="p-2 bg-gray-100 rounded-full hover:bg-green-600 hover:text-white transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"></path></svg></button>
                    <button class="p-2 bg-gray-100 rounded-full hover:bg-green-600 hover:text-white transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg></button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach(['budaya', 'hiburan', 'lifestyle', 'budaya'] as $cat)
                <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden group hover:shadow-xl transition-all duration-300">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=500" class="w-full h-full object-cover group-hover:scale-110 transition-transform" alt="">
                        <span class="absolute top-3 right-3 bg-green-600 text-white text-[9px] font-bold px-2 py-1 rounded shadow-lg uppercase">{{ $cat }}</span>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-3 line-clamp-2 h-12 leading-tight group-hover:text-green-600 transition-colors">Festival Maawuo Danau Bakuok Kembali Digelar Meriah</h3>
                        <div class="flex items-center justify-between mb-4 text-[10px] font-bold text-gray-400 uppercase tracking-tighter">
                            <span class="flex items-center gap-1 text-red-500"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path></svg> 850 Likes</span>
                            <span><svg class="w-3 h-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg> 2.1k</span>
                        </div>
                        <a href="#" class="block w-full text-center py-2 bg-gray-50 rounded-lg text-xs font-bold text-gray-600 hover:bg-green-600 hover:text-white transition uppercase tracking-widest">Baca Selengkapnya</a>
                    </div>
                </article>
                @endforeach
            </div>
        </section>

        {{-- SECTION 3: TEKNOLOGI & EKONOMI (Layout: 3-Columns Compact) --}}
        <section class="py-12 border-t border-gray-100 mb-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                {{-- Column Teknologi --}}
                <div class="space-y-6">
                    <h2 class="text-xl font-black text-gray-900 flex items-center gap-2 uppercase"><span class="w-2 h-6 bg-blue-600 rounded"></span> Teknologi</h2>
                    @for($i=0; $i<3; $i++)
                    <div class="flex gap-4 group cursor-pointer">
                        <div class="w-20 h-20 rounded-xl overflow-hidden flex-shrink-0 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=200" class="w-full h-full object-cover group-hover:scale-110 transition-transform" alt="">
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800 line-clamp-2 group-hover:text-blue-600 transition-colors">Inovasi Robotik Pertanian dari Mahasiswa Lokal</h4>
                            <div class="flex items-center justify-between mt-2">
                                <span class="text-[9px] font-bold text-gray-400">45 Likes</span>
                                <a href="#" class="text-[9px] font-black text-blue-600 hover:underline uppercase">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                {{-- Column Ekonomi --}}
                <div class="space-y-6">
                    <h2 class="text-xl font-black text-gray-900 flex items-center gap-2 uppercase"><span class="w-2 h-6 bg-yellow-500 rounded"></span> Ekonomi</h2>
                    @for($i=0; $i<3; $i++)
                    <div class="flex gap-4 group cursor-pointer border-b border-gray-50 pb-4">
                        <div class="w-20 h-20 rounded-xl overflow-hidden flex-shrink-0 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1611974717537-96a6079d34b7?w=200" class="w-full h-full object-cover group-hover:scale-110 transition-transform" alt="">
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800 line-clamp-2 group-hover:text-yellow-600 transition-colors">Harga Karet dan Sawit di Kampar Mengalami Kenaikan Signifikan</h4>
                            <div class="flex items-center justify-between mt-2">
                                <span class="text-[9px] font-bold text-gray-400">210 Likes</span>
                                <a href="#" class="text-[9px] font-black text-yellow-600 hover:underline uppercase">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                {{-- Column Olahraga --}}
                <div class="space-y-6">
                    <h2 class="text-xl font-black text-gray-900 flex items-center gap-2 uppercase"><span class="w-2 h-6 bg-orange-500 rounded"></span> Olahraga</h2>
                    @for($i=0; $i<3; $i++)
                    <div class="flex gap-4 group cursor-pointer">
                        <div class="w-20 h-20 rounded-xl overflow-hidden flex-shrink-0 shadow-sm">
                            <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?w=200" class="w-full h-full object-cover group-hover:scale-110 transition-transform" alt="">
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-800 line-clamp-2 group-hover:text-orange-600 transition-colors">PSBS Kampar Siap Hadapi Laga Kandang Pekan Depan</h4>
                            <div class="flex items-center justify-between mt-2">
                                <span class="text-[9px] font-bold text-gray-400">302 Likes</span>
                                <a href="#" class="text-[9px] font-black text-orange-600 hover:underline uppercase">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

            </div>
        </section>

    </div>

@endsection
