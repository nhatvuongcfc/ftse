<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table="courses";
    protected $fillable=['name','year'];
    public function clases(){
        return $this->hasMany('App\Model\Clases');
    }
}
