@extends('admin.master')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
    
        <div class="row">
         
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">ADD SLIDER</h1>
              </div>
              <form class="user" action="{{URL::action('SliderController@postAddSlider')}}" method="post" role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
            
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="file" name="txtimage">
                  </div>
                </div>
        
                <div class="text-center">
                <button type="submit" class="btn btn-success">ADD</button>
                </div> 
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
