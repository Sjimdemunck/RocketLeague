<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    public function user()
    {
        $this->belongsToMany(User::class);
    }
}
