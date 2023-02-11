@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Pengaduan Masuk</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {{-- Isi Content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    {{-- Tanggapan --}}
                    <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Tanggapan</h3>
                            </div>
                            <form>
                                <div class="card-body">
                                    <div class="form-group">

                                        <label for="exampleInputEmail1">Penanggap</label>

                                        <input type="text" class="form-control"
                                            value="{{ $lihattanggapan->users->nama }}" id="exampleInputEmail1" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal tanggapan:</label>
                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="datetime-local" value="{{ $lihattanggapan->created_at }}"
                                                class="form-control datetimepicker-input" disabled />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Isi tanggapan</label>
                                        <textarea class="form-control" rows="5" disabled>{{ $lihattanggapan->isi_tanggapan }}</textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
