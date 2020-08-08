@extends('admin.master')
@section('content')

<a href="{!! url('admin/product/add') !!}">Add more Product</a>
         <div class="card shadow mb-4">
           <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-success">Product Data</h6>
           </div>
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                   <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category ID</th>
                    <th>Description</th>
                    <th>Unit Price</th>
                    <th>Promotion Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Disabled Center</th>
                    <th>Status</th>
                    <th>Action</th>
                   </tr>
                 </thead>
           
                 <tbody>
                 @foreach($product as $value)
                    <tr>
                        <td> {!! $value["id"] !!} </td>
                        <td> {!! $value["name"] !!} </td>
                        <td> {!! $value["cate_id"] !!} </td>
                        <td> {!! $value["description"] !!} </td>
                        <td> {!! $value["unit_price"] !!} </td>
                        <td> {!! $value["promotion_price"] !!} </td>
                        <td> {!! $value["quantity"] !!} </td>
                        <td> {!! $value["image"] !!} </td> 
                        <td> {!! $value["disabled_center"] !!} </td> 
                        <td> {!! $value["status"] !!} </td> 
                        <td>
                            <a href="{!! url('admin/product/edit',$value["id"]) !!}"> <i class="menu-icon fa fa-edit"></i></a>
                            <a href="{!! url('admin/product/delete',$value["id"]) !!}"> <i class="menu-icon fa fa-trash"></i></a>
                        </td>
                        </tr>
                    @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>

@endsection
