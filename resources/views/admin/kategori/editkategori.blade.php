@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        {{-- Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="/kategori">Kategori</a></li>
                            <li class="breadcrumb-item"><a href="#">Edit Kategori</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- /header --}}


        {{-- Isi Content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="bi bi-list-ul"></i> Edit Kategori</h3>
                            </div>
                            <form action="/kategori/{{ $editkategori->id }}" method="POST" class="form-horizontal">
                                @method('PUT')
                                @csrf
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="inputNama" class="col-sm-2 col-form-label">Kategori</label>
                                        <div class="col-sm-10">
                                            <input type="text"
                                                class="form-control @error('jenis_pengaduan') is-invalid @enderror"
                                                id="inputNama" name="jenis_pengaduan" placeholder="Kategori" required
                                                value="{{ $editkategori->jenis_pengaduan }}">
                                            @error('jenis_pengaduan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="/kategori">
                                        <button type="button" class="btn btn-default">Kembali</button>
                                    </a>
                                    <button type="submit" name="simpan" class="btn btn-primary float-end">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
