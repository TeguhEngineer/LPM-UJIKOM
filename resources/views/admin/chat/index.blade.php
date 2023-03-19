@extends('master.kerangkaAdmin')
@section('container')
    <div class="content-wrapper">
        {{-- Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-primary" href="/chat-masuk">Chat Masuk</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- /header --}}

        <div class="content">
            <div class="container-fluid">
                @if ($messages->isEmpty())
                    <h1 align="center" class="mt-5">Belum memiliki chat masuk</h1>
                @else
                    @foreach ($messages as $item)
                        <a href="/chat/{{ $item->masyarakat->id }}/{{ $item->kode_chat }}" style="text-decoration: none">
                            <div class="card mb-1">
                                <div class="card-body rounded border border-dark bg-light text-dark">
                                    <div class="mt-3">
                                        <img src="/dist/img/petugas.png" class="me-1" alt="" srcset=""
                                            width="40" height="40">
                                        <span>
                                            {{ $item->masyarakat->nama }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif

            </div>
        </div>
    </div>
@endsection
