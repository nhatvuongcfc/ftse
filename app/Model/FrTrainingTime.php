<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FrTrainingTime extends Model
{
    protected $table="fr_training_times";
    protected $fillable=['name','content','image','times','status'];
    
    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }
}
