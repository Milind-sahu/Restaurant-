<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";
    public $timestamps = false;

    protected $fillable = ['ID', 'NAME', 'EMAIL', 'SUBJECT','MESSAGE'];

    protected $primaryKey = "ID";
}
