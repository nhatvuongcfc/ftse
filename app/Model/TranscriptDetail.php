<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TranscriptDetail extends Model
{
    protected $table="detail_transcripts";
    protected $fillable=['transcript_id'];
    public function transcript (){
        return $this->belongsTo('App\Model\Transcript');
    }
}
