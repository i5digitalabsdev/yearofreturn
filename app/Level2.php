<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level2 extends Model
{
    protected $fillable = [
        'sub_menu_id',
        'menuName',
        'url',
        'status',
        'sort'
    ];
    
    public  function menu (){
        return $this->belongsTo('App\Menu');
        
    }

    public  function subMenu (){
        return $this->belongsTo('App\SubMenu');

    }
    
    public function level3(){
       return $this->hasMany('App\Level3');
    }
}
