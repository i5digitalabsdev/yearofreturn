<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'menuName',
        'url',
        'status',
        'sort'
    ];
    
    public function subMenu(){
        return $this->hasMany('App\SubMenu');
    }

    public function level2(){
        return $this->hasMany('App\Level2');
    }
}
