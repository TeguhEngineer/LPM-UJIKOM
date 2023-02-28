@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        {{-- Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="/datapetugas"
                                    class="text-decoration-none text-secondary">Data petugas</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="">Tambah Data Petugas</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- /header --}}

        {{-- Isi content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="bi bi-person"></i> Tambah data petugas</h3>
                            </div>
                            <form action="/datapetugas" method="POST" class="form-horizontal">
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
                                        <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="inputNama" name="nama" placeholder="Nama" required
                                                value="{{ old('nama') }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputJK" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('jk') is-invalid @enderror" id="inputJK"
                                                name="jk" required>
                                                <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                            @error('jk')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputUsername" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror" name="username"
                                                id="inputUsername" placeholder="Username" required
                                                value="{{ old('username') }}">
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                id="inputPassword" placeholder="Password" required
                                                value="{{ old('password') }}">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" id="inputEmail" placeholder="Email" required
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <label for="inputLevel" class="col-sm-3 col-form-label">Level</label>
                                        <div class="col-sm-9">
                                            <select class="form-control @error('role') is-invalid @enderror" name="role"
                                                required>
                                                <option selected disabled>-- Pilih Level --</option>
                                                <option value="admin">Admin</option>
                                                <option value="petugas">Petugas</option>
                                            </select>
                                            @error('role')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                    <a href="/datapetugas">
                                        <button type="button" class="btn btn-default float-right">Batal</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
