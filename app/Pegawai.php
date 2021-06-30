<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $guarded = [];
    protected $primaryKey  = 'nipy';
    protected $table = 'pegawai';
}
