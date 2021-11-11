<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'sectionName', 'sectionTitle', 'sectionDescription', 'sectionImage'
    ];
}
