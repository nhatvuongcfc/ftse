<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table="topics";
    protected $fillable=['name','subject_id'];
    public function subject (){
        return $this->belongsTo('App\Model\Subject');
    }
}
