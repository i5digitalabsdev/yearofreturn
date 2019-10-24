<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'filepath',
        'bannerCaption',
        'bannerStyle',
        'btnUrl',
        'btnText',
        'status',
        'position'
    ];
}
