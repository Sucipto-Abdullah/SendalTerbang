<?php

namespace App\Models;

use Illuminate\Foundation\Auth\Users as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['username','kode', 'email', 'password', 'role'];

    protected $hidden = ['password', 'remember_token'];
}
