<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guild extends Model
{
    public function user()
    {
        $this->hasMany(User::class);
    }
}
