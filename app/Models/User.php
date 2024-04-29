<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'id',
        'email',
        'password',
        'role'
    ];
    const ROLE_USERS = 0;
    const ROLE_CLIENT = 1;
    public static function getRoles()
    {
        return [
            self::ROLE_USERS => 'Пользователь',
            self::ROLE_CLIENT => 'Клиент',
        ];
    }
}
