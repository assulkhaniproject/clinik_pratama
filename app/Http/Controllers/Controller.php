<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Format Tanggal Lengkap Indonesia
     * 
     * @param $date
     */
    protected function dayDateID($date)
    {
        $date = date ("Y-m-d", strtotime($date));
        $bulan = array (
            1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei',
            'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        $hari = date ("D", strtotime($date));
        switch($hari){
            case 'Sun': $hari_ini = "Minggu";break;
            case 'Mon':	$hari_ini = "Senin";break;
            case 'Tue': $hari_ini = "Selasa";break;
            case 'Wed': $hari_ini = "Rabu";break;
            case 'Thu': $hari_ini = "Kamis";break;
            case 'Fri': $hari_ini = "Jumat";break;
            case 'Sat': $hari_ini = "Sabtu";break;
            default: $hari_ini = "Tidak di ketahui"; break;
        }

        $pecahkan = explode('-', $date);
        return $hari_ini . ', ' . $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
}
