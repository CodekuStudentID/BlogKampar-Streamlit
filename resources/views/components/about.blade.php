<div>
    <section class="py-16 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <x-dynamicpath />
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- Kolom Kiri: Teks Narasi -->
            <div class="space-y-6 order-2 md:order-1">
                <div
                    class="inline-block px-3 py-1 bg-green-100 text-green-700 text-xs font-bold uppercase tracking-widest rounded-md">
                    Jelajah Nusantara
                </div>

                <h2 class="text-3xl md:text-4xl font-black text-green-900 leading-tight">
                    Mengenal Lebih Dekat Dunia Kampar ! <br>
                    <span class="text-yellow-600">Negeri Seribu Parit</span>
                </h2>

                <p class="text-gray-600 leading-relaxed text-justify">
                    Kabupaten Kampar, yang sering dijuluki sebagai "Bumi Sarimadu", menyimpan kekayaan budaya dan
                    sejarah yang mendalam di jantung Provinsi Riau. Wilayah ini tidak hanya dikenal dengan keramahan
                    penduduknya, tetapi juga sebagai pusat peradaban yang dibuktikan dengan keberadaan Candi Muara
                    Takus, sebuah situs sejarah megah yang melambangkan kejayaan masa lalu.
                </p>

                <p class="text-gray-600 leading-relaxed text-justify">
                    Dari sisi kuliner, dunia Kampar menawarkan cita rasa yang tak terlupakan melalui hidangan khas
                    seperti Ikan Patin Asam Pedas dan Lopek Bugi. Melalui narasi ini, kita diajak untuk lebih menghargai
                    warisan leluhur yang tetap terjaga di tengah modernisasi, menjadikan Kampar sebagai destinasi yang
                    memadukan keasrian alam dengan kearifan lokal yang kental.
                </p>

                <div class="pt-4">
                    <a href="#"
                        class="font-bold text-yellow-900 border-b-2 border-black-600 hover:text-yellow-600 transition-colors pb-1">
                        Pelajari Sejarah Selengkapnya →
                    </a>
                </div>
            </div>

            {{-- col right --}}
            <div class="relative order-1 md:order-2">
                <div class="absolute -top-4 -right-4 w-full h-full bg-green-20 rounded-3xl -z-10"></div>

                <div class="overflow-hidden rounded-3xl shadow-2xl aspect-[4/3]">
                    <img src="{{ asset('img/1774678106345-removebg-preview.png') }}" alt="Keindahan Alam Kampar"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                </div>

                <!-- Label Kecil Terpaku -->
                <div
                    class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl hidden md:block border border-gray-100">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-yellow-600 rounded-full flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-400 uppercase font-bold tracking-wider">Lokasi</p>
                            <p class="text-sm font-bold text-gray-900">Riau, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
