<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Egulias\EmailValidator\Warning\Comment;

class Post extends Model
{
    public function comment()
    {
       return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}


/*  benodigde tabellen
posts
tags
pivot post_tag

Many to Many relation
    Tag Model 
        public function posts()
        {
            return $this->belongsToMany(Post::class);
        }
    Post model
        public function tags()
        {
            return $this->belongsToMany(Tag::class);
        }

*/