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
                        @if (session()->has('informasi'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                {{ session('informasi') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
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
                                                            <button class="btn btn-info py-0 px-1"><i
                                                                    class="bi bi-card-checklist"></i></button>
                                                        </a>
                                                    @endif
                                                    <form action="/tanggapan/{{ $item->id }}" method="POST"
                                                        class="d-inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger py-0 px-1" type="submit"
                                                            onclick="return confirm('Apakah kamu yakin ? data akan dihapus secara permanen!')"><i
                                                                class="bi bi-trash3"></i></button>
                                                    </form>
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
