<section class="pt-24 pb-10 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
    <div class="relative w-full h-[500px] md:h-[600px] overflow-hidden rounded-[2rem] bg-gray-900 group shadow-2xl">

        <img src="{{ asset('img/banner.png') }}"
             alt="Banner Utama"
             class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-110 opacity-80">

        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-transparent to-transparent hidden md:block"></div>

        <div class="absolute inset-0 flex flex-col justify-end p-8 md:p-16">
            <div class="max-w-4xl transform transition-transform duration-500 group-hover:-translate-y-2">

                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="inline-flex items-center px-3 py-1 bg-green-600 text-white text-[11px] font-black uppercase tracking-widest rounded-full shadow-lg shadow-green-900/20">
                        <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                        Terpopuler
                    </span>
                    <span class="inline-flex items-center px-3 py-1 bg-white/10 backdrop-blur-md border border-white/20 text-white text-[11px] font-bold uppercase tracking-widest rounded-full">
                        Update Terbaru
                    </span>
                </div>

                <h1 class="text-3xl md:text-6xl font-black text-white mb-6 leading-[1.1] tracking-tight">
                    Selamat datang di <br class="hidden md:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                        DuniaKampar.my.id
                    </span>
                </h1>

                <div class="flex flex-col md:flex-row md:items-center gap-6 mt-8">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full border-2 border-white/20 flex items-center justify-center bg-white/5 backdrop-blur-sm">
                            <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-[10px] uppercase font-bold tracking-widest">Diterbitkan pada</p>
                            <p class="text-white text-sm font-semibold">01 Januari 2026</p>
                        </div>
                    </div>

                    <div class="h-10 w-[1px] bg-white/10 hidden md:block"></div>

                    <a href="/berita/detail"
                       class="group/btn relative inline-flex items-center gap-3 px-8 py-4 bg-white text-black text-sm font-black uppercase tracking-widest rounded-2xl hover:bg-green-600 hover:text-white transition-all duration-300 shadow-xl shadow-white/5 active:scale-95"
                       wire:navigate>
                        Baca Selengkapnya
                        <svg class="w-4 h-4 transition-transform group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 via-blue-500 to-purple-500 opacity-50"></div>
    </div>
</section>
