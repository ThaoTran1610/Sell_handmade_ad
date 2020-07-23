<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table ='comments'; 
    protected $fillabel=['id','id_product','id_user','comment']; 
    public $timestamps=true;
    public function products() {
    	return $this->hasMany('App\CommentModel','id_product','id');
    }
    public function users() {
    	return $this->hasMany('App\CommentModel','id_user','id');
    }
}
