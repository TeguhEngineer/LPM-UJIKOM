@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        {{-- Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Data Masyarakat</a></li>

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
                        <div class="card">
                            <div class="card-header">
                                <a href="/datamasyarakat/create">
                                    <h3 class="card-title text-primary"><i class="bi bi-plus-lg"></i> Tambah data
                                        masyarakat
                                    </h3>
                                </a>
                                <div class="card-tools">
                                    <form action="/datamasyarakat" method="GET">
                                        <div class="input-group input-group-sm" style="width: 200px;">
                                            <input type="text" name="search" type="search"
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
                                @if ($datamasyarakat->count() > 0)
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Telepon</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($datamasyarakat as $item)
                                                <tr>
                                                    <td><b>{{ $loop->iteration }}</b></td>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->jk }}</td>
                                                    <td>{{ $item->telepon }}</td>
                                                    <td>
                                                        <form action="/datamasyarakat/{{ $item->id }}/edit"
                                                            class="d-inline" role="button">
                                                            <button type="submit" class="btn btn-primary py-0 px-1"><i
                                                                    class="bi bi-person-lines-fill"></i></button>
                                                        </form>

                                                        {{-- revisi --}}
                                                        
                                                        {{-- <form action="/datamasyarakat/{{ $item->id }}" method="POST"
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
