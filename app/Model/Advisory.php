<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class advisory extends Model
{
    protected $table="advisories";
    protected $fillable=['name','email','phone','gender','text'];
}
