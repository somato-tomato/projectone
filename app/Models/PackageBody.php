<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBody extends Model
{
    use HasFactory;
    protected $table = 'package_bodies';
    protected $guarded = ["id"];

}
