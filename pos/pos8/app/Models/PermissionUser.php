<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionUser extends Model
{
    use HasFactory;
    protected $table = "permission_user";
//protected $primaryKey = 'id';
   protected $fillable = ['permission_id','user_id','user_type'];
/*
   protected $table='users';
    public function users(){
      return $this->belongsToMany('App\Models\User')->select(array('id','first_name','last_name','email'));
    }

    protected $table='permissions';
     public function permissions(){
       return $this->belongsToMany('App\Models\Permission')->select(array('id','name','display_name','description'));
     }
*/

   public $timestamps = false;
}
