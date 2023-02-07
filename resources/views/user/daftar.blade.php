<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- css formDaftar --}}
    <link rel="stylesheet" href="formDaftarUser/style.css">
    {{-- google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                        alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
                <div class="col-sm-1"></div>

                <div class="col-sm-4">

                    <div class="d-flex align-items-center h-custom-2 mt-0 pt-5 pt-xl-0 mt-xl-n5">

                        <form action="/daftar" method="POST" style="width: 100%;">
                            @csrf
                            <h3 class="fw-bold mb-3 pb-3 text-center" style="letter-spacing: 1px;">DAFTAR</h3>
                            <div class="form-outline mb-2">
                                <input type="text" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror " placeholder="Nama"
                                    required value="{{ old('nama') }}" />
                                @error('nama')
                                    <div class="invalid-feedback">
                                        Mohon isi kolom nama dengan benar
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-2">
                                <select class="form-select @error('jk') is-invalid @enderror"
                                    aria-label="Default select example" name="jk" required
                                    value="{{ old('jk') }}">
                                    <option selected disabled>Jenis kelamin</option>
                                    <option value="laki-laki">Laki - laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                                @error('jk')
                                    <div class="invalid-feedback">
                                        Mohon pilih jenis kelamin
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-2">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" placeholder="Username" required value="{{ old('username') }}" />
                                @error('username')
                                    <div class="invalid-feedback">
                                        Mohon isi kolom username
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-2">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password" required value="{{ old('password') }}" />
                                @error('password')
                                    <div class="invalid-feedback">
                                        Mohon isi minimal 5 karakter
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-2">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Email" name="email" required value="{{ old('email') }}" />
                                @error('email')
                                    <div class="invalid-feedback">
                                        Mohon isi kolom email dengan benar
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-2">
                                <input type="number" class="form-control @error('telepon') is-invalid @enderror"
                                    name="telepon" placeholder="No.telepon" required value="{{ old('telepon') }}" />
                                @error('telepon')
                                    <div class="invalid-feedback">
                                        Mohon isi nomor telepon dengan benar
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-2">
                                <input type="text" class="form-control @error('nik') is-invalid @enderror"
                                    placeholder="NIK" name="nik" required value="{{ old('nik') }}" />
                                @error('nik')
                                    <div class="invalid-feedback">
                                        Mohon isi NIK dengan benar
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-3">
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    placeholder="Alamat" name="alamat" required value="{{ old('alamat') }}" />
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        Mohon isi alamat anda
                                    </div>
                                @enderror
                            </div>
                            <div class="form-outline mb-3">
                                <input type="hidden" class="form-control " value="masyarakat" placeholder="Level"
                                    name="role" />
                            </div>

                            <div class="pt-1 mb-2 ">
                                <button class="btn btn-info btn-sm form-control text-white"
                                    type="submit">Daftar</button>
                            </div>

                            <p class="small mb-5 pb-lg-2 float-end"><a class="text-muted" href="#!">Lupa
                                    password?</a></p>
                            <p class="mt-5">Sudah punya akun? <a href="/login" class="link-info">Masuk
                                    disini!</a>
                            </p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-1"></div>

            </div>
        </div>
    </section>

    {{-- Bootstrap --}}
    <script src="/css/bootstrap.min.js"></script>
</body>

</html>
