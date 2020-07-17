<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TestPermutation extends Model
{
    protected $table="test_permutations";
    protected $fillable=['question_id','test_id','name_code','permutations_id'];
    public function question (){
        return $this->belongsTo('App\Model\Question');
    }
    public function test(){
        return $this->belongsTo('App\Model\Test');
    }
}
