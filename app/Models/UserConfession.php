<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserConfession extends Authenticatable
{
    //
    protected $table = 'user_confessions';
    protected $fillable = ['name', 'username', 'password'];
    protected $hidden = ['password', 'remember_token'];
    public $timestamps = true;

}
