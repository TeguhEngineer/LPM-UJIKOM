@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        {{-- Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Kategori</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- /header --}}

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

                                <a href="/kategori/create">
                                    <h3 class="card-title text-primary"><i class="bi bi-plus-lg"></i> Tambah data kategori
                                    </h3>
                                </a>
                                <div class="card-tools">
                                    <form action="/kategori" method="GET">
                                        <div class="input-group input-group-sm" style="width: 200px;">
                                            <input type="text" type="search" name="search"
                                                class="form-control float-right" placeholder="Search"
                                                value="{{ request('search') }}">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="card-body table-responsive p-0" style="height: 410px;">
                                @if ($kategori->count() > 0)
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori</th>

                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kategori as $item)
                                                <tr>
                                                    <td><b>{{ $loop->iteration }}</b></td>
                                                    <td>{{ $item->jenis_pengaduan }}</td>

                                                    <td>
                                                        <a href="/kategori/{{ $item->id }}/edit" class="d-inline">
                                                            <button type="submit" class="btn btn-warning py-0 px-1"><i
                                                                    class="bi bi-pencil-square"></i></button>
                                                        </a>

                                                        {{-- <form action="/kategori/{{ $item->id }}" method="POST"
                                                            class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-danger py-0 px-1" type="submit"
                                                                onclick="return confirm('Apakah kamu yakin ? data akan dihapus secara permanen!')"><i
                                                                    class="bi bi-trash3"></i></button>
                                                        </form> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div class="mt-5">
                                        <div class="col-md-12 text-center mt-5 opacity-50">
                                            <img src="/dist/img/datatidakditemukan.png" alt="">
                                        </div>
                                    </div>
                                @endif
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- Tutup content --}}
    </div>
@endsection
