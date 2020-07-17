<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table="roles";
    protected $fillable=['name','slug','permissions'];
    public function user (){
        return $this->belongsTo('App\Model\User','role_user','role_id','user_id');
    }
    public function hasAccess(array $permissions){
        foreach ($permissions as $permission) {

            // $this->hasPermission($permission);
            if($this->hasPermission($permission)){
                return true;
            }
            return false;
        }
    }
    protected function hasPermission(string $permission){
        // echo $permission;
        $permissions=json_decode($this->permissions);
        foreach ($permissions as $key=>$value) {
            if($key===$permission){
                return true;
            }
            return false;

        }
        dd($permissions);
    }
}
