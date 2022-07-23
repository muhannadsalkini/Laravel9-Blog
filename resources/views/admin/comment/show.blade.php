@extends('layouts.adminwindow')
@section('title','Show Message : '.$data->title)


@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card-body">
                            <h4 class="card-title">Detail Message Data</h4>

                            <div class="table-responsive pt-3">
                           
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Id</th>
                                        <td>{{($data->id)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name & Surname</th>
                                        <td>{{($data->user->name)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Place</th>
                                        <td>{{($data->place->title)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td>{{($data->subject)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td>{{($data->comment)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Rate</th>
                                        <td>{{($data->rate)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ip Number</th>
                                        <td>{{($data->IP)}}</td>
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
                                    <tr>
                                        <th>Admin Note</th>
                                        <td>
                                        <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                          <select name="status">
                                              <option selected>{{($data->status)}}</option>
                                              <option>True</option>
                                              <option>False</option>
                                          </select>

                                            <div class="card-footer">
                                                  <button type="submit" class="btn btn-primary mr-2">Update Comment</button>
                                            </div>
                                         </form>
                                        </td>
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





