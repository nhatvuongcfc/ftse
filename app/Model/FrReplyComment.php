<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrReplyComment extends Model
{
    protected $table="fr_reply_comments";
    protected $fillable=['user_id','comment_id','content','image','status'];
    
    public function FrComment (){
        return $this->belongsTo('App\Model\FeComment');
    }
    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }
}
