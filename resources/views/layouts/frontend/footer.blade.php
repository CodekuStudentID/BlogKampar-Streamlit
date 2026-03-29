  {{-- resources/views/footer.blade.php --}}
  <footer class="bg-gray-900 text-white pt-10 pb-6">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">

          {{-- Logo & Deskripsi --}}
          <div>
             <a href="{{route('web.index')}}" class="flex items-center space-x-2 text-green-600 font-bold text-2xl">
                    <img src="{{ asset('img/logo-kampar.png') }}" width="20" height="40" alt=""
                        srcset="">
                    <span>Kampar Channel</span>
                </a>
              <p class="text-gray-400 text-sm">
                  Portal berita terpercaya, menyajikan informasi terbaru seputar nasional, internasional, ekonomi,
                  teknologi, olahraga, dan hiburan.
              </p>
          </div>

          {{-- Link Cepat --}}
          <div>
              <h4 class="text-white font-semibold mb-4">Link Cepat</h4>
              <ul class="space-y-2 text-gray-400 text-sm">
                  <li><a href="/" class="hover:text-red-600">Home</a></li>
                  <li><a href="/nasional" class="hover:text-red-600">Nasional</a></li>
                  <li><a href="/internasional" class="hover:text-red-600">Internasional</a></li>
                  <li><a href="/ekonomi" class="hover:text-red-600">Ekonomi</a></li>
                  <li><a href="/teknologi" class="hover:text-red-600">Teknologi</a></li>
                  <li><a href="/olahraga" class="hover:text-red-600">Olahraga</a></li>
                  <li><a href="/hiburan" class="hover:text-red-600">Hiburan</a></li>
                  <li><a href="/lifestyle" class="hover:text-red-600">Lifestyle</a></li>
              </ul>
          </div>

          {{-- Kontak & Sosial Media --}}
          <div>
              <h4 class="text-white font-semibold mb-4">Kontak Kami</h4>
              <p class="text-gray-400 text-sm mb-2">Email: info@newsportal.com</p>
              <p class="text-gray-400 text-sm mb-4">Telepon: +62 812-3456-7890</p>
              <div class="flex space-x-4">
                  <a href="#" class="text-gray-400 hover:text-red-600">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                          <path
                              d="M24 4.56c-.88.39-1.83.65-2.83.77a4.94 4.94 0 0 0 2.17-2.72 9.92 9.92 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.39 4.49 13.94 13.94 0 0 1-10.13-5.14 4.91 4.91 0 0 0 1.52 6.56A4.9 4.9 0 0 1 1.64 9.8v.06a4.92 4.92 0 0 0 3.95 4.83 4.93 4.93 0 0 1-2.22.08 4.93 4.93 0 0 0 4.6 3.42 9.86 9.86 0 0 1-6.1 2.1c-.4 0-.79-.02-1.18-.07a13.91 13.91 0 0 0 7.53 2.2c9.05 0 14-7.5 14-14 0-.21 0-.42-.01-.63A10.06 10.06 0 0 0 24 4.56z" />
                      </svg>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-red-600">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                          <path
                              d="M12 2.04c-5.52 0-10 4.48-10 10 0 4.42 3.58 8 8 8h4v-6H12v-2h2V8h-2V6.5c0-.83.67-1.5 1.5-1.5H16V4h-2.5C11.01 4 10 5.01 10 6.5V8H8v2h2v6h-4c-4.42 0-8-3.58-8-8 0-5.52 4.48-10 10-10s10 4.48 10 10c0 5.52-4.48 10-10 10z" />
                      </svg>
                  </a>
                  <a href="#" class="text-gray-400 hover:text-red-600">
                      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                          <path
                              d="M12 2.04c-5.52 0-10 4.48-10 10 0 4.42 3.58 8 8 8h4v-6h-2v-2h2V8h-2V6.5c0-.83.67-1.5 1.5-1.5H16V4h-2.5C11.01 4 10 5.01 10 6.5V8H8v2h2v6h-4c-4.42 0-8-3.58-8-8 0-5.52 4.48-10 10-10s10 4.48 10 10c0 5.52-4.48 10-10 10z" />
                      </svg>
                  </a>
              </div>
          </div>
      </div>

      <div class="border-t border-gray-700 mt-8 pt-4 text-center text-gray-500 text-sm">
          &copy; 2026 NewsPortal. All rights reserved.
      </div>
  </footer>

  @livewireScripts
  </body>

  </html>
