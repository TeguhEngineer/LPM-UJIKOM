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
    <link href="/assetsUser/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/chat.css">
</head>

<body style="background-color: #eee;">

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/chat-support" class="text-decoration-none"><i class="bi bi-chevron-left"></i> Back</a>


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
            <main class="content">
                <div class="container p-0">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-12 ">
                                <div class="py-2 px-4 border-bottom d-none d-lg-block">
                                    <div class="d-flex align-items-center py-1">
                                        <div class="position-relative">
                                            <img src="/dist/img/admin.png" class="rounded-circle mr-1"
                                                alt="Sharon Lessman" width="40" height="40">
                                        </div>
                                        <div class="flex-grow-1 pl-3">
                                            <strong>{{ $getAdmin->nama }}</strong>
                                                <div class="text-muted small">Admin</div>
                                            
                                        </div>

                                    </div>
                                </div>

                                <div class="position-relative">
                                    <div class="chat-messages p-4">

                                        @foreach ($data as $item)
                                            @if ($item->kode_chat)
                                                @if ($item->role == 'masyarakat')
                                                    <div class="chat-message-right pb-4">
                                                        <div>
                                                            <img src="/dist/img/petugas.png" class="rounded-circle mr-1"
                                                                alt="Chris Wood" width="40" height="40">

                                                        </div>
                                                        <div
                                                            class="flex-shrink-1 bg-light rounded py-2 me-2 px-3 mr-3 border border-dark">
                                                            <div class="font-weight-bold mb-1"><b>Anda</b></div>
                                                            <p>{{ $item->pesan }}</p>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($item->role == 'admin')
                                                    <div class="chat-message-left pb-4">
                                                        <div>
                                                            <img src="/dist/img/admin.png" class="rounded-circle mr-1"
                                                                alt="" width="40" height="40">

                                                        </div>
                                                        <div
                                                            class="flex-shrink-1 bg-light rounded py-2 ms-2 px-3 ml-3 border border-dark">
                                                            <div class="font-weight-bold mb-1">
                                                                <b>{{ $item->administrator->nama }}</b>
                                                            </div>
                                                            <p>{{ $item->pesan }}</p>
                                                        </div>
                                                    </div>
                                                @endif
                                            @else
                                                kosong
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">

                                        <div class="flex-grow-0 py-3 px-4 border-top">

                                            <form action="" method="post">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="text" name="pesan"
                                                        class="form-control border border-dark"
                                                        placeholder="Type your message" autocomplete="off">
                                                    <input type="hidden" name="id_user"
                                                        value="{{ auth()->user()->id }}">
                                                    <input type="hidden" name="id_pegawai"
                                                        value="{{ $getAdmin->id }}">
                                                    @if (isset($data2))
                                                        <input type="hidden" name="kode_chat"
                                                            value="{{ $data2->kode_chat }}">
                                                    @else
                                                        <input type="hidden" name="kode_chat"
                                                            value="{{ uniqid() }}">
                                                    @endif

                                                    <input type="hidden" name="role" value="masyarakat">
                                                    <button type="submit" class="btn btn-primary"><i
                                                            class="bi bi-send"></i></i></button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
