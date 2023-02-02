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
    <link rel="stylesheet" href="formLoginUserrUser/style.css">
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

                <div class="col-sm-4 my-auto">

                    {{-- <div class="px-5 ms-xl-4">
                        <span class="h1 fw-bold">DAFTAR</span>
                    </div> --}}

                    <div class="d-flex align-items-center h-custom-2 mt-0 pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 100%;">

                            <h3 class="fw-bold mb-3 pb-3 text-center" style="letter-spacing: 1px;">MASUK</h3>


                            <div class="form-outline mb-2">
                                {{-- <label class="form-label" for="form2Example19">NIK</label> --}}
                                <input type="text" id="form2Example19" class="form-control "
                                    placeholder="Username" />

                            </div>

                            <div class="form-outline mb-3">
                                {{-- <label class="form-label" for="form2Example28">Password</label> --}}
                                <input type="password" id="form2Example28" class="form-control "
                                    placeholder="Password" />
                            </div>

                            <div class="pt-1 mb-2">
                                <button class="btn btn-info btn-sm form-control text-white fw-bold"
                                    type="button">Masuk</button>
                            </div>

                            <p class="small mb-5 pb-lg-2 float-end"><a class="text-muted" href="#!">Lupa
                                    password?</a></p>
                            <p class="mt-5">Belum punya akun? <a href="#!" class="link-info">Daftar disini!</a>
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

    <script src=" assetsUser/js/main.js"></script>
</body>

</html>
