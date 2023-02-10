@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Pengaduan Masuk</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {{-- Isi Content --}}
        <div class="content">

            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                    <div class="col-sm-12">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <p>Nama</p>
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $isipengaduan->users->nama }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p>JK</p>
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $isipengaduan->users->jk }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p>Email</p>
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $isipengaduan->users->email }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p>Telepon</p>
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $isipengaduan->users->telepon }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p>Alamat</p>
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-7">
                                        {{ $isipengaduan->users->alamat }}
                                    </div>
                                </div>
                                <hr class="border border-danger border-2 opacity-50">

                                <div class="row">
                                    <div class="col-5">
                                        <p>Jenis Pengaduan</p>
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-6">
                                        {{ $isipengaduan->jenis_pengaduan->jenis_pengaduan }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <p>Isi pengaduan</p>
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-6">
                                        <p>{{ $isipengaduan->isi_laporan }}</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <p>Status</p>
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-sm-6">
                                        <form action="/pengaduan/{{ $isipengaduan->id }}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <select class="form-control" name="status">
                                                    <option value="{{ $isipengaduan->status }}" selected>
                                                        <label>Ditinjau</label>
                                                    </option>
                                                    <option value="proses">Diproses</option>
                                                    <option value="selesai">Selesai</option>
                                                </select>
                                                <button class="btn btn-outline-primary btn-sm mt-1 btn-block">Ubah</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{ $isipengaduan->gambarpengaduan->gambar }}
                            <img src="/dist/img/photo1.png" alt="...">
                            <div class="card-footer">
                                <small class="text-muted">{{ $isipengaduan->created_at }}</small>
                            </div>

                        </div>
                    </div>

                </div>
                {{-- <form action="/pengaduan/{{ $isipengaduan->id }}" method="POST" class="form-horizontal">
                    @method('PUT')
                    @csrf
                    <select class="form-control" name="status">
                        <option>{{ $isipengaduan->status }}</option>
                        <option disabled>-- Pilih Jenis Kelamin --</option>
                        <option value="proses">Proses</option>
                        <option value="selesai">Selesai</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form> --}}
            </div>


        </div>
    </div>
@endsection
