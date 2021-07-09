<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $guarded = [];
    protected $table = 'dokter';

    public function rekamMedik()
    {
        return $this->hasMany(RekamMedik::class, 'dokter_id');
    }
}