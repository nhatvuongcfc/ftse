<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table="answers";
    protected $fillable=['A','B','C','D','question_id'];
    public function question (){
        return $this->hasOne('App\Model\Question');
    }
    
    
}
