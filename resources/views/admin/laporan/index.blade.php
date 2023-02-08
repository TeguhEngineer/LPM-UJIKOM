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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabel Laporan Pengaduan</h3>
                                <div class="card-tools">
                                    <form action="/laporan" method="GET">
                                        <div class="input-group input-group-sm" style="width: 200px;">
                                            <input type="search" name="search" value="{{ request('search') }}"
                                                class="form-control float-right" placeholder="Search">
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
                                                <td>{{ $item->created_at }}</td>
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
                        <a href="/cetaklaporan" target="_blank">
                            <button class="btn btn-danger my-0 btn-sm" style="width: 120px"><i class="bi bi-printer"></i>
                                Cetak Laporan</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Tutup content --}}

    </div>
@endsection
