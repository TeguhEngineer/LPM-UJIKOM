@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            @if ($showpetugas->role == 'admin')
                                <li class="breadcrumb-item" aria-current="page"><a href="/datapetugas"
                                        class="text-decoration-none text-secondary">Data Admin</a></li>
                                <li class="breadcrumb-item"><a href=""> Detail data Admin</a></li>
                            @elseif ($showpetugas->role == 'petugas')
                                <li class="breadcrumb-item" aria-current="page"><a href="/datapetugas"
                                        class="text-decoration-none text-secondary">Data Petugas</a></li>
                                <li class="breadcrumb-item"><a href=""> Detail data Petugas</a></li>
                            @elseif ($showpetugas->role == 'masyarakat')
                                <li class="breadcrumb-item" aria-current="page"><a href="/datamasyarakat"
                                        class="text-decoration-none text-secondary">Data Masyarakat</a></li>
                                <li class="breadcrumb-item"><a href=""> Detail data Masyarakat</a></li>
                            @endif

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        {{-- ISI CONTENT --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    @if ($showpetugas->role == 'admin')
                                        <img class="profile-user-img img-fluid img-circle" src="/dist/img/admin.png"
                                            alt="User profile picture">
                                    @elseif ($showpetugas->role == 'petugas')
                                        <img class="profile-user-img img-fluid img-circle" src="/dist/img/petugas.png"
                                            alt="User profile picture">
                                    @elseif ($showpetugas->role == 'masyarakat')
                                        <img class="profile-user-img img-fluid img-circle" src="/dist/img/user.png"
                                            alt="User profile picture">
                                    @endif
                                </div>
                                <h3 class="profile-username text-center">{{ $showpetugas->nama }}</h3>
                                <p class="text-muted text-center">{{ $showpetugas->role }}</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <b>Jenis Kelamin</b>
                                            </div>
                                            <div class="col-2 text-end">
                                                :
                                            </div>
                                            <div class="col-6">
                                                <a class="float-left">{{ $showpetugas->jk }}</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <b>Username</b>
                                            </div>
                                            <div class="col-2 text-end">
                                                :
                                            </div>
                                            <div class="col-6">
                                                <a class="float-left">{{ $showpetugas->username }}</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <b>Email</b>
                                            </div>
                                            <div class="col-2 text-end">
                                                :
                                            </div>
                                            <div class="col-6">
                                                <a class="float-left">{{ $showpetugas->email }}</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card card-primary">
                            <div class="card-header">
                                @if ($showpetugas->role == 'admin')
                                    <h3 class="card-title"><i class="bi bi-person"></i> Edit data admin</h3>
                                @elseif ($showpetugas->role == 'petugas')
                                    <h3 class="card-title"><i class="bi bi-person"></i> Edit data petugas</h3>
                                @elseif ($showpetugas->role == 'masyarakat')
                                    <h3 class="card-title"><i class="bi bi-person"></i> Edit data masyarakat</h3>
                                @endif

                            </div>

                            <form action="/datapetugas/{{ $showpetugas->id }}" method="POST" class="form-horizontal">
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
                                        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="inputNama" name="nama" placeholder="Nama" required
                                                value="{{ $showpetugas->nama }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputJK" class="col-sm-2 col-form-label">JK</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('jk') is-invalid @enderror" id="inputJK"
                                                name="jk" required>
                                                <option>{{ $showpetugas->jk }}</option>
                                                <option disabled>-- Pilih Jenis Kelamin --</option>
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
                                        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror"
                                                name="username" id="inputUsername" placeholder="Username" required
                                                value="{{ $showpetugas->username }}">
                                            @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                id="inputEmail" placeholder="Email" required
                                                value="{{ $showpetugas->email }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputRole" class="col-sm-2 col-form-label">Level</label>
                                        <div class="col-sm-10">
                                            <select class="form-control @error('role') is-invalid @enderror"
                                                id="inputRole" name="role" required>
                                                <option>{{ $showpetugas->role }}</option>
                                                <option disabled>-- Pilih Level --</option>
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
                                    <button type="submit" name="simpan"
                                        class="btn btn-primary btn-block">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
