<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    protected $guarded = [];
    protected $table = 'keluhan';
    public $timestamps = false;

    public function rekamMedik()
    {
        return $this->belongsToMany(RekamMedik::class, 'rekam_medik_keluhan', 'keluhan_id', 'rekam_medik_id');
    }
}
