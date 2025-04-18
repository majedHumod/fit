<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TargetGroup extends Model
{
    protected $fillable = [
        'type',
        'min_age',
        'max_age',
        'club_id'
    ];

    public function club(): BelongsTo
    {
        return $this->belongsTo(Club::class);
    }
}