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
    const ROLE_USERS = 1;
    const ROLE_CLIENT = 2;
    const ROLE_ADMIN = 3;
    public static function getRoles()
    {
        return [
            self::ROLE_USERS => 'Пользователь',
            self::ROLE_CLIENT => 'Клиент',
            self::ROLE_ADMIN => 'Админ'
        ];
    }
}
