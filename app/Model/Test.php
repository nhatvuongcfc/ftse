<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table="tests";
    protected $fillable=['name','time','timer','matrix_id','status','isOnline','exam_id'];
    // public function exam (){
    //     return $this->belongsTo('App\Model\Exam');
    // }
    public function questions(){
        return $this->belongsToMany('App\Model\Question','Test_samples');
    }
    
    public function matrix(){
        return $this->belongsTo('App\Model\Matrix');
    }
}
