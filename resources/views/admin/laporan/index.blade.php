@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                         
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
                    <div class="col-sm-12">

                        <div class="card card-widget">
                            <div class="card-header">
                                <p class="d-inline fw-bold">Generate Laporan</p>


                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="card-refresh"
                                        data-source="/laporan" data-source-selector="#card-refresh-content">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>

                                  
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                        class="fas fa-times"></i>
                                    </button>
                                </div>

                            </div>
                            <form action="/laporan" method="GET">
                                @csrf
                                <div class="card-body" id="card-refresh-content">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="text-sm">Dari Tanggal : </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="date" class="form-control float-right" id="reservation"
                                                        name="dari_tanggal">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="text-sm">Sampai Tanggal : </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="date" class="form-control float-right" id="reservation"
                                                        name="sampai_tanggal">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="text-sm">Kategori :</label>
                                                <select class="form-select" name="kategori">
                                                    <option value="" selected disabledb>-- Pilih Kategori --</option>
                                                    @foreach ($jenis_pengaduan as $item)
                                                        <option value="{{ $item->id }}">
                                                            {{ $item->jenis_pengaduan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="text-sm">Status :</label>
                                                <select class="form-select" name="cekstatus">
                                                    <option selected disabled>-- Pilih status --</option>
                                                    <option value="ditinjau">Ditinjau</option>
                                                    <option value="proses">Diproses</option>
                                                    <option value="selesai">Selesai</option>

                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-warning fw-bold px-5">Filter</button>
                                </div>
                            </form>
                        </div>

                    </div>









                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Laporan Pengaduan</h3>
                                <div class="card-tools">
                                    <form action="/laporan" method="GET">
                                        <div class="input-group input-group-sm" style="width: 200px;">
                                            <input type="search" name="search" class="form-control float-right"
                                                placeholder="Search" value="{{ request('search') }}">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0" style="height: 370px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Jenis Pengaduan</th>
                                            <th>Isi Pengaduan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($laporan as $item)
                                            <tr>
                                                <td><b>{{ $loop->iteration }}</b></td>
                                                <td>{{ $item->tanggal_pengaduan }}</td>
                                                <td>{{ $item->jenis_pengaduan->jenis_pengaduan }}</td>
                                                <td>{{ $item->isi_laporan }}</td>
                                                <td>
                                                    @if ($item->status == 'ditinjau')
                                                        <span class="badge rounded-pill text-bg-primary py-2  fw-bold"
                                                            style="width: 70px;">{{ $item->status }}</span>
                                                    @elseif ($item->status == 'proses')
                                                        <span
                                                            class="badge rounded-pill text-bg-warning py-2  fw-bold text-light"
                                                            style="width: 70px;">{{ $item->status }}</span>
                                                    @elseif ($item->status == 'selesai')
                                                        <span class="badge rounded-pill text-bg-success py-2 fw-bold"
                                                            style="width: 70px;">{{ $item->status }}</span>
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <form action="/laporan/create" method="GET" target="_blank">
                            @csrf
                            <input type="hidden" name="kategori" value="{{ request('kategori') }}">
                            <input type="hidden" name="cekstatus" value="{{ request('cekstatus') }}">
                            <input type="hidden" name="dari_tanggal" value="{{ request('dari_tanggal') }}">
                            <input type="hidden" name="sampai_tanggal" value="{{ request('sampai_tanggal') }}">
                            <button class="btn btn-danger my-0 btn-sm" style="width: 120px"><i class="bi bi-printer"></i>
                                Cetak Laporan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tutup content --}}


    </div>
@endsection
