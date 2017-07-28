<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'first_name',
        'last_name',
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name. ' ' . $this->last_name;
    }

    public function setPasswordAttribute($value)
    {
        //Si el usuario no edita la contrasena
        if(!empty($value))
        {
            $this->attributes['password'] = bcrypt($value);
        }        
    }

    public function profile()
    {
        return $this->hasOne('App\UserProfile');
    }
}
