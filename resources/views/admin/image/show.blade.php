@extends('layouts.admin')
@section('title','Show Category : '.$data->title)


@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        
            <div class="col-sm-12">
             <div class="col-sm-12">
            
               <span class="col-sm-2" style="margin-top:20px">
               <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-info" style="width:150px"> Edit</a>
               </span>
        
               <span class="col-sm-2" style="margin-top:20px">
               <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-danger" style="width:150px" > Delete</a>
               </span>
              <span style="margin:20px; margin-left:395px;" class="col-sm-3">
                  <ol class="breadcrumb " style="margin:20px;">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Show Category</li>
                  </ol>
                  </span>

              </div>
            

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- <div class="section-block" id="basicform">Show Category</div> -->
                        <div class="card-body">
                            <h4 class="card-title">Detail Data</h4>

                            <div class="table-responsive pt-3">
                           
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Id</th>
                                        <td>{{($data->id)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{($data->title)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Keywords</th>
                                        <td>{{($data->keywords)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{($data->status)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Created Date</th>
                                        <td>{{($data->created_at)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Update Date</th>
                                        <td>{{($data->updated_at)}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>
  
@endsection


@section('footer')
    @include('admin._footer')
@endsection





