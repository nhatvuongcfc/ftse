<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ToeicScale extends Model
{
    protected $table="toeic_scales";
    protected $fillable=['number_correct','score_listening','score_reading'];
    
}
