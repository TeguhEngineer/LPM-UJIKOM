<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (auth()->user()->role == "admin")
    <title class="fw-bold">LPM | ADMIN</title>
    @elseif (auth()->user()->role == "petugas")
    <title class="fw-bold">LPM | PETUGAS</title>
    @endif
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/dist/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    {{-- Style css --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/chat.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        {{-- Loading --}}
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>
        {{-- /loading --}}

        {{-- Modal --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fw-bold">Konfirmasi</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Apakah anda yakin ingin keluar ?</h5>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <a href=" {{ Route('logout') }}">
                            <button type="button" class="btn btn-primary">Keluar</button>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        {{-- Tutup modal --}}

        <!-- Navbar -->
        @include('partials.navbar')
        <!-- /Navbar -->

        <!-- Main Sidebar Container -->
        @include('partials.menukiri')
        {{-- /Sidebar --}}

        <!-- Content Wrapper. Contains page content -->
        @yield('container')
        <!-- /Content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                by: Teguh Afriansyah
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2023
        </footer>
    </div>
    <!-- ./wrapper -->

  
    {{-- Darkmode --}}
    <script>
        function ubahMode() {
            const ubah = document.body;
            ubah.classList.toggle("dark-mode");
        }
    </script>

    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->



    <script src="/dist/js/adminlte.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
