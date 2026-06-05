<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Announcement extends Model
{
    protected $fillable = [
        'title',
        'content',
        'users_id',
        'slug',
    ];

    /**
     * Relasi: Announcement ini dimiliki oleh (dibuat oleh) satu User.
     * belongsTo = "satu announcement milik satu user"
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}