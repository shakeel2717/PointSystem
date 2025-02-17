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
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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

    public function points()
    {
        return $this->hasMany(Point::class);
    }

    public function balance()
    {
        $in = Point::where('sum', true)->sum('amount');
        $out = Point::where('sum', false)->sum('amount');

        return $in - $out;
    }

    public function spendThisMonth()
    {
        $out = Point::where('sum', false)->whereMonth('created_at', now()->month)->sum('amount');

        return $out;
    }

    public function totalCollection()
    {
        $in = Point::where('sum', true)->sum('amount');

        return $in;
    }
}
