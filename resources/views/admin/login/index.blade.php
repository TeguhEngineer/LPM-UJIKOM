<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator | Login</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">

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
                <h1><b> Masuk Admin/Petugas</b></h1>
            </div>
            <div class="card-body">
                <form action="/administrator" method="POST">
                    @csrf
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                            </svg>
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
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

                    <div class="row">

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>

                    </div>
                    {{-- <div class="row">
                        <div class="col-12">
                            <p class="mb-1 float-end mt-2">
                                <a href="#" class="text-decoration-underline text-secondary">Lupa password
                                    ?</a>
                            </p>
                        </div>

                    </div> --}}

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
