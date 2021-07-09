<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RekamMedik extends Model
{
    protected $guarded = [];
    protected $table = 'rekam_medik';
 
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

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class, 'rekam_medik_id');
    }
    
}