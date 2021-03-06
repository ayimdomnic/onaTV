<?php

namespace App\Data\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //
    use Notifiable;

    protected $fillable =[ 
    'id', 'username', 'channel', 'email', 'password', 'level', 'status', 'type',  'avatar','cover',
    ];

    protected $hidden = [
    'password', 'remember_token',
    ];
}
