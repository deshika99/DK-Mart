<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'dob',
        'phone',
        'profile_image', // Added profile_image field
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the full URL for the profile image.
     */
    public function getProfileImageUrlAttribute(): string
    {
        return $this->profile_image 
            ? asset('storage/' . $this->profile_image) 
            : asset('images/default-user.png');
    }

    /**
     * Relationship: User has many Customer Orders.
     */
    public function customerOrders()
    {
        return $this->hasMany(CustomerOrder::class, 'user_id', 'id');
    }
}



