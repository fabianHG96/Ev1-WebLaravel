<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
class User extends Authenticable
{
    use HasFactory;

    protected $table ='users';
    protected $fillable = ['name', 'apellidos', 'email', 'password','r_token'];
}
