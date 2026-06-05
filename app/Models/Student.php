<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'namalengkap',
        'namapanggilan',
        'email',
        'nomor_hp',
        'jalur',
        'image',
        'programstudi_1',
        'programstudi_2',
    ];
}