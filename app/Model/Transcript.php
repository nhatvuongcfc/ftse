<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transcript extends Model
{
    protected $table="transcripts";
    protected $fillable=['name','student_id','class_id','subject_id','point'];
    public function student (){
        return $this->belongsTo('App\Model\Student');
    }
    public function class (){
        return $this->belongsTo('App\Model\Clases');
    }
    public function subject (){
        return $this->belongsTo('App\Model\Subject');
    }
    
}
