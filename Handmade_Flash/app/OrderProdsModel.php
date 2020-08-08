<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProdsModel extends Model
{
    protected $table = 'orders_prods';
    protected $fillabel = ['id','id_order','id_product','quantity','unit_price'];
    public $timestamps=true;
    public function orders() {
    	return $this->hasMany('App\OrderProdsModel','id_order','id');
    }
    public function products() {
    	return $this->belongsTo('App\ProductModel','id_product','id');
    }
}
