@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        {{-- Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Pengaduan Masuk</a></li>
                          
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- /header --}}

        {{-- Isi Content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-7">
                        <div class="card card-widget">
                            <div class="card-header">
                                <div class="user-block">
                                    <img class="img-circle" src="/dist/img/user.png" alt="User Image">

                                    <span class="username"><a href="#">{{ $isitanggapan->users->nama }}</a></span>

                                    <span class="description">{{ $isitanggapan->tanggal_pengaduan }}</span>
                                </div>

                                <div class="card-tools">
                                    
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                  
                                </div>

                            </div>

                            <div class="card-body">
                                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @if ($gambarpengaduan->count(0))
                                            <div class="carousel-item active">
                                                <img src="/galleryPengaduan/{{ $gambarpengaduan[0]->gambar }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        @endif
                                        @foreach ($gambarpengaduan->skip(1) as $multi)
                                            <div class="carousel-item active">
                                                <img src="/galleryPengaduan/{{ $multi->gambar }}" class="d-block w-100"
                                                    alt="...">
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


                                <div class="row mt-2">
                                    <div class="col-sm-4 fw-bold">
                                        Kategori
                                    </div>
                                    <div class="col-sm-1 fw-bold ">
                                        :
                                    </div>
                                    <div class="col-sm-7">
                                        <p>{{ $isitanggapan->jenis_pengaduan->jenis_pengaduan }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 fw-bold">
                                        Isi Pengaduan
                                    </div>
                                    <div class="col-sm-1 fw-bold">
                                        :
                                    </div>
                                    <div class="col-sm-7">
                                        <p>{{ $isitanggapan->isi_laporan }}</p>
                                    </div>
                                </div>



                            </div>

                            <div class="card-footer card-comments">
                                <form action="/tanggapan" method="POST" class="form-horizontal">
                                    @csrf
                                    <div class="col-sm-12">
                                        <input type="hidden" name="users_id" value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="pengaduan_id" value="{{ $isitanggapan->id }}">
                                        <input type="hidden" name="status" value="selesai">

                                        <div class="form-group">
                                            @if (session()->has('informasi'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-check-circle-fill me-2"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                    {{ session('informasi') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <label>Tanggal tanggapan:</label>
                                            <div class="input-group date" id="reservationdate"
                                                data-target-input="nearest">
                                                <input type="date" name="tanggal_tanggapan" class="form-control "
                                                    data-target="#reservationdate" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Isi tanggapan</label>
                                            <textarea class="form-control" name="isi_tanggapan" rows="5" placeholder="Isi tanggapan"></textarea>
                                        </div>

                                        <input type="hidden" name="status" value="selesai">
                                        <button type="submit" class="btn btn-primary">Kirim</button>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
   
@endsection
