@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        {{-- Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Detail Pengaduan </a></li>
                         
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- /header --}}

        {{-- Isi Content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    {{-- Pengaduan --}}
                    <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Pengadu</h3>
                            </div>
                            <form>
                                <div class="card-body">
                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Nama</label>

                                        <input type="text" class="form-control" value="{{ $lihatpengadu->users->nama }}"
                                            id="exampleInputEmail1" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="date" value="{{ $lihatpengadu->tanggal_pengaduan }}"
                                                class="form-control datetimepicker-input" disabled />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                @if ($lihatgambar->count(0))
                                                    <div class="carousel-item active">
                                                        <img src="/galleryPengaduan/{{ $lihatgambar[0]->gambar }}"
                                                            class="d-block w-100" alt="...">
                                                    </div>
                                                @endif
                                                @foreach ($lihatgambar->skip(1) as $multi)
                                                    <div class="carousel-item active">
                                                        <img src="/galleryPengaduan/{{ $multi->gambar }}"
                                                            class="d-block w-100" alt="...">
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
                                    <div class="form-group mt-2">
                                        <label>Kategori</label>
                                        <input type="text" value="{{ $lihatpengadu->jenis_pengaduan->jenis_pengaduan }}"
                                            class="form-control datetimepicker-input" disabled />
                                        {{-- <textarea class="form-control" rows="5" disabled></textarea> --}}
                                    </div>
                                    <div class="form-group">
                                        <label>Isi pengaduan</label>
                                        <textarea class="form-control" rows="5" disabled>{{ $lihatpengadu->isi_laporan }}</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Tanggapan --}}
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
                                            value="{{ $lihattanggapan->users->nama }}" id="exampleInputEmail1" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal tanggapan</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="date" value="{{ $lihattanggapan->tanggal_tanggapan }}"
                                                class="form-control datetimepicker-input" disabled />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Isi tanggapan</label>
                                        <textarea class="form-control" rows="5" disabled>{{ $lihattanggapan->isi_tanggapan }}</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
