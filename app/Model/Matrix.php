<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{
    protected $table="matrices";
    protected $fillable=['name','number_question','subject_id','group_id'];
    public function subject (){
        return $this->belongsTo('App\Model\Subject');
    }
    public function group (){
        return $this->belongsTo('App\Model\Group');
    }
    
}
