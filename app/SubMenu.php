<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model{

    protected $fillable = [
        'menu_id',
        'menuName',
        'url',
        'status',
        'sort'
    ];

    public  function menu(){
        return $this->belongsTo('App\Menu');
    }
    
    public function level2(){
        return $this->hasMany('App\Level2');
    }
    
    
}
