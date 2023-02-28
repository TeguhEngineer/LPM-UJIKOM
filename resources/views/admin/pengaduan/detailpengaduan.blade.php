@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="/pengaduan"
                                    class="text-decoration-none text-secondary">Pengaduan Masuk</a></li>
                            <li class="breadcrumb-item"><a href=""> Konfirmasi Pengaduan</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {{-- Isi Content --}}
        <div class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-sm-4 my-auto ms-2">
                                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @if ($gambar->count(0))
                                                <div class="carousel-item active">
                                                    <img src="/galleryPengaduan/{{ $gambar[0]->gambar }}"
                                                        class="d-block w-100 img-fluid rounded" alt="...">
                                                </div>
                                            @endif
                                            @foreach ($gambar->skip(1) as $multi)
                                                <div class="carousel-item active">
                                                    <img src="/galleryPengaduan/{{ $multi->gambar }}"
                                                        class="d-block w-100 img-fluid rounded" alt="...">
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                            <span class="" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                            <span class="" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    {{-- <img src="/dist/img/user.png" class="img-fluid rounded-start" alt="..."> --}}
                                </div>
                                <div class="col-sm-7">
                                    <div class="row" >
                                        <div class="col-12 col-sm-12">
                                            <div class="card shadow-none">
                                                <div class="card-header p-0">
                                                    <ul class="nav nav-tabs nav-fill" id="custom-tabs-four-tab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link text-dark fw-bold" id="custom-tabs-four-home-tab"
                                                                data-toggle="pill" href="#custom-tabs-four-home" role="tab"
                                                                aria-controls="custom-tabs-four-home" aria-selected="true">Identitas
                                                               </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link text-dark fw-bold" id="custom-tabs-four-profile-tab"
                                                                data-toggle="pill" href="#custom-tabs-four-profile" role="tab"
                                                                aria-controls="custom-tabs-four-profile" aria-selected="false">Laporan
                                                                </a>
                                                        </li>
                                                       
                    
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                                            aria-labelledby="custom-tabs-four-home-tab">
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        Nama
                                                                    </div>
                                                                    <div class="col-1">
                                                                        :
                                                                    </div>
                                                                    <div class="col-8">
                                                                        {{ $isipengaduan->users->nama }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        Jenis kelamin
                                                                    </div>
                                                                    <div class="col-1">
                                                                        :
                                                                    </div>
                                                                    <div class="col-8">
                                                                        {{ $isipengaduan->users->jk }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        Email
                                                                    </div>
                                                                    <div class="col-1">
                                                                        :
                                                                    </div>
                                                                    <div class="col-8">
                                                                        {{ $isipengaduan->users->email }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        Telepon
                                                                    </div>
                                                                    <div class="col-1">
                                                                        :
                                                                    </div>
                                                                    <div class="col-8">
                                                                        {{ $isipengaduan->users->telepon }}
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-3">
                                                                        Alamat
                                                                    </div>
                                                                    <div class="col-1">
                                                                        :
                                                                    </div>
                                                                    <div class="col-8">
                                                                        {{ $isipengaduan->users->alamat }}
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                                            aria-labelledby="custom-tabs-four-profile-tab">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    Tanggal Pengaduan
                                                                </div>
                                                                <div class="col-1">
                                                                    :
                                                                </div>
                                                                <div class="col-7">
                                                                    {{ $isipengaduan->tanggal_pengaduan }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    Jenis Pengaduan
                                                                </div>
                                                                <div class="col-1">
                                                                    :
                                                                </div>
                                                                <div class="col-7">
                                                                    {{ $isipengaduan->jenis_pengaduan->jenis_pengaduan }}
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    Isi Laporan
                                                                </div>
                                                                <div class="col-1">
                                                                    :
                                                                </div>
                                                                <div class="col-7">
                                                                    {{ $isipengaduan->isi_laporan }}
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    Status
                                                                </div>
                                                                <div class="col-1">
                                                                    :
                                                                </div>
                                                                <div class="col-7">

                                                                    <form action="/pengaduan/{{ $isipengaduan->id }}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <select class="form-select"  name="status">
                                                                                <option value="{{ $isipengaduan->status }}" selected>
                                                                                    <label>Ditinjau</label>
                                                                                </option>
                                                                                <option value="proses">Diproses</option>
                    
                                                                            </select>
                                                                            <button
                                                                                class="btn btn-outline-primary btn-sm mt-1 btn-block">Ubah</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                       
                    
                                                    </div>
                                                </div>
                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-sm-3 ">
                                    <div class="card-body border-2 ">
                                        <div class="row">
                                            <h5 class="card-title py-2">Nama </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">Jenis kelamin </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">Email </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">Telepon </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">Alamat </h5>
                                        </div>


                                        <div class="row">

                                            <h5 class="card-title py-2">Jenis Pengaduan </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">Isi Pengaduan </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">Tanggal Pengaduan </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">Status </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="card-body border-2">
                                        <div class="row">
                                            <h5 class="card-title py-2">: {{ $isipengaduan->users->nama }} </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">: {{ $isipengaduan->users->jk }} </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">: {{ $isipengaduan->users->email }} </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">: {{ $isipengaduan->users->telepon }} </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">: {{ $isipengaduan->users->alamat }} </h5>
                                        </div>


                                        <div class="row">

                                            <h5 class="card-title py-2">:
                                                {{ $isipengaduan->jenis_pengaduan->jenis_pengaduan }} </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">: {{ $isipengaduan->isi_laporan }} </h5>
                                        </div>
                                        <div class="row">

                                            <h5 class="card-title py-2">: {{ $isipengaduan->tanggal_pengaduan }} </h5>
                                        </div>
                                        <div class="row">
                                            <span>:
                                                <form action="/pengaduan/{{ $isipengaduan->id }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="form-group">
                                                        <select class="form-control" name="status">
                                                            <option value="{{ $isipengaduan->status }}" selected>
                                                                <label>Ditinjau</label>
                                                            </option>
                                                            <option value="proses">Diproses</option>

                                                        </select>
                                                        <button
                                                            class="btn btn-outline-primary btn-sm mt-1 btn-block">Ubah</button>
                                                    </div>
                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>
@endsection
