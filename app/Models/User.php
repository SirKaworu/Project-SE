<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the business relations associated with the user.
     */

    public function businessRelations()
    {
    return $this->hasMany(BusinessRelation::class);
    }

    public function farmerRelations()
    {
    return $this->hasMany(BusinessRelation::class, 'farmer_id');
    }

    public function distributorRelations()
    {
    return $this->hasMany(BusinessRelation::class, 'distributor_id');
    }

    public function investorRelations()
    {
    return $this->hasMany(BusinessRelation::class, 'investor_id');
    }


}
