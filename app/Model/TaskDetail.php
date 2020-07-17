<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TaskDetail extends Model
{
    protected $table="tasks_detail";
    protected $fillable=['question_id','answer_id','task_id','isTrue'];
    public function questions (){
        return $this->hasMany('App\Model\Question');
    }
    public function answers (){
        return $this->hasMany('App\Model\Answer');
    }
    public function task (){
        return $this->belongsTo('App\Model\Task');
    }
    public function answer_true(){
        return $this->hasMany('App\Model\Answer')->where('as');

    }
}
