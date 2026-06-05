<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visimisi extends Model
{
    protected $fillable = [
        'visi',
        'misi',
        'image',
    ];

    protected $casts = [
        'image' => 'array',
    ];
}