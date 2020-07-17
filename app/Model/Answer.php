<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table="answers";
    protected $fillable=['content','question_id','isTrue'];
    public function question (){
        return $this->belongsTo('App\Model\Question');
    }
    
    
}
