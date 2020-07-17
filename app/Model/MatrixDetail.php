<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MatrixDetail extends Model
{
    protected $table="matrices_detail";
    protected $fillable=['matrix_id','topic_id','NB','TH','VD','VC'];
    public function matrix(){
        return $this->hasOne('App\Model\Matrix');
    }
    public function topic(){
        return $this->belongsTo('App\Model\Topic');
    }
    
}
