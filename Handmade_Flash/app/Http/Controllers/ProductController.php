<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\productController;
use Validator;
use Auth;
use Illuminate\Support\ServiceProvider;
use App\ProductModel;
use App\CategoryModel; 
use input, file;

class ProductController extends Controller
{
    public function getAddProduct() {
    	$category = CategoryModel::select('id','cate_name')->get()->toArray();
    	return view('admin.product.add', compact('category'));
    }

    // Lấy dữ liệu vừa nhập và lưu lại
    public function postAddProduct(Request $request) {
    	  $product = new ProductModel;
        $product->name = $request->txtname;
        $filename = $request->file('txtimage')->getClientOriginalName();
        $product->image = $filename;
        $request->file('txtimage')->move('public/images/',$filename);
        $product->unit_price = $request->txtunit_price;
        $product->promotion_price = $request->txtpromotion_price;
        $product->start_date = $request->txtstart_date;
        $product->end_date = $request->txtend_date;
        $product->quantity = $request->txtquantity;
        $product->description = $request->txtdescription;
    	  $product->cate_id = $request->txtcate_id;
        $product->disabled_center = $request->txtdisabled_center;
        $product->status = $request->txtstatus;
        
		$product->save();
		return redirect()->route('admin.product.getListProduct');
    }

    // show list Product
    public function getListProduct() {
    	$cate = CategoryModel::select('id','cate_name')->get()->toArray();
		$product = ProductModel::select('id','name','image','unit_price','promotion_price','quantity','description','cate_id','disabled_center','status')->get()->toArray();
		return view('admin.product.list',compact('product'),['category' => $cate]);
    }
    
    //Edit Product
    public function getEditProduct($id) {
		$cate = CategoryModel::select('id','cate_name')->get()->toArray();
		$product = ProductModel::find($id);
		return view('admin.product.edit',compact('cate','product'));
    }
    
    public function postEditProduct($id,Request $request) {
      $product = ProductModel::find($id);
      $product->name = $request->input('txtname');
      $filename = $request->file('txtimage')->getClientOriginalName();
      $product->image = $filename;
      $request->file('txtimage')->move('public/images/',$filename);
      $product->unit_price = $request->input('txtunit_price');
      $product->promotion_price = $request->input('txtpromotion_price');
      $product->start_date = $request->input('txtstart_date');
      $product->end_date = $request->input('txtend_date');
      $product->quantity = $request->input('txtquantity');
      $product->description = $request->input('txtdescription');
    	$product->cate_id = $request->input('txtcate_id');
      $product->disabled_center = $request->input('txtdisabled_center');
      $product->status = $request->input('txtstatus');
      $product->save();
      return redirect()->route('admin.product.getListProduct')->with('success','Updated successfully!');
    }

    // Delete Product
    public function getDeleteProduct($id) {
      $product = ProductModel::find($id);
      $product->delete($id);
      return back();
    }
}