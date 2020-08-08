@extends('admin.master')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
    
        <div class="row">
         
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">EDIT PRODUCT</h1>
              </div>
              <form class="user" action="{{URL::action('ProductController@postEditProduct',$product->id)}}" method="post" role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <select class="form-control" name="txtcate_id">
                            @foreach($cate as $value)
                                <option value="{!! $value['id'] !!}" {!! $value['id'] == $product['cate_id']?'selected' : '' !!}> {!! $value['cate_name'] !!}</option>
                            @endforeach
                        </select>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="txtname" value="{!! old ('txtname',isset($product)?$product['name']:NULL) !!}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control" name="txtunit_price" value="{!! old ('txtunit_price',isset($product)?$product['unit_price']:NULL) !!}">
                  </div>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" name="txtpromotion_price" value="{!! old ('txtpromotion_price',isset($product)?$product['promotion_price']:NULL) !!}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="file" name="txtimage" value="{!! isset($product)?$product['image']:NULL !!}">
                    <img src="{!! asset('public/images/'.$product['image']) !!}" width="100">
                  </div>
                  <div class="col-sm-6">
                  <input type="number" class="form-control" name="txtquantity" value="{!! old ('txtquantity',isset($product)?$product['quantity']:NULL) !!}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control" name="txtdisabled_center" value="{!! old ('txtdisabled_center',isset($product)?$product['disabled_center']:NULL) !!}">
                  </div>
                  <div class="col-sm-6">
                    <input type="number" class="form-control" name="txtstatus" value="{!! old ('txtstatus',isset($product)?$product['status']:NULL) !!}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for=""> Start date: </label>
                    <input type="date" class="form-control" name="txtstart_date" value="{!! old ('txtstart_date',isset($product)?$product['start_date']:NULL) !!}">
                  </div>
                  <div class="col-sm-6">
                  <label for=""> End date: </label>
                    <input type="date" class="form-control" name="txtend_date" value="{!! old ('txtennd_date',isset($product)?$product['end_date']:NULL) !!}">
                  </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-12">
                  <textarea class="form-control" name="txtdescription" value="{!! old ('txtdescription',isset($product)?$product['description']:NULL) !!}" rows="3"></textarea>
                  </div>
                </div>
              

                <div class="text-center">
                <button type="submit" class="btn btn-success">EDIT</button>
                </div> 
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  
@endsection
