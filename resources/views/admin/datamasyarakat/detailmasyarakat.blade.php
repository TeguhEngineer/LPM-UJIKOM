@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page"><a href="/datamasyarakat"
                                    class="text-decoration-none text-secondary">Data masyarakat</a></li>
                            <li class="breadcrumb-item"><a href=""> Detail data Masyarakat</a></li>
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
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{ $showmasyarakat->nama }}</h3>
                                <p class="text-muted text-center">{{ $showmasyarakat->role }}</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>NIK</b> <a class="float-right">{{ $showmasyarakat->nik }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Username</b> <a class="float-right">{{ $showmasyarakat->username }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Jenis Kelamin</b> <a class="float-right">{{ $showmasyarakat->jk }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{ $showmasyarakat->email }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>No Telepon</b> <a class="float-right">{{ $showmasyarakat->telepon }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Alamat</b> <a class="float-right">{{ $showmasyarakat->alamat }}</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="bi bi-people"></i> Edit data masyarakat</h3>
                            </div>

                            <form action="/datamasyarakat/{{ $showmasyarakat->id }}" method="POST" class="form-horizontal">
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
                                                value="{{ $showmasyarakat->nama }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="form-nik" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control @error('nik') is-invalid @enderror"
                                                id="form-nik" name="nik" placeholder="NIK" required
                                                value="{{ $showmasyarakat->nik }}">
                                            @error('nik')
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
                                                <option>{{ $showmasyarakat->jk }}</option>
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
                                        <label for="inputUsername" class="col-sm-2 col-form-label">Userame</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror" name="username"
                                                id="inputUsername" placeholder="Username" required
                                                value="{{ $showmasyarakat->username }}">
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
                                                value="{{ $showmasyarakat->email }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputNomor" class="col-sm-2 col-form-label">No.Telp</label>
                                        <div class="col-sm-10">
                                            <input type="number"
                                                class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                                                id="inputNomor" placeholder="Nomor Telepon" required
                                                value="{{ $showmasyarakat->telepon }}">
                                            @error('telepon')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="inputAlamat" rows="3" name="alamat"
                                                placeholder="Alamat" required>{{ $showmasyarakat->alamat }}</textarea>
                                            @error('alamat')
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
