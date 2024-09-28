<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $table = "stats";
    public $timestamps = false;

    protected $fillable = ['DATE','SALES', 'REVENUE', 'CUSTOMERS'];

    // protected $primaryKey = "DATE";
}
