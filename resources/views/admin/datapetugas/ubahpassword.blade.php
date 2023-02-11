@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="/datapetugas"
                                    class="text-decoration-none text-secondary">Data petugas</a></li>
                            <li class="breadcrumb-item"><a href=""> Detail data Petugas</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        {{-- ISI CONTENT --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="bi bi-person"></i> Ubah Password</h3>
                            </div>

                            <form action="/ubahpassword/{{ $petugasshow->id }}" method="POST" class="form-horizontal">
                                @method('PUT')
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
                                        <label for="inputPassword" class="col-sm-4 col-form-label">Password baru</label>
                                        <div class="col-sm-8">
                                            <input type="text"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="inputPassword" name="password" placeholder="Pasword baru" autofocus
                                                required>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    Password tidak cocok
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-4 col-form-label">Konfirmasi
                                            password</label>
                                        <div class="col-sm-8">
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation" id="inputPassword" placeholder="Konfirmasi"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class="col-sm-10">
                                            <input type="hidden" class="form-control " name="id"
                                                placeholder="Password" value="{{ $petugasshow->id }}">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
