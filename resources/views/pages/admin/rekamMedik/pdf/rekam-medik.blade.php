<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekam Medik</title>
    <style>
        @page { size: 21cm 33cm portrait; }
        @page { margin: 1.5cm 1.5cm 1.5cm 1.5cm; }
    </style>
</head>
<body>
    <p>
        <img width="111" height="111" src="{{public_path()}}/admin/images/icon.png" align="left" hspace="12"/>
        <strong style="font-size: 18px; margin:0 0 0 20px">Klinik Pratama Harapan Bersama</strong>
    </p>
    <p>
        <strong style="font-size: 32px; margin:0 0 0 20px">Politeknik Harapan Bersama</strong>
    </p>
    <p>
        <strong style="font-size: 16px; margin:0 0 0 20px">Jalan Mataram No. 9 Pesurungan Lor, Kota Tegal</strong>
    </p>

    <hr>

    <table>
        <tbody>
            <tr>
                <td height="25" width="120">Tanggal Periksa</td>
                <td>:</td>
                <td>{{$tgl_periksa}}</td>
            </tr>
            <tr>
                <td height="25" width="120">No. RM</td>
                <td>:</td>
                <td>{{$rekamMedik->no_rekam_medik}}</td>
            </tr>
            <tr>
                <td height="25" width="120">Nama Pasien :</td>
                <td>:</td>
                <td>{{$rekamMedik->pasien->nama}}</td>
            </tr>
            <tr>
                <td height="25" width="120">Usia :</td>
                <td>:</td>
                <td>{{$rekamMedik->pasien->usia}} Tahun</td>
            </tr>
            <tr>
                <td height="25" width="120">No Handphone :</td>
                <td>:</td>
                <td>{{$rekamMedik->pasien->no_hp}}</td>
            </tr>
            <tr>
                <td height="25" width="120">Jenis Pemeriksaan :</td>
                <td>:</td>
                <td>{{$rekamMedik->pemeriksaan->jenis_pemeriksaan}}</td>
            </tr>
        </tbody>
    </table>

    <table border="1" cellspacing="0" cellpadding="0" width="100%" height="100%">
        <tbody>
            <tr>
                <td width="30">
                    <p align="center">
                        No.
                    </p>
                </td>
                <td>
                    <p align="center">
                        Keluhan
                    </p>
                </td>
                <td>
                    <p align="center">
                        Tindakan
                    </p>
                </td>
                <td>
                    <p align="center">
                        Resep Obat
                    </p>
                </td>
            </tr>
            <tr>
                <td height="60%">
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
        </tbody>
    </table>

    <table border="1" cellspacing="0" cellpadding="0" width="100%" height="100%">
        <tbody>
            <tr>
                <td width="30">
                    <p align="center">
                        No.
                    </p>
                </td>
                <td>
                    <p align="center">
                        Keluhan
                    </p>
                </td>
                <td>
                    <p align="center">
                        Tindakan
                    </p>
                </td>
                <td>
                    <p align="center">
                        Resep Obat
                    </p>
                </td>
            </tr>
            <tr>
                <td height="93%">
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>