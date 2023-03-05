@extends('master.kerangkaUser')
@section('container')
    <!-- ======= Beranda ======= -->
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
                    <img src="/dist/img/lingkunganhidup.png" class="img-fluid animated" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Beranda -->

    <main id="main">
        <!-- ======= Jumlah Laporan ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center ">

                        <h3 class="fw-bold">JUMLAH SELURUH LAPORAN</h3>
                    </div>
                </div>
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center ">
                        <h1 class="fw-bold">{{ $countPengaduan }}</h1>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Jumlah Laporan -->

        <!-- ======= Tentang Kami ======= -->
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


                </div>
            </div>
        </section>
        <!-- End Tentang kami -->



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
        <!-- End Informasi -->

        <!-- ======= Pertanyaan ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pertanyaan ?</h2>
                    <p>
                        Website ini ditujukan untuk memudahkan masyarakat dalam melaporkan kerusakan alam, agar lebih mudah
                        tanpa perlu mengunjungi kantor pusat kami.

                    </p>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Bagaimana cara saya
                                lapor? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>Masyarakat dapat membuat akun terlebih dahulu untuk bisa melaporkan agar jelas identitas
                                    pelapor</p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Jika sudah punya
                                akun, bagaimana cara melapor? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Masyarakat dapat mengisi form laporan yang berada di halaman web dengan disertai minimal
                                    1 bukti foto jika memang benar terdapat kerusakan alam/lingkungan
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Bagaimana saya
                                tahu jika laporan saya sudah ditanggapi?<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Masyarakat dapat mengecek riwayat laporan yang berada di halaman web
                                </p>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </section>
        <!-- End Pertanyaan -->

        <!-- ======= Lapor Section ======= -->
        <section id="lapor" class="contact section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>KIRIM LAPORANMU!</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-7">
                        <div class="card card-primary card-outline">
                            <form action="/user" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="status" value="ditinjau">
                                <input type="hidden" name="users_id" value="{{ auth()->user()->id }}">
                                <div class="card-body shadow">
                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="date" name="tanggal_pengaduan"
                                                    class="form-control @error('tanggal_pengaduan') is-invalid @enderror">
                                                @error('tanggal_pengaduan')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="select">Jenis pengaduan</label>
                                            <select id="select" name="jenispengaduan_id"
                                                class="form-select @error('jenispengaduan_id') is-invalid @enderror"
                                                aria-label="Default select example">
                                                <option selected disabled>-- Pilih jenis pengaduan --</option>
                                                @foreach ($kategori as $item)
                                                    <option value="{{ $item->id }}">{{ $item->jenis_pengaduan }}
                                                    </option>
                                                @endforeach
                                                @error('jenispengaduan_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <label for="exampleFormControlTextarea1" class="form-label">Isi
                                                Pengaduan</label>
                                            <textarea class="form-control @error('isi_laporan') is-invalid @enderror" name="isi_laporan"
                                                id="exampleFormControlTextarea1" rows="6"></textarea>
                                            @error('isi_laporan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Form Gambar --}}

                                    <div class="row mt-3">
                                        <div class="col-sm-12">
                                            <label for="formFile" class="form-label">Lampirkan minimal 1 gambar</label>
                                            <input class="form-control @error('files') is-invalid @enderror"
                                                name="files[]" type="file" id="formFile" accept="image/*"
                                                multiple="" required>
                                            @error('files')
                                                <div class="invalid-feedback">
                                                    Lampirkan gambar minimal 1
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-4 justify-content-center">
                                        <div class="col-sm-5">
                                            <button type="submit"
                                                class="btn btn-outline-primary btn-block rounded-pill">Kirim</button>
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

        {{-- Modal berhsil lapor --}}
        @if (session()->has('informasi'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                {{ session('informasi') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- End Modal berhasil lapor --}}

        {{-- Riwayat Pengaduan --}}
        <section id="riwayat">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>RIWAYAT PENGADUAN SAYA </h2>
                </div>
                @if ($riwayat->count() < 1)
                    <h5 class="text-secondary text-center">Belum Memilki Riwayat</h5>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jenis Pengaduan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Detail</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($riwayat as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->jenis_pengaduan->jenis_pengaduan }}</td>

                                    <td>
                                        @if ($item->status == 'ditinjau')
                                            <span class="badge rounded-pill text-bg-primary py-2  fw-bold"
                                                style="width: 70px;">{{ $item->status }}</span>
                                        @elseif ($item->status == 'proses')
                                            <span class="badge rounded-pill text-bg-warning py-2  fw-bold text-light"
                                                style="width: 70px;">{{ $item->status }}</span>
                                        @elseif ($item->status == 'selesai')
                                            <span class="badge rounded-pill text-bg-success py-2 fw-bold"
                                                style="width: 70px;">{{ $item->status }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/detail/{{ $item->id }}">
                                            <button class="btn btn-outline-info">Detail</button>
                                        </a>

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                @endif
            </div>
        </section>
    </main>
    <!-- End #main -->
@endsection
