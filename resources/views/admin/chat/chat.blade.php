@extends('master.kerangkaAdmin')
@section('container')
<div class="content-wrapper">
    {{-- Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-dark" href="/chat-masuk">Chat Masuk</a></li>
                        <li class="breadcrumb-item"><a href="#">Balas Chat</a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- /header --}}

    <div class="content">
        <div class="container-fluid">
            <div class="card border border-dark">
                <div class="row g-0">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="py-2 px-4 border-bottom d-lg-block">
                            <div class="d-flex align-items-center py-1">
                                <div class="position-relative me-2">
                                    <img src="/dist/img/petugas.png" class="rounded-circle mr-1"
                                        width="40" height="40">
                                </div>
                                <div class="flex-grow-1 pl-3">
                                    <strong>{{ $dataSender->masyarakat->nama }}</strong>
                                  
                                </div>
                                <div>
                                    <a href="/chat-masuk" class="btn btn-outline-primary"><i
                                            class="fas fa-backward"></i></a>
                                </div>
                            </div>
                        </div>
        
                        <div class="position-relative">
                            <div class="chat-messages p-4">
                                @foreach ($chats as $item)
                                    @if ($item->role == 'admin')
                                        <div class="chat-message-right pb-4">
                                            <div>
                                                <img src="/dist/img/admin.png"
                                                    class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">
                                                    {{ $item->created_at->format('h:i A') }}</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 me-2 px-3 mr-3 border border-dark">
                                                <div class="font-weight-bold mb-1"><b>Anda</b></div>
                                                <p>{{ $item->pesan }}</p>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($item->role == 'masyarakat')
                                        <div class="chat-message-left pb-4">
                                            <div>
                                                <img src="/dist/img/petugas.png"
                                                    class="rounded-circle mr-1" alt="" width="40" height="40">
                                                <div class="text-muted small text-nowrap mt-2">
                                                    {{ $item->created_at->format('h:i A') }}</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 ms-2 px-3 ml-3 border border-dark">
                                                <div class="font-weight-bold mb-1"><b>{{ $item->masyarakat->nama }}</b></div>
                                                <p>{{ $item->pesan }}</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
        
                        <div class="flex-grow-0 py-3 px-4 border-top">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="pesan" class="form-control border border-dark"
                                        placeholder="Type your message" autocomplete="off">
                                    <input type="hidden" name="id_user" value="{{ $dataSender->masyarakat->id }}">
                                    <input type="hidden" name="id_pegawai" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="kode_chat" value="{{ $dataSender->kode_chat }}">
                                    <input type="hidden" name="role" value="admin">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
        
                    </div>
                </div>
                <script>
                    $(document).on('click', '.delete', function(e) {
                        e.preventDefault();
                        var id = $(this).data('id');
                        var url = $(this).attr('href');
        
                        Swal.fire({
                            title: 'Apakah Anda yakin?',
                            text: "Chat yang dihapus tidak dapat dikembalikan!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Hapus'
                        }).then((result) => {
                            if (result.value) {
                                $.ajax({
                                    type: 'delete',
                                    url: url,
                                    data: {
                                        "_token": "{{ csrf_token() }}",
                                        "id": id,
                                    },
                                    success: function(data) {
                                        Swal.fire(
                                            'Deleted!',
                                            'Data telah dihapus.',
                                            'success'
                                        );
                                        location.reload();
                                    }
                                });
                            }
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</div>
@endsection