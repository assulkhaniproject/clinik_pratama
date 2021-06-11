<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $guarded = [];
    protected $table = 'admin';
}
