<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
        'name', 'email', 'password', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Add a mutator to ensure hash passwords
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] =bcrypt($password);
    }

    public function challenges()
    {
        return $this->belongsToMany(Challenge::class);
    }//A user can have many challenges. A challenge could have more users. ManytoMany

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }//A user has one Profile. A profile belongs to one user. oneToOne

    public function guild()
    {
        return $this->hasOne(Guild::class);
    }//A user has one Guild. A Guild has many users. oneToMany = User->Guild

}