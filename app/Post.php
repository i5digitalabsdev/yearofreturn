<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'status',
        'featured',
        'author',
        'tags',
        'slug',
        'category',
        'sub_category',
        'brief',
        'date',
        'location',
        'featuredImage'
    ];

    public function getCategory(){
        return $this->belongsTo(PostCategory::class,'category', 'id');
    }

    public function getSubCategory(){
        return $this->belongsTo(SubCategory::class,'sub_category', 'id');
    }

    public function getAuthor(){
        return $this->belongsTo(PostAuthor::class, 'author', 'id');
    }
}
