<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AffiliateUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RaffleTicket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'token',
        'status',
    ];

    // Relationship with the AffiliateUser model
    public function user()
    {
        return $this->belongsTo(AffiliateUser::class);
    }
}
