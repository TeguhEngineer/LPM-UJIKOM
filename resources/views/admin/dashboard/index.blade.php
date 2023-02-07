@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {{-- Isi content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6 ">

                        <div class="small-box bg-info shadow">
                            <div class="inner">
                                <h3>{{ $countPengaduan }}</h3>
                                <p>Pengaduan</p>
                            </div>
                            <div class="icon ">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <a href="/pengaduan" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-success shadow">
                            <div class="inner">
                                <h3>{{ $countTanggapan }}</h3>
                                <p>Tanggapan</p>
                            </div>
                            <div class="icon ">
                                <i class="fas fa-comment"></i>
                            </div>
                            <a href="/tanggapan" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-warning shadow">
                            <div class="inner">
                                <h3>{{ $countMasyarakat }}</h3>
                                <p>Data Masyarakat</p>
                            </div>
                            <div class="icon">

                                <i class="fas fa-users"></i>
                            </div>
                            <a href="/datamasyarakat" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-warning shadow">
                            <div class="inner">
                                <h3>{{ $countPetugas }}</h3>
                                <p>Data Petugas</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <a href="/datapetugas" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Tutup content --}}

    </div>
@endsection
