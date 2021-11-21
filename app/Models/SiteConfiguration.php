<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfiguration extends Model
{
    use HasFactory;

    protected $fillable = [
        'siteName', 'siteDescription', 'siteLogo', 'siteFavicon', 'instagram', 'facebook', 'youtube', 'alamat', 'telponSatu', 'telponDua', 'email'
    ];
}
