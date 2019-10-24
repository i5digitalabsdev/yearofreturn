<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    protected $fillable = [
        'file_name',
        'file_path',
        'news_id'
    ];
}
