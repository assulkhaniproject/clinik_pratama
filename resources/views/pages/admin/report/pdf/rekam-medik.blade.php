<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Rekam Medik</title>
    <style>
        @page { size: 21cm 33cm portrait; }
        @page { margin: 1.5cm 1.5cm 1.5cm 1.5cm; }
    </style>
</head>
<body>
    <p>
        <img width="106" height="111" src="{{public_path()}}/admin/images/icon.png" align="left" hspace="12"/>
        <strong style="font-size: 18px; margin:0 0 0 20px">Klinik Pratama Harapan Bersama</strong>
    </p>
    <p>
        <strong style="font-size: 32px; margin:0 0 0 20px">Politeknik Harapan Bersama</strong>
    </p>
    <p>
        <strong style="font-size: 16px; margin:0 0 0 20px">Jalan Mataram No. 9 Pesurungan Lor, Kota Tegal</strong>
    </p>

    <hr>

    <center>
        <h3>Report Rekam Medik</h3>
        <p>Dari Tanggal : {{date('d-m-Y', strtotime($request->dari_tanggal))}} ke {{date('d-m-Y', strtotime($request->ke_tanggal))}}</p>
    </center>
    
    <p>Jumlah Rekam Medik : {{$filterRekam->count()}}</p>

    <table border="1" cellspacing="0" cellpadding="0" width="100%" height="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>No Rekam Medik</th>
                <th>Nama Pasien</th>
                <th>Tanggal Priksa</th>
                <th>Jenis Periksa</th>
                <th>Nama Dokter</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($filterRekam as $item)
            <tr>
                <td style="text-align: center">{{$no++}}</td>
                <td style="text-align: center">{{$item->no_rekam_medik}}</td>
                <td style="text-align: center">{{$item->pasien->nama}}</td>
                <td style="text-align: center">{{$item->tanggal_periksa}}</td>
                <td style="text-align: center">{{$item->pemeriksaan->jenis_pemeriksaan}}</td>
                <td style="text-align: center">{{$item->dokter->nama_dokter}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>