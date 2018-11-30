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
        return $this->belongsToMany(Tag::class)->withTimestamps();
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

    GET QUERY

$post = App\Post::find(1) == first (get the first post (id1))
$post->tags (every tag asociated with this post)
$post->tags->pluck('name') (Get every name of the tags asociated with $post (first post))

Programmaticly assign post to tag   => did: App\Tag::first()     == tag with id 1 
>>> $tag->posts()->attach(1)                                     == attach post with id 1 to tag with id 1
in reverse
>>> $post->tags()->attach(2)
*/