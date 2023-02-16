@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {{-- Isi content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6 ">

                        <div class="small-box bg-info shadow">
                            <div class="inner">
                                <h3>{{ $countPengaduan }}</h3>
                                <p>Pengaduan</p>
                            </div>
                            <div class="icon ">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <a href="/pengaduan" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-success shadow">
                            <div class="inner">
                                <h3>{{ $countTanggapan }}</h3>
                                <p>Tanggapan</p>
                            </div>
                            <div class="icon ">
                                <i class="fas fa-comment"></i>
                            </div>
                            <a href="/tanggapan" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-warning shadow">
                            <div class="inner">
                                <h3>{{ $countMasyarakat }}</h3>
                                <p>Data Masyarakat</p>
                            </div>
                            <div class="icon">

                                <i class="fas fa-users"></i>
                            </div>
                            <a href="/datamasyarakat" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">

                        <div class="small-box bg-warning shadow">
                            <div class="inner">
                                <h3>{{ $countPetugas }}</h3>
                                <p>Data Petugas</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <a href="/datapetugas" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>

                {{-- Tabs --}}
                <div class="row mt-3">
                    <div class="col-12 col-lg-12">
                        <div class="card card-secondary card-outline card-outline-tabs shadow">
                            <div class="card-header p-0 border-bottom-0">
                                <h2 class="text-center fw-bold py-2">PROGRES PENGADUAN</h2>
                                <ul class="nav nav-tabs nav-fill" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active text-primary" id="custom-tabs-four-home-tab"
                                            data-toggle="pill" href="#custom-tabs-four-home" role="tab"
                                            aria-controls="custom-tabs-four-home" aria-selected="true">Ditinjau
                                            ({{ $countPengaduanditinjau }})</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-warning" id="custom-tabs-four-profile-tab"
                                            data-toggle="pill" href="#custom-tabs-four-profile" role="tab"
                                            aria-controls="custom-tabs-four-profile" aria-selected="false">Diproses
                                            ({{ $countPengaduandiproses }})</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-success" id="custom-tabs-four-messages-tab"
                                            data-toggle="pill" href="#custom-tabs-four-messages" role="tab"
                                            aria-controls="custom-tabs-four-messages" aria-selected="false">Selesai
                                            ({{ $countPengaduanselesai }})</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-home-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                    <th scope="col">No</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Jenis Pengaduan</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                @foreach ($ditinjau as $tinjau)
                                                    <tr>

                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $tinjau->created_at }}</td>
                                                        <td>{{ $tinjau->users->email }}</td>
                                                        <td>{{ $tinjau->jenis_pengaduan->jenis_pengaduan }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                    <th scope="col">No</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Jenis Pengaduan</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                @foreach ($diproses as $proses)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $proses->created_at }}</td>
                                                        <td>{{ $proses->users->email }}</td>
                                                        <td>{{ $proses->jenis_pengaduan->jenis_pengaduan }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-messages-tab">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                    <th scope="col">No</th>
                                                    <th scope="col">Tanggal Pengaduan</th>
                                                    <th scope="col">Tanggal Tanggapan</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Jenis Pengaduan</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                @foreach ($pengaduanselesai as $selesai)
                                                    <tr>

                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $selesai->pengaduan->created_at }}</td>
                                                        <td>{{ $selesai->created_at }}</td>
                                                        <td>{{ $selesai->pengaduan->users->email }}</td>
                                                        <td>{{ $selesai->pengaduan->jenis_pengaduan->jenis_pengaduan }}
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- /Tabs --}}
        </div>
    </div>
    </div>
@endsection
