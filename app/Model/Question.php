<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Question extends Model
{
    protected $table="questions";
    protected $fillable=['content','part','full_test_id','skill_test_id'];
    public function answer(){
        return $this->hasOne('App\Model\Answer');
    }
    public function fileImage(){
        return $this->hasMany('App\Model\FileImage');
    }
    
    
    
    
}
