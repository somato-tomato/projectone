<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemampuan extends Model
{

    use HasFactory;
    protected $table = 'kemampuans';
    protected $guarded = ["id"];
}


