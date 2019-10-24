<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostAuthor extends Model
{
    protected $fillable = [
        'author'
    ];

    protected function getPost(){
        return $this->hasMany(Post::class, 'author', 'id');
    }
}
