<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table ='users'; 
    protected $fillabel=['id','username','email','address','phone','password','remember_token']; 
    public $timestamps=true;
    public function comments() {
    	return $this->belongsTo('App\UserModel','id_user','id');
    }
}
