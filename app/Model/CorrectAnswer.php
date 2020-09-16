<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{
    protected $table="correct_answers";
    protected $fillable=['index','answer','full_test_id','skill_test_id'];
    public function fullTest (){
        return $this->belongsTo('App\Model\FullTest');
    }
    public function skillTest (){
        return $this->belongsTo('App\Model\SkillTest');
    }
}
