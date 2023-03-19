<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator | Login</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/dist/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="/dist/css/adminlte.min.css?v=3.2.0">
</head>

<body class="hold-transition login-page">

    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>Daftar Admin/Petugas</b></h1>
            </div>
            <div class="card-body">
                <form action="/daftaradmin" method="POST">
                    @csrf
                    
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                            name="nama" placeholder="Nama" required value="{{ old('nama') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        {{-- <input type="text" class="form-control @error('jk') is-invalid @enderror"
                            name="jk" placeholder="Jenis Kelamin" required value="{{ old('jk') }}" autofocus> --}}
                        <select name="jk" class="form-select @error('jk') is-invalid @enderror">
                            <option selected disabled>-- Pilih Jenis Kelamin --</option>
                        <option value="laki-laki">Laki - laki</option>
                        <option value="perempuan">Perempuan</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('jk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Email" required value="{{ old('email') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                            name="username" placeholder="Username" required value="{{ old('username') }}" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        {{-- <input type="text" class="form-control" name="role" placeholder="Level" required> --}}
                        <select name="role" class="form-select @error('role') is-invalid @enderror">
                            <option selected disabled>-- Pilih Level --</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="row">

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-1 float-start mt-4">
                                <a href="/administrator" class="text-decoration-underline">Sudah Punya akun? Masuk disini</a>
                            </p>
                        </div>

                    </div>

                </form>



            </div>

        </div>

    </div>

    <script src="/js/bootstrap.min.js"></script>
    <script src="/plugins/jquery/jquery.min.js"></script>

    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>
