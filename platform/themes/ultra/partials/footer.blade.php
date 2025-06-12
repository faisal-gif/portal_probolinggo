<footer>
    <!-- Footer Start-->
    <div class="footer-area fix pt-50" style="background: #324d3e !important; color:#dae4d9 !important;">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-30">
                    <h3 class="h5 fw-bold mb-3 d-flex align-items-center">
                        <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="Lambang Probolinggo" class="mx-2" style="height: 40px;">
                        PROBOLINGGO
                    </h3>
                    <p class="text-light small">Portal resmi Pemerintah Kabupaten Probolinggo sebagai media informasi
                        dan pelayanan publik yang transparan dan akuntabel.</p>
                    <div class="d-flex mt-3">
                        <a href="#" class="text-light text-decoration-none mx-2">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-light text-decoration-none mx-2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-light text-decoration-none mx-2">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-light text-decoration-none mx-2">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-lg-0 mb-30">
                    <h3 class="h6 fw-bold mb-3 pb-2 border-bottom border-secondary">Tautan Cepat</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Profil
                                Kabupaten</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Struktur
                                Organisasi</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Peraturan
                                Daerah</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Anggaran
                                Daerah</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">PPID</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">LPSE</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 mb-lg-0 mb-30">
                    <h3 class="h6 fw-bold mb-3 pb-2 border-bottom border-secondary">Layanan Publik</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Pelayanan
                                Kesehatan</a></li>
                        <li class="mb-2"><a href="#"
                                class="text-light text-decoration-none small">Pendidikan</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Perizinan</a>
                        </li>
                        <li class="mb-2"><a href="#"
                                class="text-light text-decoration-none small">Kependudukan</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Bantuan
                                Sosial</a></li>
                        <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Pengaduan</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3 class="h6 fw-bold mb-3 pb-2 border-bottom border-secondary">Kontak</h3>
                    <ul class="list-unstyled small">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-map-marker-alt text-warning mt-1 mx-2"></i>
                            <span class="text-light">Jl. Panglima Sudirman No. 235, Probolinggo 67222, Jawa Timur</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-phone-alt text-warning mx-2"></i>
                            <span class="text-light">(0335) 422433</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-envelope text-warning mx-2"></i>
                            <span class="text-light">info@probolinggokab.go.id</span>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <i class="fas fa-clock text-warning mx-2"></i>
                            <span class="text-light">Senin - Jumat, 08.00 - 16.00 WIB</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- footer-bottom aera -->
    <div class="footer-bottom-area " style="background: #324d3e !important; color:#dae4d9 !important;">
        <div class="container">
            <div class="footer-border pt-30 pb-30">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="footer-copy-right">
                            <p class="font-medium text-light">
                                {!! clean(theme_option('copyright')) !!} {!! clean(theme_option('designed_by')) !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-menu float-lg-right mt-lg-0 mt-3">
                            {!! dynamic_sidebar('footer_copyright_menu') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>

<!-- End Footer -->
<div class="dark-mark"></div>
<!-- Vendor JS-->
{!! Theme::footer() !!}

<script>
    "use strict";

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    setCookie('account_logged', {{ auth('member')->check() ? 1 : 0 }});
</script>
</body>

</html>
