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
    <link href=" /dist/img/favicon.png" rel="icon" />
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
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/user" class="text-decoration-none"><i class="bi bi-chevron-left"></i> Back</a>
        </div>
    </header>
    <!-- End Header -->
    <section style="background-color: #eee;">
        <div class="container my-0">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <h5 class="text-primary fw-bold" style="letter-spacing: 5px;">Profile</h5>
                        
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            @if (auth()->user()->jk == "laki-laki")
                                
                            <img src="/dist/img/laki-laki.png" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                            @elseif (auth()->user()->jk == "perempuan")
                            <img src="/dist/img/perempuan.png" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                            @endif
                            <h5 class="mb-3 fw-bold">{{ $profileuser->nama }}</h5>
                            <p class="text-muted mb-1 ">{{ $profileuser->role }}</p>

                            <div class="d-flex justify-content-center mb-2 mt-3">
                                <a href="/profile-user/{{ $profileuser->id }}/edit">
                                    <button type="button" class="btn btn-outline-primary btn-sm">Ubah Data</button>
                                </a>
                                <a href="/ubah-password/{{ $profileuser->id }}/edit">
                                    <button type="button" class="btn btn-outline-warning ms-1 btn-sm">Ubah
                                        Password</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bold">Jenis Kelamin</p>
                                </div>
                                <div class="col-sm-1 text-end">
                                    :
                                </div>
                                <div class="col-sm-8">
                                    
                                    <p class="text-muted mb-0 text-primary">{{ $profileuser->jk }}</p>
                                
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bold">NIK</p>
                                </div>
                                <div class="col-sm-1 text-end">
                                    :
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ $profileuser->nik }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bold">Username</p>
                                </div>
                                <div class="col-sm-1 text-end">
                                    :
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ $profileuser->username }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bold">Email</p>
                                </div>
                                <div class="col-sm-1 text-end">
                                    :
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0"><a href="#" class="text-decoration-none">{{ $profileuser->email }}</a> </p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bold">Phone</p>
                                </div>
                                <div class="col-sm-1 text-end">
                                    :
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ $profileuser->telepon }}</p>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0 fw-bold">Address</p>
                                </div>
                                <div class="col-sm-1 text-end">
                                    :
                                </div>
                                <div class="col-sm-8">
                                    <p class="text-muted mb-0">{{ $profileuser->alamat }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

   
    <script src="/js/bootstrap.min.js"></script>
    <script src="/assetsUser/vendor/aos/aos.js"></script>
    <script src=" /assetsUser/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src=" /assetsUser/vendor/glightbox/js/glightbox.min.js"></script>
    <script src=" /assetsUser/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src=" /assetsUser/vendor/swiper/swiper-bundle.min.js"></script>
    <script src=" /assetsUser/vendor/waypoints/noframework.waypoints.js"></script>
    <script src=" /assetsUser/vendor/php-email-form/validate.js"></script>

   
    <script src=" /assetsUser/js/main.js"></script>
</body>

</html>
