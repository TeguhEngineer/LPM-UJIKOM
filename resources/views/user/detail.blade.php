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
</head>

<body style="background-color: #eee;">

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/user#riwayat"><i class="bi bi-chevron-left"></i> Back</a>
          

        </div>
    </header>


    <section style="background-color: #eee;">
        <div class="container my-0">
            <div class="row justify-content-center">
                <div class="col-sm-12 text-center">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <h5 class="text-info" style="letter-spacing: 5px;">Detail</h5>
                    </nav>
                </div>
            </div>


            <div class="row justify-content-center">

                <div class="col-sm-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pengaduan</h3>
                        </div>
                        <form>
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Nama</label>

                                    <input type="text" class="form-control" value="{{ $showpengaduan->users->nama }}"
                                        id="exampleInputEmail1" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="date" value="{{ $showpengaduan->tanggal_pengaduan }}"
                                            class="form-control datetimepicker-input" disabled />
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-sm-8">
                                        <div id="carouselExampleAutoplaying" class="carousel slide"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                @if ($showgambar->count(0))
                                                    <div class="carousel-item active ">
                                                        <img src="/galleryPengaduan/{{ $showgambar[0]->gambar }}"
                                                            class="d-block " style="max-height: 200px;" alt="...">
                                                    </div>
                                                @endif
                                                @foreach ($showgambar->skip(1) as $show)
                                                    <div class="carousel-item active">
                                                        <img src="/galleryPengaduan/{{ $show->gambar }}" class="d-block"
                                                            style="max-height: 200px;" alt="...">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input type="text"
                                            value="{{ $showpengaduan->jenis_pengaduan->jenis_pengaduan }}"
                                            class="form-control datetimepicker-input" disabled />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Isi Pengaduan</label>
                                    <textarea class="form-control" rows="5" disabled>{{ $showpengaduan->isi_laporan }}</textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if ($showtanggapan == null)
                    <div class="col-sm-6">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Tanggapan</h3>
                            </div>
                            <form>
                                <div class="card-body">
                                    <h5 class="text-center text-secondary">Belum memiliki tanggapan</h5>
                                </div>
                            </form>
                        </div>
                    </div>
                @else
                    <div class="col-sm-6">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Tanggapan</h3>
                            </div>
                            <form>
                                <div class="card-body">
                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Penanggap</label>

                                        <input type="text" class="form-control"
                                            value="{{ $showtanggapan->users->nama }}" id="exampleInputEmail1"
                                            disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal tanggapan</label>
                                        <div class="input-group date" id="reservationdate"
                                            data-target-input="nearest">
                                            <input type="date" value="{{ $showtanggapan->tanggal_tanggapan }}"
                                                class="form-control datetimepicker-input" disabled />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Isi tanggapan</label>
                                        <textarea class="form-control" rows="5" disabled>{{ $showtanggapan->isi_tanggapan }}</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
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
