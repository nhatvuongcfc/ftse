<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Difficult extends Model
{
    protected $table="difficults";
    protected $fillable=['name'];
    public function questions (){
        return $this->hasMany('App\Model\Question');
    }
}
