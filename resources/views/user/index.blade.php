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
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto" href="#services">Proses</a></li>
                    <li><a class="getstarted scrollto" href="/login">Masuk/Daftar</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Laporan Pengaduan Masyarakat Dinas Lingkungan Hidup</h1>
                    <h2>Laporkan segera jika terdapat kerusakan lingkungan hidup</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#lapor" class="btn btn-warning rounded-pill scrollto px-4 text-white shadow">Lapor
                            sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src=" /assetsUser/img/hero-img.png" class="img-fluid animated" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-12 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        {{-- <img src=" /assetsUser/img/clients/client-1.png" class="img-fluid" alt="" /> --}}
                        <h3>JUMLAH LAPORAN</h3>
                    </div>
                    <div class="col-lg-12 col-md-4 col-6 d-flex align-items-center justify-content-center fw-bold">
                        <h1>{{ $countPengaduan }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>TENTANG KAMI</h2>
                </div>

                <div class="row content justify-content-center">

                    <div class="col-lg-6 pt-4 pt-lg-0 text-center">
                        <p>
                            Laporan pengaduan masyarakat dinas lingkungan hidup, instansi yang bergerak di bidang
                            lingkungan hidup yang berada di banjar, khusus menerima laporan tentang
                            kerusakan lingkungan hidup di KOTA BANJAR
                        </p>
                        <a href="#" class="btn-learn-more">Lapor Sekarang!</a>
                    </div>
                    {{-- <div class="col-lg-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat</li>
                            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                                voluptate velit</li>
                            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat</li>
                        </ul>
                    </div> --}}

                </div>
            </div>
        </section>
        <!-- End About Us Section -->



        <!-- ======= Proses laporan ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>PROSES LAPORAN</h2>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" style="width: 400px">
                            <div class="icon"><i class="bi bi-send-check fa-7x"></i></i></div>
                            <h4><a href="">Kirim Laporan</a></h4>
                            <p>Laporkan kejadian mengenai kerusakan lingkungan hidup dengan jelas</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box" style="width: 400px">
                            <div class="icon"><i class="bi bi-arrow-repeat"></i></i></div>
                            <h4><a href="">Laporan Diproses</a></h4>
                            <p>Dalam 5 hari, instansi akan menindaklanjuti dan membalas laporan Anda</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box" style="width: 400px">
                            <div class="icon"><i class="bi bi-check-all"></i></i></div>
                            <h4><a href="">Laporan Selesai</a></h4>
                            <p>Laporan Anda akan terus ditindaklanjuti hingga terselesaikan</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box" style="width: 400px">
                            <div class="icon"><i class="bi bi-chat-left-text"></i></i></div>
                            <h4><a href="">Laporan Ditanggapi</a></h4>
                            <p>Anda akan menerima notifikasi email jika laporan selesai ditanggapi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste
                        officiis commodi quidem hic quas.
                    </p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non
                                consectetur a erat nam at lectus urna duis? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                    non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                    purus non.</p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat
                                scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                    velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                    donec pretium. Est pellentesque elit ullamcorper
                                    dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit
                                amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                    pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                    Rutrum tellus pellentesque eu tincidunt. Lectus urna
                                    duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio
                                    morbi quis
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam
                                pellentesque nec nam aliquam sem et tortor consequat? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                    est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                    suscipit adipiscing bibendum est. Purus gravida quis
                                    blandit turpis cursus in.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae
                                purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                    integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                    eget lorem dolor sed. Ut venenatis tellus in metus
                                    vulputate eu scelerisque.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Lapor Section ======= -->
        <section id="lapor" class="contact section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>KIRIM LAPORANMU!!!</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-7">
                        <div class="card card-primary card-outline">
                            <form>

                                <div class="card-body shadow">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="datetime-local" class="form-control "
                                                    placeholder="Enter ...">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="select">Jenis pengaduan</label>
                                            <select id="select" class="form-select"
                                                aria-label="Default select example">
                                                <option selected disabled>-- Pilih jenis pengaduan --</option>

                                                <option>
                                                </option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <label for="exampleFormControlTextarea1" class="form-label">Isi
                                                Pengaduan</label>
                                            <textarea class="form-control " id="exampleFormControlTextarea1" rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <label for="formFile" class="form-label">Lampirkan gambar</label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                    <div class="row mt-4 justify-content-center">
                                        <div class="col-sm-5">
                                            <button type="button"
                                                class="btn btn-outline-primary btn-block rounded-pill "
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-title mt-4">
                    <p class="text-danger">* Pastikan laporan anda valid, jangan melaporkan pengaduan palsu/hoax!</p>
                </div>
            </div>
        </section>
        <!-- End Lapor Section -->
    </main>
    <!-- End #main -->

    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel"><i
                            class="bi bi-exclamation-triangle-fill"></i> Perhatian</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Harap masuk akun/daftar untuk mengirim pengaduan!
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="/login">
                        <button type="button" class="btn btn-outline-primary">Masuk</button>
                    </a>
                    <a href="/daftar">
                        <button type="button" class="btn btn-outline-warning">Daftar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal --}}

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>UKK 2023</span></strong>
            </div>
            <div class="credits">

                Designed by <a href="https://bootstrapmade.com/">Teguh Afriansyah</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
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
