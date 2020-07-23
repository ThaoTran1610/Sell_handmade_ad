<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table ='orders'; 
    protected $fillabel=['id','order_date','id_customer','total','payment','note']; 
    public $timestamps=true;
    public function customers() {
    	return $this->belongsTo('App\OrderModel','id_customer','id');
    }
}
