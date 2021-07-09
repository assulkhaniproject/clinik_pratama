<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $guarded = [];
    protected $table = 'transaksi';

    public function rekamMedik()
    {
        return $this->belongsTo(RekamMedik::class, 'rekam_medik_id');
    }
}
