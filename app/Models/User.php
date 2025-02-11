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
     * @var list<string>
     */
    protected $fillable = [
        'email',
        'password',
        'role',
        'profile_img',
        'subscription',
    ];

    const ROLE_SUPER_ADMIN = 'superAdmin';
    const ROLE_PRIVATO = 'privato';
    const ROLE_AZIENDA = 'azienda';
    const ROLE_ENTE_PUBBLICO = 'ente pubblico';
    const SUBSCRIPTIONS_BASIC = 'Basic';
    const SUBSCRIPTIONS_MEDIUM = 'medium';
    const SUBSCRIPTIONS_PREMIUM = 'premium';

    
    public const ROLES = [
        self::ROLE_SUPER_ADMIN,
        self::ROLE_PRIVATO,
        self::ROLE_AZIENDA,
        self::ROLE_ENTE_PUBBLICO
    ];

public const SUBSCRIPTIONS = [
     self::ROLE_ENTE_PUBBLICO,
     self::SUBSCRIPTIONS_BASIC,
     self::SUBSCRIPTIONS_MEDIUM,
     self::SUBSCRIPTIONS_PREMIUM
];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    
}
