<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    protected $guarded = [];
    protected $table = 'pemeriksaan';

    public function rekamMedik()
    {
        return $this->hasMany(RekamMedik::class, 'pemeriksaan_id');
    }
}
