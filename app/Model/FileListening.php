<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FileListening extends Model
{
    protected $table="file_listenings";
    protected $fillable=['file','full_test_id','skill_test_id'];
    
    public function fullTest (){
        return $this->belongsTo('App\Model\FullTest');
    }
}
