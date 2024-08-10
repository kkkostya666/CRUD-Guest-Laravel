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
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'country',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($guest) {
            if (is_null($guest->country)) {
                $guest->country = self::getCountryFromPhone($guest->phone);
            }
        });
    }

    public static function getCountryFromPhone($phone)
    {
        $countryCodes = [
            '+1' => 'USA',
            '+44' => 'UK',
            '+7' => 'Russia',
        ];

        foreach ($countryCodes as $code => $country) {
            if (strpos($phone, $code) === 0) {
                return $country;
            }
        }

        return 'Unknown';
    }
}
