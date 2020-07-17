<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    protected $table="clases";
    protected $fillable=['name','course_id'];
    public function course (){
        return $this->belongsTo('App\Model\Course');
    }
    public function curriculum (){
        return $this->belongsTo('App\Model\Curriculum');
    }
    
}
