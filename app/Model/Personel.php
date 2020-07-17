<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    protected $table="personel";
    protected $fillable=['sex','address','phone','CMND','department_id'];
    public function user (){
        return $this->hasOne('App\Model\User');
    }
    public function department(){
        return $this->belongsTo('App\Model\Department');
    }
}
