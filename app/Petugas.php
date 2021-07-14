<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $guarded = [];
    protected $table = 'petugas';

    public function rekamMedik()
    {
        return $this->hasMany(RekamMedik::class, 'petugas_id');
    }
}
