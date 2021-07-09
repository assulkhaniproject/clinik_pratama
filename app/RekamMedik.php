<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RekamMedik extends Model
{
    protected $guarded = [];
    protected $table = 'rekam_medik';
    public const JENIS_PEMERIKSAAN = [
        'Pemeriksaan Umum',
        'Medikasi Ringan',
        'Medikasi Sedang',
        'Medikasi Berat',
        'KB PIl',
        'KB Suntik 1 bulan',
        'KB Suntik 2 bulan',
        'KB Pasang & Lepas Implant',
        'KB Padang & Lepas IUD',
        'Pemeriksaan LAB. Gula Darah',
        'Pemeriksaan LAB. Asam Urat',
        'Pemeriksaan LAB. Kolestrol',
        'Pemeriksaan LAB. HB',
        'Rapid Antibody',
        'Rapid Antigen',
    ];
 
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'no_identitas', 'id');
    }

    public function obat()
    {
        return $this->belongsToMany(Obat::class, 'rekam_medik_obat', 'rekam_medik_id', 'obat_id');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'dokter_id');
    }

    public function pemeriksaan()
    {
        return $this->belongsTo(Pemeriksaan::class, 'pemeriksaan_id');
    }
    
}