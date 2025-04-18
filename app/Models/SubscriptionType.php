<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SubscriptionType extends Model
{
    protected $fillable = [
        'name',
        'description',
        'duration_type',
        'duration_value',
        'is_limited_sessions',
        'sessions_count',
        'sessions_validity_days',
        'price',
        'is_active'
    ];

    protected $casts = [
        'is_limited_sessions' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'float'
    ];

    public function clubs(): BelongsToMany
    {
        return $this->belongsToMany(Club::class, 'club_subscription_types')
            ->withPivot('price', 'is_active')
            ->withTimestamps();
    }
}