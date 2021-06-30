<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $guarded = [];
    protected $primaryKey  = 'nim';
    protected $table = 'mahasiswa';
}
