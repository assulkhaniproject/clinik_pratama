<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class RekamMedik extends Model
{
    protected $guarded = [];
    protected $table = 'pasien';
 
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'no_identitas', 'id');
    }
    
}