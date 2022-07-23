@extends('layouts.admin')
@section('title','Faq List')

@section('content')
    <div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-outline-danger btn-icon-text">
            <a href="{{route('admin.faq.create')}}" class="ti-upload btn-icon-prepend" style="text-decoration:none"> Add Question</a>

        </button>

        <span style="margin:10px; margin-left:770px;" class="col-sm-2">
                  <ol class="breadcrumb " style="margin:20px;">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Faq List</li>
                  </ol>
                  </span>

        <div class="table-responsive">
            <table class="table table-striped">
                <h3>Faq List</h3>
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Question
                        </th>
                        <th>
                            Answer
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
                    <td>{{$rs->question}}</td>
                    <td>{!!$rs->answer !!}</td>
                    <td>{{$rs->status}}</td>
                    <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}" class="btn btn-block btn-info btn-sm">Edit</a></td>
                    <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>       
                    <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}"class="btn btn-block btn-success btn-sm">Show</a></td> 
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
