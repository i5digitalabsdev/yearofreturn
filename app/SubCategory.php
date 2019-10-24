<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'sub_category'
    ];

    public function getPost(){
        return $this->hasMany(Post::class, 'sub_category', 'id');
}
}
