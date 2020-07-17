<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table="questions";
    protected $fillable=['content','topic_id','difficult_id','image'];
    public function topic (){
        return $this->belongsTo('App\Model\Topic');
    }
    
    public function difficult (){
        return $this->belongsTo('App\Model\Difficult');
    }
    
    public function test_samples(){
        return $this->belongsToMany('App\Model\TestSample');
    }
    
    public function answers (){
        return $this->hasMany('App\Model\Answer');
    }
    
    
}
