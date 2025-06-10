<footer>
    <!-- Footer Start-->
    <div class="footer-area fix pt-50" style="background: #324d3e !important; color:#dae4d9 !important;">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-30">
                    <h5 class="fw-semibold mb-2" style="color: #dae4d9">Pemerintah Probolinggo</h5>
                    <p style="color: #dae4d9">
                        Balaikota Probolinggo<br>
                        Tisnonegaran, Kec. Kanigaran, Kota Probolinggo
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mb-lg-0 mb-30">
                    <h5 class="fw-semibold mb-2" style="color: #dae4d9">Kontak</h5>
                    <p style="color: #dae4d9">bag-umum@probolinggo.go.id</p>
                    <p style="color: #dae4d9">(0341) 366065</p>
                    <h5 class="fw-semibold mb-2 mt-4" style="color: #dae4d9">Media Sosial</h5>
                    <div class="" style="color: #dae4d9">
                        <a href="#" class="text-decoration-none">YouTube</a>
                        <a href="#" class="text-decoration-none">Facebook</a>
                        <a href="#" class="text-decoration-none">Instagram</a>
                        <a href="#" class="text-decoration-none">X</a>
                        <a href="#" class="text-decoration-none">TikTok</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="fw-semibold mb-2" style="color: #dae4d9">Pemerintahan</h5>
                    <ul class="list-unstyled" style="color: #dae4d9">
                        <li><a href="#" class="text-decoration-none d-block mb-1">Eksekutif</a></li>
                        <li><a href="#" class="text-decoration-none d-block mb-1">Legislatif</a></li>
                        <li><a href="#" class="text-decoration-none d-block mb-1">Forkopimda</a></li>
                        <li><a href="#" class="text-decoration-none d-block mb-1">Badan</a></li>
                        <li><a href="#" class="text-decoration-none d-block mb-1">Dinas</a></li>
                        <li><a href="#" class="text-decoration-none d-block mb-1">Bagian</a></li>
                        <li><a href="#" class="text-decoration-none d-block mb-1">Kecamatan dan Kelurahan</a></li>
                        <li><a href="#" class="text-decoration-none d-block mb-1">RSUD Probolinggo</a></li>
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
                            <p class="font-medium">
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
