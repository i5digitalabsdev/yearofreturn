<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use YaroslavMolchan\Rbac\Models\Role;
use \YaroslavMolchan\Rbac\Traits\Rbac;

class User extends Authenticatable
{
    use Notifiable;
    use Rbac;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getUserRole()
    {
        return $this->hasOne(Role::class, 'id','role_id');
    }
}
