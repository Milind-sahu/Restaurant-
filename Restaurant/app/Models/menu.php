<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table = "menu";
    public $timestamps = false;
    // protected $fillable = ['ID', 'NAME', 'PRICE', 'DESCRIPTION', 'CATEGORY', 'IMAGE'];
    protected $fillable = ['ID', 'NAME', 'PRICE', 'DESCRIPTION', 'CATEGORY'];
    protected $primaryKey = "ID";

}
