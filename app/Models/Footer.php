<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'image',
        'link_instagram',
        'link_youtube',
        'link_linkedin',
        'link_facebook',
        'alamat',
        'email',
        'wa',
        'link_gmaps',
    ];
}