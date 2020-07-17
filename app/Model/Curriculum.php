<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table="curriculums";
    protected $fillable=['name','class_id'];
    public function clases (){
        return $this->hasMany('App\Model\Clases');
    }
}
