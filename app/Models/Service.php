<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
        'club_id'
    ];

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }
}