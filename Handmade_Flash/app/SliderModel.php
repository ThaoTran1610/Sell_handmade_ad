<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table ='slides'; 
    protected $fillabel=['id','image']; 
    public $timestamps=true;
}
