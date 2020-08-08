<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $fillabel = ['id','cate_name'];
    public $timestamps=true;
    public function products() {
    	return $this->belongsTo('App\CategoryModel','cate_id','id');
    }
}
