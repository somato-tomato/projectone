<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $guarded = ["id"];

    public function package_bodies()
    {
        return $this->hasMany(PackageBody::class,'id_package','id');
    }
}
