<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedrequest extends Model
{
    use HasFactory;
    protected $table = 'feedrequests';
    protected $guarded = ["id"];

}
