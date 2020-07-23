<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellerModel extends Model
{
    protected $table ='sellers'; 
    protected $fillabel=['id','fullname','address','center_name','email','paper_identication','user_role','phone','password']; 
    public $timestamps=true;
}
