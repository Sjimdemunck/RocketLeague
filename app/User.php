<?php

namespace App;

use App\Challenge;
use App\Experience;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
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
        'name', 'email', 'password','phone',
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
        return $this->hasMany(Challenge::class);
    }

    public function experiences()
    {
        return $this->HasOne(Experience::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}