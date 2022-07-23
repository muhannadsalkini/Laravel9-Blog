@extends('layouts.adminwindow')
@section('title','Place İmage Gallery')

@section('content')
<h2>{{$place->title}}</h2>
<hr>
<form class="forms-sample" action="{{route('admin.image.store',['pid'=>$place->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class ="input-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                                    <div class="custom-file">
                                   <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class ="input-group-append">

                                  <input class="input-group-text" type="submit" value="Upload">
                                </div>
                            </div>

                            
                        </form>

<div class="card">
   <div class="card-header">
       <h3 class="card-title" style="font-size: 15px;">Product Image List</h3>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Image
                        </th>
                        
                        <th>
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @foreach( $images as $rs)
                  <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->title}}</td>
                    <td>
                           @if ($rs->image)
                                  <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                            @endif
                    </td>
                    
                    <td><a href="{{route('admin.image.destroy',['pid'=>$place->id,'id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>  
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






