<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FrCourseTime extends Model
{
    protected $table="fr_course_times";
    protected $fillable=['fr_course_id','content','times','status'];
    
    public function FrCourse (){
        return $this->belongsTo('App\Model\FrCourse');
    }
    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }
}
