<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aboutme extends Model
{
    protected $fillable = [
        'content',
        'image',
    ];

    protected $casts = [
        'image' => 'array',
    ];
}