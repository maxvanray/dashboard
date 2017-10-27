<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'name', 
        'email', 
        'password', 
        'dob', 
        'pic', 
        'bio', 
        'gender', 
        'country', 
        'state', 
        'city', 
        'zip',
        'password',
        'facebook',
        'twitter',
        'instagram',
        'snapchat',
        'linkedin',
        'username',
        'user_id',
        'last_login',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
