<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SellerModel;
use input;

class SellerController extends Controller
{
    public function getAddSeller() {
    	return view('admin.seller.add');
    }

    // Lấy dữ liệu vừa nhập và lưu lại vào database
    public function postAddSeller(Request $request) {
    	$seller = new SellerModel;
        $seller->fullname = $request->txtfullname;
        $seller->address = $request->txtaddress;
        $seller->center_name = $request->txtcenter_name;
        $seller->paper_identication = $request->txtpaper_identication;
        $seller->email = $request->txtemail;
        $seller->phone = $request->txtphone;
        $seller->user_role = $request->txtuser_role;
        $seller->password = $request->txtpassword;
		$seller->save();
		return redirect()->route('admin.seller.getListSeller');
    }

    // show list Seller
    public function getListSeller() {
        $seller = SellerModel::select('id','fullname','address','center_name','paper_identication','email','phone','user_role')->get()->toArray();
        return view('admin.seller.list',compact('seller'));
      }

       // Edit Seller
    public function getEditSeller($id) {
        $seller = SellerModel::select('id','fullname','address','center_name','paper_identication','email','phone','user_role','password')->get()->toArray();
        $seller = SellerModel::find($id);
        return view('admin.seller.edit',compact('seller'));
    }
  
    public function postEditSeller($id,Request $request) {
        $seller = SellerModel::find($id);
        $seller->fullname = $request->input('txtfullname');
        $seller->address = $request->input('txtaddress');
        $seller->center_name = $request->input('txtcenter_name');
        $seller->paper_identication = $request->input('txtpaper_identication');
        $seller->email = $request->input('txtemail');
        $seller->phone = $request->input('txtphone');
        $seller->user_role = $request->input('txtuser_role');
        $seller->password = $request->input('txtpassword');
		$seller->save();
        return redirect()->route('admin.seller.getListSeller')->with('success','Update successfully!');
      }

      // delete Seller
    public function getDeleteSeller($id) {
        $seller = SellerModel::find($id);
        $seller->delete($id);
        return back();
      }
}
