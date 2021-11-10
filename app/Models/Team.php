<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $guarded = ["id"];

    public function kemampuans()
    {
        return $this->hasMany(Kemampuan::class,'id_team','id');
    }
}
