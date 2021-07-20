<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $guarded = [];
    protected $primaryKey  = 'key';
    public $timestamps = false;
    protected $table = 'pengaturan';
}
