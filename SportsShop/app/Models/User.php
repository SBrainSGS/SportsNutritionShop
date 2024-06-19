<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasRoles;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'fio',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $timestamps = false;

    public function getAuthIdentifierName()
    {
        return 'user_id'; // Имя атрибута, используемого для идентификации пользователя
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // Уникальный идентификатор пользователя
    }

    public function getAuthPassword()
    {
        return $this->password; // Захешированный пароль пользователя
    }
}
