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
                                        <td>{{($data->name)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td>{{($data->phone)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{($data->email)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th>
                                        <td>{{($data->subject)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td>{{($data->message)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Ip Number</th>
                                        <td>{{($data->ip)}}</td>
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
                                        <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <textarea cols="100" id="note" name="note">{{$data->note}}</textarea>
                                            <div class="card-footer">
                                                  <button type="submit" class="btn btn-primary mr-2">Update Note</button>
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





