<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $fillable = [
        'name',
        'registration_number',
        'headquarters_city',
        'headquarters_address',
        'email',
        'phone',
        'website',
        'description'
    ];

    /**
     * Get the clubs owned by this company.
     */
    public function clubs(): HasMany
    {
        return $this->hasMany(Club::class);
    }

    /**
     * Get the users (club owners) associated with this company.
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}