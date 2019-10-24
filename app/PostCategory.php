<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = [
        'category'
    ];

    public function getPost(){
        return $this->hasMany(Post::class, 'category', 'id');
}
}
