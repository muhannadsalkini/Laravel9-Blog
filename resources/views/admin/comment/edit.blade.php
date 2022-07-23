@extends('layouts.admin')
@section('title','Edit Place : '.$data->title)

@section('head')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"></script>

@endsection

@section('content')
        <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-sm-12"> 
              <span class="col-sm-7">
                 <h1> Edit Place : {{$data->title}} </h1>
               </span>
               <span class="col-sm-2" style="margin-left:180px;">
                  <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active"> Edit Place</li>
                  </ol>
                </span>
           </div> 
            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Place Elements</h4>
                        <p class="card-description">  </p>
                        <form class="forms-sample" action="{{route('admin.place.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Parent Category</label>
                                            <select class="form-control" name="category_id">
                                                @foreach ($datalist as $rs)
                                                    <option value="{{ $rs->id }}"
                                                        @if ($rs->id == $data->category_id) selected="selected" @endif>
                                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detail</label>
                                <textarea class="form-control" id="detail" name="detail">
                                          {{$data->detail}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="text" class="form-control" name="price" value="{{$data->price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" class="form-control" name="city" value="{{$data->city}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Country</label>
                                <input type="text" class="form-control" name="country" value="{{$data->country}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Location</label>
                                <input type="text" class="form-control" name="location" value="{{$data->location}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class ="input-group">
                                    <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Update data</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- content-wrapper ends -->
@endsection





@section('foot')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
            <script>
                $(function(){
                    $('.textarea').summernote()
                })
            </script>
@endsection





