<?php

namespace App\Models;

// use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AkunUser extends Authenticatable
{
    // use HasApiTokens, Notifiable;
    protected $table = "users_akun";
    protected $fillable = [
        'email',
        'password'
    ];

}
