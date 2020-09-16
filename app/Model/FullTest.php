<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FullTest extends Model
{
    protected $table="full_tests";
    protected $fillable=['name','status'];
    public function part (){
        return $this->belongsTo('App\Model\Part');
    }
    
    public function fullTest (){
        return $this->belongsTo('App\Model\FullTest');
    }
    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }
    //
}
