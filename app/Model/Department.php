<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table="departments";
    protected $fillable=['name'];
    public function question (){
        return $this->belongsTo('App\Model\Question');
    }
}
