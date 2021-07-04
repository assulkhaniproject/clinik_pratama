<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $guarded = [];
    protected $table = 'obat';

    public function rekamMedik()
    {
        return $this->belongsToMany(RekamMedik::class, 'rekam_medik_obat', 'obat_id', 'rekam_medik_id');
    }
}
