{{-- Container Utama dengan Alpine.js untuk kontrol Modal --}}
<div x-data="{ open: false }"
     @keydown.window.cmd.k.prevent="open = true"
     @keydown.window.ctrl.k.prevent="open = true"
     @keydown.window.escape="open = false"
     class="relative">

    {{-- 1. Tombol Pemicu di Navbar (Opsional, sebagai petunjuk visual) --}}
    <button @click="open = true" class="flex items-center gap-3 px-4 py-2 bg-gray-100 hover:bg-gray-200 border border-gray-200 rounded-full text-sm text-gray-500 transition shadow-inner">
        <svg class="h-4 w-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
        <span>Cari berita...</span>
        <span class="text-xs font-mono text-gray-400 border border-gray-300 px-1.5 py-0.5 rounded">Ctrl+K</span>
    </button>

    {{-- 2. Modal Mengambang & Background Blur (Imersif) --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-[100] overflow-y-auto p-4 sm:p-6 md:p-20"
         style="display: none;">

        {{-- Background Overlay dengan Blur Ekstrem --}}
        <div class="fixed inset-0 bg-slate-900/60 backdrop-blur-xl transition-opacity" @click="open = false"></div>

        {{-- Panel Pencarian Mengambang --}}
        <div x-show="open"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:scale-95"
             class="mx-auto max-w-2xl transform divide-y divide-gray-100 overflow-hidden rounded-[2rem] bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">

            {{-- Input Search Box --}}
            <div class="relative">
                <svg class="pointer-events-none absolute left-6 top-1/2 h-6 w-6 -translate-y-1/2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                <input
                    wire:model.live.debounce.500ms="search"
                    type="text"
                    class="h-20 w-full border-0 bg-transparent pl-16 pr-6 text-lg text-gray-900 placeholder:text-gray-400 focus:ring-0"
                    placeholder="Ketik kata kunci berita Ocu Kampar..."
                    @keydown.escape.prevent="if (search === '') { open = false } else { search = '' }"
                >
                <div wire:loading class="absolute right-6 top-1/2 -translate-y-1/2">
                    <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-emerald-600"></div>
                </div>
            </div>

            {{-- Hasil Pencarian --}}
            @if(strlen($search) >= 2)
                <ul class="max-h-96 overflow-y-auto p-4 space-y-2">
                    @forelse($posts as $post)
                        <li>
                            <a href="{{ route('web.show', $post->slug) }}" class="flex items-center gap-4 group p-4 rounded-xl hover:bg-emerald-50 transition">
                                <img src="{{ asset('storage/' . $post->images) }}" class="h-14 w-14 rounded-lg object-cover shadow-sm">
                                <div>
                                    <p class="font-bold text-gray-900 group-hover:text-emerald-700 leading-tight uppercase">{{ Str::limit($post->title, 70) }}</p>
                                    <p class="text-xs text-gray-500 mt-1 italic line-clamp-1">"{{ Str::limit(strip_tags($post->content), 90) }}"</p>
                                </div>
                                <svg class="ml-auto h-5 w-5 text-gray-400 group-hover:text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                            </a>
                        </li>
                    @empty
                        {{-- Tampilkan pesan "Tidak Ditemukan" hanya jika query sudah selesai --}}
                        <div wire:loading.remove class="text-center py-12 px-6">
                            <div class="text-4xl mb-4">🙁</div>
                            <p class="text-slate-500 font-medium">Maaf, berita <span class="text-emerald-600">"{{ $search }}"</span> tidak ditemukan.</p>
                        </div>
                    @endforelse
                </ul>

                {{-- Footer Info --}}
                <div class="flex items-center justify-between px-6 py-3 bg-gray-50 text-xs text-gray-400">
                    <span>Gunakan panah untuk navigasi, Enter untuk memilih.</span>
                    <button wire:click="$set('search', '')" class="hover:text-red-500">Hapus pencarian</button>
                </div>
            @endif
        </div>
    </div>
</div>
