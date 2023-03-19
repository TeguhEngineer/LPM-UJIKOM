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

<body style="background-color: #eee;">

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/user" class="text-decoration-none"><i class="bi bi-chevron-left"></i> Back</a>
          

        </div>
    </header>


    <section style="background-color: #eee;">
        <div class="container my-0">
            <div class="row justify-content-center">
                <div class="col-sm-12 text-center">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <h5 class="text-primary fw-bold" style="letter-spacing: 5px;">Team Support</h5>
                    </nav>
                </div>
            </div>
           

            <div class="row justify-content-center">

                <div class="col-sm-12">
                    @foreach ($getAdmin as $item)
                        
                    <a href="/chat-support/{{ ($item->id) }}/{{ auth()->user()->id }}" style="text-decoration: none">
                        <div class="card mb-1">
                            <div class="card-body rounded border border-dark bg-light text-dark">
                                <div class="mt-3">
                                    <img src="/dist/img/petugas.png" class="me-1" alt="" srcset="" width="40" height="40">
                                    <span>
                                        {{ $item->nama }} 
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                   

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
