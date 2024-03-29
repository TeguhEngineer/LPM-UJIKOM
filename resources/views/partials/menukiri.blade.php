<aside id="sidebar-kiri" class="main-sidebar elevation-4 border-none bg-light">
    <!-- Brand Logo -->
    <a class="brand-link border-bottom">

        @if (auth()->user()->role == 'admin')
            <img src="/dist/img/admin.png" alt="Profile" class="brand-image img-circle elevation-3" style="opacity: .8">
        @elseif (auth()->user()->role == 'petugas')
            <img src="/dist/img/petugas.png" alt="Profile" class="brand-image img-circle elevation-3" style="opacity: .8">
        @endif

        @if (auth()->user()->role == 'admin')
            <span class="brand-text fw-bold mx-2 text-primary">ADMIN
            @elseif (auth()->user()->role == 'petugas')
                <span class="brand-text fw-bold mx-2 text-primary">PETUGAS
        @endif

        </span>
    </a>

    <!-- Sidebar kiri-->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @if (auth()->user()->role == "admin")  
                <li class="nav-item ">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas ">
                            <i class="bi bi-speedometer2"></i>
                        </i>
                        <p class="nav-active">
                            Dashboard

                        </p>
                    </a>
                </li>
                @endif
              

                @if (auth()->user()->role == "admin")  
                <li class="nav-item ">
                    <a href="/kategori" class="nav-link {{ Request::is('kategori*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas ">
                            <i class="bi bi-list-ul"></i>
                        </i>
                        <p class="nav-active">
                            Kategori

                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role == "petugas")
                <li class="nav-header text-sm text-secondary">Pengaduan</li>
                    
                <li class="nav-item">
                    <a href="/pengaduan" class="nav-link {{ Request::is('pengaduan*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-envelope"></i>
                        </i>
                        <p class="nav-active">
                            Kotak Masuk

                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role == "admin")
                <li class="nav-header text-sm text-secondary">Pengaduan</li>
                    
                <li class="nav-item">
                    <a href="/pengaduan" class="nav-link {{ Request::is('pengaduan*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-envelope"></i>
                        </i>
                        <p class="nav-active">
                            Kotak Masuk

                        </p>
                    </a>
                </li>
                @endif
                
                @if (auth()->user()->role == "petugas")
                <li class="nav-item">
                    <a href="/tanggapan" class="nav-link {{ Request::is('tanggapan*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-chat-square-text"></i>
                        </i>
                        <p class="nav-active">
                            Tindaklanjut
                        </p>
                    </a>
                </li>
                @endif

                @if (auth()->user()->role == "admin")
                <li class="nav-item">
                    <a href="/tanggapan" class="nav-link {{ Request::is('tanggapan*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-chat-square-text"></i>
                        </i>
                        <p class="nav-active">
                            Tindaklanjut
                        </p>
                    </a>
                </li>
                @endif

                @if (auth()->user()->role == "admin")
                <li class="nav-header text-sm text-secondary">Chat Masuk</li>
                <li class="nav-item ">
                    <a href="/chat-masuk" class="nav-link {{ Request::is('view-chat*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-chat-dots"></i>
                        </i>
                        <p class="nav-active">
                            Chat Masuk

                        </p>
                    </a>
                </li>
                @endif

                @if (auth()->user()->role == "admin")
                <li class="nav-header text-sm text-secondary">Data</li>
                <li class="nav-item ">
                    <a href="/datamasyarakat" class="nav-link {{ Request::is('datamasyarakat*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-people"></i>
                        </i>
                        <p class="nav-active">
                            Data Masyarakat

                        </p>
                    </a>
                </li>
                @endif
                
                @if (auth()->user()->role == "admin")
                <li class="nav-item ">
                    <a href="/datapetugas" class="nav-link {{ Request::is('datapetugas*') ? 'active' : '' }}"
                        id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-person"></i>
                        </i>
                        <p class="nav-active">
                            Data Petugas

                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role == "admin")
                <li class="nav-header text-sm text-secondary"> Laporan</li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link {{ Request::is('laporan*') ? 'active' : '' }}" id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-journal-text"></i>
                        </i>
                        <p class="nav-active">
                            Laporan

                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role == "admin")
                <li class="nav-header text-sm text-secondary">Profle</li>
                <li class="nav-item">
                    <a href="/profile/{{ auth()->user()->id }}/edit"
                        class="nav-link {{ Request::is('profile*') ? 'active' : '' }}" id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-person-circle"></i>
                        </i>
                        <p class="nav-active">
                            Profile

                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role == "petugas")
                <li class="nav-header text-sm text-secondary">Profle</li>
                <li class="nav-item">
                    <a href="/profile/{{ auth()->user()->id }}/edit"
                        class="nav-link {{ Request::is('profile*') ? 'active' : '' }}" id="sidebar-menu">
                        <i class="nav-icon fas">
                            <i class="bi bi-person-circle"></i>
                        </i>
                        <p class="nav-active">
                            Profile

                        </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
