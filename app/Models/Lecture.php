<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'nama',
        'nidn',
        'pendidikan',
        'jabatan',
        'email',
        'topik',
        'image',
    ];
}