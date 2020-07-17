<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table="exams";
    protected $fillable=['name','date','factor'];
    public function question (){
        return $this->belongsTo('App\Model\Question');
    }
}
