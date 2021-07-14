<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $guarded = [];
    protected $table = 'tindakan';
    public $timestamps = false;

    public function rekamMedik()
    {
        return $this->belongsToMany(RekamMedik::class, 'rekam_medik_tindakan', 'tindakan_id', 'rekam_medik_id');
    }
}
