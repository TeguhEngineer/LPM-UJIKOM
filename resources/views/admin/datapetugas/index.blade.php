@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Data Petugas</a></li>

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

                                <a href="/datapetugas/create">
                                    <h3 class="card-title text-primary"><i class="bi bi-plus-lg"></i> Tambah data petugas
                                    </h3>
                                </a>
                                <div class="card-tools">
                                    <form action="/datapetugas" method="GET">
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
                                @if ($datapetugas->count() > 0)
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datapetugas as $item)
                                                <tr>
                                                    <td><b>{{ $loop->iteration }}</b></td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->username }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->role }}</td>
                                                    <td>
                                                        <a href="">
                                                            <button class="btn btn-warning py-0 px-1"><i
                                                                    class="bi bi-pencil-square"></i></button>
                                                        </a>
                                                        <a href="">
                                                            <button class="btn btn-info py-0 px-1"><i
                                                                    class="bi bi-key"></i></button>
                                                        </a>
                                                        <a href="">
                                                            <button class="btn btn-danger py-0 px-1"><i
                                                                    class="bi bi-trash3"></i></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div class="mt-5">
                                        <div class="col-md-12 text-center mt-5 opacity-50">
                                            <img src="/imgAdmin/datatidakditemukan.png" alt="">
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
