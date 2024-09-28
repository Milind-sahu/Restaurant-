<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    protected $table = "userdetail";
    public $timestamps = false;

    protected $fillable = ['USER_ID','NAME', 'EMAIL', 'NUMBER', 'PASSWORD',];

    protected $primaryKey = "USER_ID";
}
