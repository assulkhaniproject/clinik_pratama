<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use KeluhanSeeder;

class RekamMedik extends Model
{
    protected $guarded = [];
    protected $table = 'rekam_medik';

    private const STATUS = [
        1 => 'Pemeriksaan Medis', // masuk ke medis
        2 => 'Resep Obat', // masuk ke apoteker
        3 => 'Pembayaran', // masuk ke kasir
        4 => 'Selesai' // menjadi histori rekam medis
    ];

    public function getStatus() 
    {
        return self::STATUS[$this->status];
    }

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'no_identitas', 'id');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'petugas_id');
    }

    public function pemeriksaan()
    {
        return $this->belongsTo(Pemeriksaan::class, 'pemeriksaan_id');
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class, 'rekam_medik_id');
    }
    
    /**
     * Many To Many Eloquent
     * 
     */
    public function obat()
    {
        return $this->belongsToMany(Obat::class, 'rekam_medik_obat', 'rekam_medik_id', 'obat_id');
    }

    public function keluhan()
    {
        return $this->belongsToMany(Keluhan::class, 'rekam_medik_keluhan', 'rekam_medik_id', 'keluhan_id');
    }

    public function tindakan()
    {
        return $this->belongsToMany(Tindakan::class, 'rekam_medik_tindakan', 'rekam_medik_id', 'tindakan_id');
    }
}