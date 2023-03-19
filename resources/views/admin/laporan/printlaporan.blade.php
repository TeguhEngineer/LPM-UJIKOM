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
    <img src="/dist/img/logo-banjar.png" width="90px;" height="90px;" alt="" style="position: absolute; left:30px;">
   
    <h5 align="center" class="fw-bold">DATA LAPORAN PENGADUAN MASYARAKAT</h5>
    <h5 align="center" class="fw-bold">DINAS LINGKUNGAN HIDUP</h5>
    <h5 align="center" class="fw-bold">KOTA BANJAR</h5>
    <hr class="text-dark border-1 border-dark my-0">
    <hr class="text-dark border-3 border-dark mt-1 mb-0">
    <hr class="text-dark border-1 border-dark mt-1">
  
    <table align="center" class="table mt-4 table-head-fixed table table-bordered text-nowrap" style="max-width: 95%;">
        <thead>
            <tr>
                <th class="text-center bg-light">No</th>
                <th class="text-center bg-light">Tanggal</th>
                <th class="text-center bg-light">Kategori</th>
                <th class="text-center bg-light">Isi Pengaduan</th>
                <th class="text-center bg-light">Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($laporan as $item)
                <tr>
                    <td class="text-center"><b>{{ $loop->iteration }}</b></td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->jenis_pengaduan->jenis_pengaduan }}</td>
                    <td>{{ $item->isi_laporan }}</td>
                    <td class="text-center">
                        {{ $item->status }}
                      

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
