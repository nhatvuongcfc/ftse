<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table="tasks";
    protected $fillable=['student_id','test_id','point','note'];
    public function student (){
        return $this->belongsTo('App\Model\Student');
    }
    public function test(){
        return $this->belongsTo('App\Model\Test');
    }
}
