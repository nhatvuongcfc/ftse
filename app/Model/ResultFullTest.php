<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ResultFullTest extends Model
{
    protected $table="result_full_tests";
    protected $fillable=['full_test_id','skill_test_id','user_id','number_correct_listening','score_listening','number_correct_reading','score_reading','score_total'];
    
}
