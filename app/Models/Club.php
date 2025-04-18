<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Club extends Model
{
    protected $fillable = [
        'name',
        'description',
        'website',
        'email',
        'phone',
        'whatsapp',
        'city',
        'country',
        'district',
        'address',
        'latitude',
        'longitude',
        'company_id'
    ];

    protected $casts = [
        'images' => 'array',
        'latitude' => 'float',
        'longitude' => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function targetGroups(): HasMany
    {
        return $this->hasMany(TargetGroup::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function subscriptionTypes(): BelongsToMany
    {
        return $this->belongsToMany(SubscriptionType::class, 'club_subscription_types')
            ->withPivot('price', 'is_active')
            ->withTimestamps();
    }
}