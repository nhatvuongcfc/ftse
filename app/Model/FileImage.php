<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FileImage extends Model
{
    protected $table="file_images";
    protected $fillable=['file','question_id'];
    public function question (){
        return $this->belongsTo('App\Model\Question');
    }
}
