<?php

namespace App\Models;

use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    public $guarded = [];
/*
    protected $table='permission_user';
     public function permission_user(){
       return $this->belongsToMany(Permission::class, 'permission_user');
     }
*/

}
