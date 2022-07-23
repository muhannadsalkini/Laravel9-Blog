@extends('layouts.admin')
@section('title','Category List')

@section('content')
 <div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-outline-danger btn-icon-text">
            <a href="{{route('admin.category.create')}}" class="ti-upload btn-icon-prepend" style="text-decoration:none"> Add Category</a>

        </button>

        <span style="margin:20px; margin-left:395px;" class="col-sm-3">
                  <ol class="breadcrumb " style="margin:20px;">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Category List</li>
                  </ol>
                  </span>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                           Parent
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                        <th>
                            Show
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach( $data as $rs)
                  <tr>
                    <td>{{$rs->id}}</td>
                    <td>
                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                        </td>
                    <td>{{$rs->title}}</td>
                    <td>
                           @if ($rs->image)
                                  <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                            @endif
                    </td>
                    <td>{{$rs->status}}</td>
                    <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm">Edit</a></td>
                    <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>       
                    <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}"class="btn btn-block btn-success btn-sm">Show</a></td> 
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 


@endsection

@section('footer')
    @include('admin._footer')
@endsection
