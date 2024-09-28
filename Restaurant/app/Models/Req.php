<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Req extends Model
{
    protected $table = "request";
    public $timestamps = false;

    protected $fillable = ['REQ_ID', 'NAME', 'EMAIL', 'NUMBER', 'DATEOF','TIME', 'PERSON','MESSAGE'];

    protected $primaryKey = "EMP_ID";
}
