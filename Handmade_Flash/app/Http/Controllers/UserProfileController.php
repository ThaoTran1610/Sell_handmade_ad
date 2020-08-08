<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use input;

class UserProfileController extends Controller
{
    public function getViewUserProfile() {
        $user = UserModel::select('id','username','email','address','phone','user_role','password')->get()->toArray();
        return view('user.user_profile',compact('user'));
      }
}
