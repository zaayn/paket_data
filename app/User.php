<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'email';
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    const ADMIN_TYPE = 'admin';
    const USERS_TYPE = 'user';

    public $incrementing = false;
    public function transaksi()
    {

        return $this->hasMany(\App\Transaksi::class);

    }

    public function isAdmin() {
        return $this->role === self::ADMIN_TYPE;
    }

    public function isUser() {
        return $this->role === self::USERS_TYPE;
    }
}
