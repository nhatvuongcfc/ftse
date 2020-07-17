<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this -> belongsToMany('App\Model\Role');
    }
    public function hasAccess(array $permissions){

        foreach ($this->roles as $role ) {

            if($role->hasAccess($permissions)){
                return true;
            }
            return false;
        }
    }
    public function isRole(string $role){
        foreach($this->roles as $value){
            if($value->name === $role){
                return true;
            }
            return false;
        }
    }
}
