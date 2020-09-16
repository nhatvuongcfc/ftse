<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SkillTest extends Model
{
    protected $table="skill_tests";
    protected $fillable=['name','part_id','status','time'];
    public function part (){
        return $this->belongsTo('App\Model\Part');
    }
    
}
