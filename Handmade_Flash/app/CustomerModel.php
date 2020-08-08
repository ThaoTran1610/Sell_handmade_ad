<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table ='customers'; 
    protected $fillabel=['id','name','gender','email','address','note','phone_number']; 
    public $timestamps=true;
    public function orders() {
    	return $this->belongsTo('App\CustomerModel','id_customer','id');
    }
}
