<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table="personel";
    protected $fillable=['sex','address','phone','CMND','class_id'];
    public function user (){
        return $this->hasOne('App\Model\User');
    }
    public function class(){
        return $this->belongsTo('App\Model\Clases');
    }
}
