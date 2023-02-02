<nav id="nav-atas" class="main-header navbar navbar-expand  shadow p-2  border border-0 sticky-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <div class="nav-item dropdown">
                {{-- <a class="nav-link dropdown-toggle fw-bold" id="navbarDropdown2" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-person-fill"></i> Teguh Afriansyah
                </a> --}}

                <ul class="dropdown-menu px-3">
                    <li id="nav-manager"><a class="dropdown-item text-center fw-bold disabled">
                            ADMIN
                        </a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">
                            <i class="bi bi-key"></i>

                            Reset Password</a></li>
                    <li><a class="dropdown-item" href="#">
                            <i class="bi bi-power"></i>

                            Log Out</a></li>
                </ul>
            </div>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        {{-- <li class="nav-item">
            <a class="nav-link" id="nav-search" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li> --}}

        {{-- dark mode --}}
        <li class="nav-item d-none d-sm-inline-block">
        <li class="nav-item">
            <label class="switch me-2" id="button">
                <input type="checkbox" onclick="ubahMode()">
                <span class="slider"></span>
            </label>
        </li>
        </li>

        {{-- full screen --}}
        <li class="nav-item" id="nav-full">
            <a class="nav-link fw-dark" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

        {{-- sidebar kanan --}}
        <li class="nav-item" id="nav-sidebar">
            <a class="nav-link fw-dark" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-user"></i>
            </a>
        </li>
    </ul>
</nav>

<aside class="control-sidebar control-sidebar-light border-none">
    <!-- Control sidebar content goes here -->
    <div class="row">
        <div class="col-sm-12 text-center mt-4">
            <a>
                <img src="dist/img/AdminLTELogo.png" alt="Logo cafe" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
            </a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12 text-center">
            <h4 class="fw-bold">Teguh Afriansyah</h4>
        </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-sm-10">
            <a href="">
                <button class="btn btn-outline-primary btn-sm form-control rounded-3 mt-3">Ubah data</button>
            </a>
            <a href="">
                <button class="btn btn-outline-warning btn-sm form-control rounded-3 mt-3">Ubah Password</button>
            </a>
            <a href="">
                <button class="btn btn-outline-danger btn-sm form-control rounded-3 mt-3">Keluar</button>
            </a>
        </div>
    </div> --}}
    <nav>
        <ul class="nav nav-pills nav-sidebar flex-column">
            <li class="nav-item mx-3">
                <a href="/dashboard" class="nav-link" id="sidebar-kanan">
                    <i class="nav-icon fas ">
                        <i class="bi bi-pencil-square"></i>
                    </i>
                    <p class="">
                        Ubah data admin
                    </p>
                </a>
            </li>
            <li class="nav-item mx-3">
                <a href="/dashboard" class="nav-link" id="sidebar-kanan">
                    <i class="nav-icon fas ">
                        <i class="bi bi-key"></i>
                    </i>
                    <p class="">
                        Ubah password
                    </p>
                </a>
            </li>
            <li class="nav-item mx-3">
                <a href="/dashboard" class="nav-link" id="sidebar-kanan">
                    <i class="nav-icon fas ">
                        <i class="bi bi-box-arrow-right"></i>
                    </i>
                    <p class="">
                        Keluar

                    </p>
                </a>
            </li>
        </ul>
    </nav>
</aside>
