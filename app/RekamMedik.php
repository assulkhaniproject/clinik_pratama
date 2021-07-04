<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RekamMedik extends Model
{
    protected $guarded = [];
    protected $table = 'rekam_medik';
    public const JENIS_PEMERIKSAAN = [
        'Tes Darah',
        'Cek Berat Badan',
        'Blabla',
        'Wkwkwk',
    ];
 
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'no_identitas', 'id');
    }

    public function obat()
    {
        return $this->belongsToMany(Obat::class, 'rekam_medik_obat', 'rekam_medik_id', 'obat_id');
    }
    
}