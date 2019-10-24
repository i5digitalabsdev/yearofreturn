<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected  $fillable = [
        'title',
        'category',
        'content',
        'status',
        'date',
        'featuredImage',
        'filepath'
    ];
}
