<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class TestSample extends Model
{
    protected $table="test_samples";
    protected $fillable=['question_id','test_id'];
    public function question (){
        return $this->belongsTo('App\Model\Question');
    }
    public function test(){
        return $this->belongsTo('App\Model\Test');
    }
}
