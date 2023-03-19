@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        {{-- Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="/kategori">Kategori</a></li>
                            <li class="breadcrumb-item"><a href="#">Tambah Kategori</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- /header --}}

        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="bi bi-list-ul"></i> Tambah Kategori</h3>
                            </div>
                            <form action="/kategori" method="POST" class="form-horizontal">
                                @csrf
                                <div class="card-body">
                                    @if (session()->has('informasi'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-check-circle-fill me-2"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                            {{ session('informasi') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="form-group row">
                                        <label for="inputNama" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('jenis_pengaduan') is-invalid @enderror"
                                                id="inputNama" name="jenis_pengaduan" placeholder="Kategori" required>
                                            @error('jenis_pengaduan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="/kategori">
                                        <button type="button" class="btn btn-default ">Batal</button>
                                    </a>
                                    <button type="submit" name="simpan" class="btn btn-primary float-end">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
