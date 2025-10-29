<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal Kabupaten Probolinggo</title>
    <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="icon" type="image/x-icon" href="{{ RvMedia::getImageUrl(theme_option('favicon')) }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.5/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/8.4.5/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body class="bg-[#324d3e] text-gray-800 s">

    <section class="relative w-full h-screen overflow-hidden">

        <nav id="main-navbar"
            class="opacity-0 pointer-events-none fixed top-3 left-0 right-0 transition-all duration-500 z-50 bg-[#324d3e]/80 backdrop-blur-sm shadow-lg rounded-xl mx-auto w-11/12 md:w-5/6">
            <div class="navbar text-white max-w-7xl mx-auto px-4">
                <div class="navbar-start">
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </div>
                        <ul tabindex="0"
                            class="menu menu-sm dropdown-content bg-[#324d3e]/90 rounded-box z-50 mt-3 w-52 p-2 shadow">
                            <li><a href="#profil">Profil</a></li>
                            <li><a href="#layanan">Layanan Publik</a></li>
                            <li><a href="#program">Program Strategis</a></li>
                            <li><a href="#berita">Berita Terkini</a></li>
                            <li><a href="#wisata">Destinasi Wisata</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-ghost text-xl">
                        <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="Logo Kabupaten Probolinggo"
                            class="h-8" alt="">
                    </a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="#profil" class="hover:bg-white/10">Profil</a></li>
                        <li><a href="#layanan" class="hover:bg-white/10">Layanan Publik</a></li>
                        <li><a href="#program" class="hover:bg-white/10">Program Strategis</a></li>
                        <li><a href="#berita" class="hover:bg-white/10">Berita Terkini</a></li>
                        <li><a href="#wisata" class="hover:bg-white/10">Destinasi Wisata</a></li>
                    </ul>
                </div>
                <div class="navbar-end"></div>
            </div>
        </nav>

        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('./Jejak_Cerita_Probolinggo.mp4') }}" type="video/mp4" />
        </video>

        <div class="absolute inset-0 bg-black/40 z-10"></div>

        <div class="relative z-10 flex flex-col justify-end text-white h-full py-20 px-8">
            <div class="md:w-1/2" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Selamat Datang di <br>
                    <span class="text-[#e9c46a]">Kabupaten Probolinggo</span></h1>
                <p class="text-lg mb-6" data-aos="fade-up" data-aos-delay="200">Kota yang kaya akan budaya, sejarah, dan
                    potensi ekonomi di Jawa Timur.</p>
                <div class="flex space-x-4" data-aos="fade-up" data-aos-delay="400">
                    <a href="#profil"
                        class="bg-[#e9c46a] text-[#324d3e] px-6 py-2 rounded-md font-medium hover:bg-opacity-90 transition transform hover:scale-105">Jelajahi</a>
                    <a href="#layanan"
                        class="border-2 border-white text-white px-6 py-2 rounded-md font-medium hover:bg-white hover:text-primary transition transform hover:scale-105">Layanan</a>
                </div>
            </div>
        </div>
    </section>


    {!! Theme::content() !!}


    <!-- Footer -->
    <footer class="bg-[#324d3e] text-[#dae4d9] pt-12 pb-6">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="Lambang Probolinggo"
                            class="h-10 mr-2">
                        PROBOLINGGO
                    </h3>
                    <p class="text-gray-400 text-sm">Portal resmi Pemerintah Kabupaten Probolinggo sebagai media
                        informasi dan pelayanan publik yang transparan dan akuntabel.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4 border-b border-gray-700 pb-2">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Profil Kabupaten</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Struktur Organisasi</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Peraturan Daerah</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Anggaran Daerah</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">PPID</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">LPSE</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4 border-b border-gray-700 pb-2">Layanan Publik</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Pelayanan Kesehatan</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Pendidikan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Perizinan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Kependudukan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Bantuan Sosial</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white text-sm">Pengaduan</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4 border-b border-gray-700 pb-2">Kontak</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-yellow-500 mt-1 mr-3"></i>
                            <span class="text-gray-400">Jl. Panglima Sudirman No. 235, Probolinggo 67222, Jawa
                                Timur</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt text-yellow-500 mr-3"></i>
                            <span class="text-gray-400">(0335) 422433</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-yellow-500 mr-3"></i>
                            <span class="text-gray-400">info@probolinggokab.go.id</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-clock text-yellow-500 mr-3"></i>
                            <span class="text-gray-400">Senin - Jumat, 08.00 - 16.00 WIB</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm mb-4 md:mb-0">© 2023 Pemerintah Kabupaten Probolinggo. Hak Cipta
                        Dilindungi.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-500 hover:text-white text-sm">Kebijakan Privasi</a>
                        <a href="#" class="text-gray-500 hover:text-white text-sm">Syarat & Ketentuan</a>
                        <a href="#" class="text-gray-500 hover:text-white text-sm">Peta Situs</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Button -->
    <div class="fixed bottom-6 right-6 flex flex-col space-y-3 z-50">
        <a  data-aos="fade-up" href="#"
            class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center text-white shadow-lg hover:bg-red-600 transition">
            <i class="fas fa-phone-alt"></i>
        </a>
        <a data-aos="fade-up" data-aos-delay="100" href="#"
            class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white shadow-lg hover:bg-green-600 transition">
           <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    <script>
        const nav = document.getElementById("main-navbar");

        let lastScrollY = window.scrollY;

        window.addEventListener("scroll", () => {
            const currentScrollY = window.scrollY;

            if (currentScrollY > 50) {
                nav.classList.remove("opacity-0", "pointer-events-none");
                nav.classList.add("opacity-100", "pointer-events-auto");
            } else {
                nav.classList.remove("opacity-100", "pointer-events-auto");
                nav.classList.add("opacity-0", "pointer-events-none");
            }

            lastScrollY = currentScrollY;
        });
    </script>


    <!-- SwiperJS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi AOS (Animate on Scroll)
            AOS.init({
                duration: 800, // Durasi animasi dalam milidetik
                once: true, // Animasi hanya terjadi sekali
                offset: 20, // Memicu animasi sedikit lebih awal
            });

            // Logika untuk Navbar
            const navbar = document.getElementById('main-navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) { // Tampilkan navbar setelah scroll 50px
                    navbar.classList.remove('opacity-0', 'pointer-events-none');
                    navbar.classList.add('opacity-100', 'pointer-events-auto');
                } else {
                    navbar.classList.add('opacity-0', 'pointer-events-none');
                    navbar.classList.remove('opacity-100', 'pointer-events-auto');
                }
            });
        });
    </script>

    <script>
        const navbar = document.getElementById("main-navbar");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                navbar.classList.remove("bg-[#95b36f]/80");
                navbar.classList.add("bg-[#95b36f]");
            } else {
                navbar.classList.add("bg-[#95b36f]/80");
                navbar.classList.remove("bg-[#95b36f]");
            }
        });
    </script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.programSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            loop: true,
        });
    </script>
    <script>
        // Initialize Swiper for Berita Utama
        var swiperNews = new Swiper('.berita-swiper', {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
        // Initialize Swiper for Galeri
        var swiperGaleri = new Swiper('.galeri-swiper', {
            navigation: {
                nextEl: '.galeri-next',
                prevEl: '.galeri-prev',
            },
        });
    </script>




</body>

</html>
