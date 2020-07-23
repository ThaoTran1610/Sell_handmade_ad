<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table ='products'; 
    protected $fillabel=['id','name','image','unit_price','promotion_price','start_date','end_date','quantity','description','cate_id','disabled_center','status']; 
    public $timestamps=true;
    public function categories() {
    	return $this->hasMany('App\ProductModel','cate_id','id');
    }
}
