<aside id="sidebar-kiri" class="main-sidebar elevation-4 border-none bg-light">
    <!-- Brand Logo -->
    <a class="brand-link border-bottom">
        <img src="/dist/img/AdminLTELogo.png" alt="Logo cafe" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text fw-bold mx-2 text-primary">ADMIN
            {{-- <hr class="p-0 mb-0 border border-white border-2 opacity-50"> --}}
        </span>
    </a>


    <!-- Sidebar kiri-->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item ">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas ">
                            <i class="bi bi-speedometer2"></i>
                        </i>
                        <p class="">
                            Dashboard
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pengaduan" class="nav-link {{ Request::is('pengaduan*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-megaphone"></i>
                        </i>
                        <p class="nav-active">
                            Pengaduan
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/tanggapan" class="nav-link {{ Request::is('tanggapan*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-chat-left-text"></i>
                        </i>
                        <p class="nav-active">
                            Tanggapan
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/datamasyarakat" class="nav-link {{ Request::is('datamasyarakat*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-people"></i>
                        </i>
                        <p class="nav-active">
                            Data Masyarakat
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/datapetugas" class="nav-link {{ Request::is('datapetugas*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-person"></i>
                        </i>
                        <p class="nav-active">
                            Data Petugas
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link {{ Request::is('laporan*') ? 'active' : '' }}" id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-journal-text"></i>
                        </i>
                        <p class="nav-active">
                            Laporan
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
