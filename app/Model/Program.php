<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table="programs";
    protected $fillable=['name','slug','content','image','status'];
    public function scopeStatus($query)
    {
        return $query->where('programs.status', 1);
    }
}
