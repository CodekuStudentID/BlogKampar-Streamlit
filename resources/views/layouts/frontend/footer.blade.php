{{-- resources/views/footer.blade.php --}}
<footer class="bg-gray-900 text-white pt-10 pb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">

        {{-- Logo & Deskripsi --}}
        <div>
            <div class="flex items-center space-x-3 mb-4">
                {{-- Logo 1: Logo Kampar --}}
                <img src="{{ asset('img/logo-kampar.png') }}" class="h-10 w-auto" alt="Logo Kampar">

                {{-- Logo 2: Logo Bulletin Kampar (Ganti path-nya sesuai file kamu) --}}
                <img src="{{ asset('img/1774678106345-removebg-preview.png') }}" class="h-10 w-auto" alt="Logo Bulletin Kampar">

                <div class="border-l border-gray-700 pl-3">
                    <span class="block text-green-500 font-bold text-xl leading-none">Bulletin</span>
                    <span class="block text-white font-medium text-sm tracking-widest uppercase">Kampar</span>
                </div>
            </div>
            <p class="text-gray-400 text-sm leading-relaxed">
                Portal berita terpercaya dari Jantung Negeri Kampar. Menyajikan informasi terkini seputar Air Tiris, Kabupaten Kampar, hingga berita Nasional dengan akurasi tinggi.
            </p>
        </div>

        {{-- Link Cepat --}}
        <div>
            <h4 class="text-white font-semibold mb-4 border-b border-gray-800 pb-2">Link Cepat</h4>
            <ul class="grid grid-cols-2 gap-2 text-gray-400 text-sm">
                <li><a href="/" class="hover:text-green-500 transition">Home</a></li>
                <li><a href="/nasional" class="hover:text-green-500 transition">Nasional</a></li>
                <li><a href="/ekonomi" class="hover:text-green-500 transition">Ekonomi</a></li>
                <li><a href="/teknologi" class="hover:text-green-500 transition">Teknologi</a></li>
                <li><a href="/olahraga" class="hover:text-green-500 transition">Olahraga</a></li>
                <li><a href="/hiburan" class="hover:text-green-500 transition">Hiburan</a></li>
                <li><a href="/lifestyle" class="hover:text-green-500 transition">Lifestyle</a></li>
                <li><a href="/internasional" class="hover:text-green-500 transition">Internasional</a></li>
            </ul>
        </div>

        {{-- Kontak & Sosial Media --}}
        <div>
            <h4 class="text-white font-semibold mb-4 border-b border-gray-800 pb-2">Kontak Redaksi</h4>
            <div class="text-gray-400 text-sm space-y-2 mb-4">
                <p class="flex items-center"><i class="fas fa-envelope mr-2 text-green-500"></i> bulletinkampar@gmail.com</p>
                <p class="flex items-center"><i class="fab fa-whatsapp mr-2 text-green-500"></i> 0821-7711-216</p>
                <p class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-green-500"></i> Air Tiris, Kampar, Riau</p>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 transition">
                    <i class="fab fa-facebook-f text-xs"></i>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pink-600 transition">
                    <i class="fab fa-instagram text-xs"></i>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-gray-800 flex items-center justify-center hover:bg-red-600 transition">
                    <i class="fab fa-youtube text-xs"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- Bottom Footer --}}
    <div class="border-t border-gray-800 mt-10 pt-6">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center text-gray-500 text-sm">
            <p>&copy; 2026 <span class="text-white font-semibold">Bulletin Kampar</span>. All rights reserved.</p>

            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="{{ route('web.privacy') }}" class="hover:text-green-500 transition" wire:navigate>Privacy Policy</a>
                <a href="{{ route('web.terms') }}" class="hover:text-green-500 transition" wire:navigate>Terms Of Services</a>
            </div>
        </div>
    </div>
</footer>

@livewireScripts
</body>
</html>
