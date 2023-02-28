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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

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

    <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #eee;">

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/profile-user/{{ auth()->user()->id }}"><i class="bi bi-chevron-left"></i> Back</a>
            {{-- <h1 class="logo me-auto fw-bold"><a href="index.html">L P M</a></h1> --}}

        </div>
    </header>


    <section style="background-color: #eee;">
        <div class="container my-0">
            <div class="row justify-content-center">
                <div class="col-sm-6 text-center">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <h5 class="text-info" style="letter-spacing: 5px;">Foto Profile</h5>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    @if (session()->has('informasi'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            {{ session('informasi') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-sm-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="/profile-user" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                                    <div class="col-sm-12 mb-3">
                                        <label for="foto">Input Foto</label>
                                        <input type="file" id="foto" class="form-control" name="files"
                                            accept="image/*">
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button class="btn btn-primary text-center" type="submit">Simpan</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
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
