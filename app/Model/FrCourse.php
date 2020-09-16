<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FrCourse extends Model
{
    protected $table="fr_courses";
    protected $fillable=['name','content','image','status'];
    
    public function fullTest (){
        return $this->belongsTo('App\Model\FullTest');
    }
    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }
}
