<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = "employee";
    public $timestamps = false;

    protected $fillable = ['EMP_ID', 'NAME', 'POSITION', 'AGE', 'GENDER','SALARY', 'MOBNUM','JOIN_DATE'];

    protected $primaryKey = "EMP_ID";
}
