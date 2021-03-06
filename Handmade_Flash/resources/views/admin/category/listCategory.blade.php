@extends('admin.master')
@section('content')

          <a href="{!! url('admin/category/add') !!}">Add more Category</a>
    
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Categories Data</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
            
                  <tbody>
                  @foreach($category as $value)
                    <tr>
                    <td> {!! $value["id"] !!} </td>
                    <td> {!! $value["cate_name"] !!} </td>
                    <td>
                        <a href="{!! url('admin/category/edit',$value["id"]) !!}"> <i class="menu-icon fa fa-edit"></i></a>
                        <a href="{!! url('admin/category/delete',$value["id"]) !!}"> <i class="menu-icon fa fa-trash"></i></a>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

@endsection