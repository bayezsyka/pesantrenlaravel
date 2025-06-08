<main class="w-full">
        {{-- Hero Section --}}
        <section class="min-h-[calc(100vh-4rem)] flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-blue-50 to-indigo-100 pt-16 pb-16">
            <div class="container mx-auto text-center max-w-6xl">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-gray-900 leading-tight">
                    Selamat Datang di
                    <span class="text-blue-600 block sm:inline">Pesantren Al-Anwar</span>
                </h1>
                <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed mb-8 sm:mb-12">
                    Menyediakan pendidikan agama dan umum yang berkualitas untuk membentuk generasi yang berakhlak mulia dan berwawasan luas.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">
                    <a href="#pendaftaran" class="btn-primary text-base sm:text-lg px-6 sm:px-8 py-3 sm:py-4">
                        Daftar Sekarang
                    </a>
                    <a href="{{ url('artikel') }}" class="btn-outline text-base sm:text-lg px-6 sm:px-8 py-3 sm:py-4">
                        Artikel Kami
                    </a>
                </div>
            </div>
        </section>

        {{-- Registration CTA Section --}}
        <section id="pendaftaran" class="min-h-[calc(100vh-4rem)] flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-blue-600 to-indigo-800 pt-16 pb-16">
            <div class="container mx-auto max-w-5xl text-center text-white">
                <div class="mb-8">
                    <div class="w-16 h-16 mx-auto mb-6 bg-white bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-4xl font-bold mb-8 leading-tight">
                    Pendaftaran Santri Baru
                </h2>
                <p class="text-lg md:text-2xl mb-12 max-w-4xl mx-auto leading-relaxed opacity-90">
                    Tahun ajaran baru 2023/2024 telah dibuka. Daftarkan segera putra/putri Anda untuk mendapatkan pendidikan terbaik dengan kurikulum yang menggabungkan ilmu agama dan ilmu umum.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6">
                    <a href="{{ url('pendaftaran') }}" class="btn-primary text-base sm:text-lg px-6 sm:px-8 py-3 sm:py-4">
                        Daftar Sekarang
                    </a>
                    <a href="{{ url('kontak') }}" class="btn-outline text-base sm:text-lg px-6 sm:px-8 py-3 sm:py-4">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </section>

        {{-- Latest Articles Section --}}
        <section class="min-h-[calc(100vh-4rem)] flex flex-col justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gray-50 pt-16 pb-16">
            <div class="container mx-auto max-w-7xl">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">
                        Artikel Terbaru
                    </h2>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">
                        Temukan wawasan dan pengetahuan terbaru dari para ustadz dan santri Pesantren Al-Anwar Pakijangan
                    </p>
                    <a href="{{ url('artikel') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-lg transition duration-300 group">
                        Lihat Semua Artikel
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <div class="flex-1 flex items-center justify-center">
                    @if(empty($articles))
                        <div class="bg-white rounded-2xl shadow-lg p-12 text-center max-w-md mx-auto">
                            <div class="w-16 h-16 mx-auto mb-6 bg-gray-100 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <p class="text-gray-500 text-lg">Belum ada artikel yang tersedia.</p>
                        </div>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                            @foreach ($articles as $a)
                                <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col h-full">
                                    <a href="{{ url('artikel/'.$a->id) }}" class="block overflow-hidden">
                                        <img src="{{ $a->gambar }}" alt="{{ $a->judul }}" class="w-full h-48 object-cover hover:scale-110 transition-transform duration-500">
                                    </a>
                                    <div class="p-6 flex-grow flex flex-col">
                                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 text-sm text-gray-500">
                                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full font-medium mb-2 sm:mb-0">
                                                {{ date("d M Y", strtotime($a->tanggal)) }}
                                            </span>
                                            <span class="font-medium">Oleh: {{ $a->penulis }}</span>
                                        </div>
                                        <h3 class="text-xl font-bold mb-3 text-gray-900 leading-tight">
                                            <a href="{{ url('artikel/'.$a->id) }}" class="hover:text-blue-600 transition duration-300">
                                                {{ $a->judul }}
                                            </a>
                                        </h3>
                                        <p class="text-gray-600 text-base mb-6 flex-grow leading-relaxed">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($a->isi), 120, '…') }}
                                        </p>
                                        <a href="{{ url('artikel/'.$a->id) }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-base transition duration-300 mt-auto group">
                                            Baca selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>

        {{-- Contact CTA Section --}}
        <section class="min-h-[calc(100vh-4rem)] flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 to-gray-800 text-white pt-16 pb-16">
            <div class="container mx-auto max-w-5xl text-center">
                <div class="mb-8">
                    <div class="w-16 h-16 mx-auto mb-6 bg-white bg-opacity-10 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-4xl font-bold mb-8 leading-tight">
                    Ingin Informasi Lebih Lanjut?
                </h2>
                <p class="text-lg md:text-2xl mb-12 max-w-4xl mx-auto leading-relaxed opacity-90">
                    Hubungi kami untuk mendapatkan informasi lebih detail tentang program pendidikan, fasilitas, dan kehidupan santri di Pesantren Al-Anwar Pakijangan.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6 mb-12">
                    <a href="{{ url('kontak') }}" class="btn-primary text-base sm:text-lg px-6 sm:px-8 py-3 sm:py-4">
                        Hubungi Kami
                    </a>
                    <a href="{{ url('tentang') }}" class="btn-outline text-base sm:text-lg px-6 sm:px-8 py-3 sm:py-4">
                        Tentang Pesantren
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-3 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-1 text-base">Telepon</h3>
                        <p class="text-gray-300 text-base">(021) 123-4567</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-3 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-1 text-base">Email</h3>
                        <p class="text-gray-300 text-base">info@alanwar.ac.id</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-3 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold mb-1 text-base">Alamat</h3>
                        <p class="text-gray-300 text-base">Pakijangan, Brebes</p>
                    </div>
                </div>
            </div>
        </section>
    </main>