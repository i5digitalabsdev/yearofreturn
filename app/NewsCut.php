<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCut extends Model
{
    protected $fillable = [
        'type',
        'images',
        'status',
        'user_id',
        'news_id'
    ];

    public function newsUser()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function getImages()
    {
        return $this->hasMany(NewsImage::class,'news_id','news_id');
    }
}
