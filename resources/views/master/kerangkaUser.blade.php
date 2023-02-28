<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>LPM | Dinas Lingkungan Hidup</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Favicons -->
    <link href=" /assetsUser/img/favicon.png" rel="icon" />
    <link href=" /assetsUser/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href=" /assetsUser/vendor/aos/aos.css" rel="stylesheet" />
    <link href=" /assetsUser/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href=" /assetsUser/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href=" /assetsUser/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href=" /assetsUser/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href=" /assetsUser/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href=" /assetsUser/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href=" /assetsUser/css/style.css" rel="stylesheet" />

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto fw-bold"><a href="index.html">L P M</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src=" /assetsUser/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    {{-- <li><a class="nav-link scrollto " href="#riwayat">Riwayat</a></li> --}}
                    {{-- <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li> --}}
                    {{-- <li><a class="nav-link scrollto" href="#services">Proses</a></li> --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle me-5" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span><b>{{ auth()->user()->nama }}</b> </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#riwayat"><span><i
                                            class="bi bi-clock-history"></i>&nbsp;&nbsp;Riwayat</span> </a></li>
                            <li><a class="dropdown-item" href="/profile-user/{{ auth()->user()->id }}"><span><i
                                            class="bi bi-person"></i>&nbsp;&nbsp;Profile</span> </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#logout">
                                    <span><i class="bi bi-box-arrow-right"></i>&nbsp;&nbsp;Logout</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    {{-- Modal Logout --}}
    <div class="modal fade" id="logout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin keluar ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="/keluar">
                        <button type="button" class="btn btn-primary">Keluar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- /Modal --}}

    @yield('container')

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    {{-- Data Modal --}}
    <script>
        $(document).ready(function() {
            $(document).on('click', '#set_dtl', function() {
                var jenispengaduan = $(this).data('jenis_pengaduan');
                var isipengaduan = $(this).data('isi_laporan');
                $('#jenis_pengaduan').text(jenispengaduan);
                $('#isi_laporan').text(isipengaduan);


            })
        })
    </script>

    <!-- Vendor JS Files -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/assetsUser/vendor/aos/aos.js"></script>
    <script src=" /assetsUser/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src=" /assetsUser/vendor/glightbox/js/glightbox.min.js"></script>
    <script src=" /assetsUser/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src=" /assetsUser/vendor/swiper/swiper-bundle.min.js"></script>
    <script src=" /assetsUser/vendor/waypoints/noframework.waypoints.js"></script>
    <script src=" /assetsUser/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src=" /assetsUser/js/main.js"></script>
</body>

</html>
