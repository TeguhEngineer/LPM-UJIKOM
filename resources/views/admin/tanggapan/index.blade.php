@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Tanggapan</a></li>
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
                                <h3 class="card-title">Tabel Tanggapan</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 200px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0" style="height: 410px;">
                                <table class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pelapor</th>
                                            <th>Tanggal Pengaduan</th>

                                            {{-- <th>Tanggal Ditanggapi</th> --}}
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cekpengaduan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->users->email }}</td>
                                                <td>{{ $item->created_at }}</td>

                                                {{-- <td>{{ $item->tanggapan->created_at }}</td> --}}
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
                                                <td>
                                                    @if ($item->status == 'proses')
                                                        <a href="/tanggapan/{{ $item->id }}/edit">
                                                            <button class="btn btn-primary py-0 px-1"><i
                                                                    class="bi bi-chat-left-text"></i></button>
                                                        </a>
                                                    @elseif ($item->status == 'selesai')
                                                        <a href="/tanggapan/{{ $item->id }}">
                                                            <button class="btn btn-primary py-0 px-1"><i
                                                                    class="bi bi-card-checklist"></i></button>
                                                        </a>
                                                    @endif
                                                    <a href="">
                                                        <button class="btn btn-danger py-0 px-1"><i
                                                                class="bi bi-trash3"></i></button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- Tutup content --}}

    </div>
@endsection
