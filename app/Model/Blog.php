<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table="blogs";
    protected $fillable=['title','slug','content','image','status','user_id','category_id','view','created_at'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }
    
    public function scopeStatus($query)
    {
        return $query->where('blogs.status', 1);
    }
}
