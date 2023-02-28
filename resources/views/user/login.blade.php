<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- css formLogin --}}
    <link rel="stylesheet" href="formLoginUser/style.css">
    {{-- google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;500;700&display=swap" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet"> --}}

</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="/dist/img/logindanregister.png" alt="Login image" class="w-100 vh-100"
                        style="object-fit: contain; object-position: left; width: 100%;">
                </div>
                <div class="col-sm-1"></div>

                <div class="col-sm-4 my-auto">


                    <div class="d-flex align-items-center h-custom-2 mt-0 pt-5 pt-xl-0 mt-xl-n5">

                        <form action="/login" method="POST" style="width: 100%;">
                            @csrf
                            <h3 class="fw-bold mb-3 pb-3 text-center" style="letter-spacing: 1px;">MASUK</h3>

                            @if (session()->has('informasi'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                    </svg>
                                    {{ session('informasi') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-exclamation-triangle mb-1" viewBox="0 0 16 16">
                                        <path
                                            d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                                        <path
                                            d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                                    </svg>
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif



                            <div class="form-outline mb-2">

                                <input type="text" name="username"
                                    class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                                    required autofocus value="{{ old('username') }}" />
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-outline mb-3">

                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    required />
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="pt-1 mb-2">
                                <button class="btn btn-info  form-control text-white fw-bold"
                                    type="submit">Masuk</button>
                            </div>


                            {{-- <p class="small mb-5 pb-lg-2 float-end"><a class="text-muted" href="#!">Lupa
                                    password?</a></p> --}}
                            <p class="mt-5">Belum punya akun? <a href="/daftar" class="link-info">Daftar
                                    disini!</a>
                            </p>


                        </form>

                    </div>

                </div>
                <div class="col-sm-1"></div>

            </div>
        </div>
    </section>

    <div id="preloader"></div>

    {{-- Bootstrap --}}
    <script src="/css/bootstrap.min.js"></script>

    <script src="/assetsUser/js/main.js"></script>
</body>

</html>
