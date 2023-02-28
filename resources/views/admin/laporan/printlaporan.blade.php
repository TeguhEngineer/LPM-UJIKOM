<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CETAK LAPORAN PENGADUAN</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body style="font-family: 'Times New Roman','Times', serif" class="pt-5">
    <h5 align="center" class="fw-bold">DATA LAPORAN PENGADUAN MASYARAKAT</h5>
    <h5 align="center" class="fw-bold">DINAS LINGKUNGAN HIDUP</h5>
    <h5 align="center" class="fw-bold">KOTA BANJAR</h5>
    {{-- <table class="static" align="center" rules="all" border="1px;" style=" 95%;"> --}}
    <table align="center" class="table mt-4 table-head-fixed table table-bordered text-nowrap" style="max-width: 95%;">
        <thead>
            <tr>
                <th class="text-center bg-light">No</th>
                <th class="text-center bg-light">Tanggal</th>
                <th class="text-center bg-light">Jenis Pengaduan</th>
                <th class="text-center bg-light">Isi Pengaduan</th>
                <th class="text-center bg-light">Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($laporan as $item)
                <tr>
                    <td><b>{{ $loop->iteration }}</b></td>
                    <td>{{ $item->tanggal_pengaduan }}</td>
                    <td>{{ $item->jenis_pengaduan->jenis_pengaduan }}</td>
                    <td>{{ $item->isi_laporan }}</td>
                    <td class="text-center">
                        @if ($item->status == 'ditinjau')
                            <span class="badge rounded-pill text-bg-primary py-2  fw-bold"
                                style="width: 70px;">{{ $item->status }}</span>
                        @elseif ($item->status == 'proses')
                            <span class="badge rounded-pill text-bg-warning py-2  fw-bold text-light"
                                style="width: 70px;">{{ $item->status }}</span>
                        @elseif ($item->status == 'selesai')
                            <span class="badge rounded-pill text-bg-success py-2 fw-bold"
                                style="width: 70px;">{{ $item->status }}</span>
                        @endif

                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
