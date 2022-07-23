@extends('layouts.adminwindow')
@section('title','User Detail : '.$data->title)


@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card-body">
                            <h4 class="card-title">Detail User Data</h4>

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
                                        <th>Email</th>
                                        <td>{{($data->email)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Roles</th>
                                        <td>
                                            @foreach ($data->roles as $role) 
                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn btn-block btn-danger btn-sm"
                                             onclick="return confirm('Deleting !! Are you sure ?')">[x]</a>
                                            @endforeach
                                        </td>
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
                                        <th>Add Role To User</th>
                                        <td>
                                        <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <select name="role_id">
                                            @foreach ($roles as $role) 
                                                  <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                            </select>
                                            <div class="card-footer">
                                                  <button type="submit" class="btn btn-primary mr-2">Add Role</button>
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





