@extends('layouts.admin')
@section('title','Add Category List')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
<div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-left">Add Place : </h3>

                    <span class="col-sm-2" style="margin-left:860px;">
                  <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active"> Edit Category</li>
                  </ol>
                </span>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="section-block" id="basicform">Add Place</div>
                            <div class="card">
                                <div class="card-body">
                                               
                                    <form action="{{ route('admin.place.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Parent Place</label>
                                            <select class="form-control" name="category_id">

                                                @foreach ($data as $rs)
                                                    <option value="{{ $rs->id }}">
                                                        {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" type="text" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Keywords</label>
                                            <input id="inputText3" type="text" class="form-control" name="keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Description</label>
                                            <input id="inputText3" type="text" class="form-control" name="description">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Detail</label>
                                            <textarea class="form-control" id="detail" name="detail">
                                            </textarea>
                                            <script>
                                                ClassicEditor
                                                  .create( document.querySelector( '#detail' ) )
                                                  .then( editor => {
                                                  console.log( editor );
                                                } )
                                                  .catch( error => {
                                                  console.error( error );
                                                } );
                                           </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">slug</label>
                                            <input type="text" class="form-control" name="slug"></İ>

                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Price</label>
                                            <input id="inputText3" value="0" type="number" class="form-control"
                                                name="price">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">quantity</label>
                                            <input id="inputText3" value="0" type="number" class="form-control"
                                                name="quantity">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">minquantity</label>
                                            <input id="inputText3" value="0" type="number" class="form-control"
                                                name="minquantity">
                                        </div><div class="form-group">
                                            <label for="inputText3" class="col-form-label">tax</label>
                                            <input id="inputText3" value="0" type="number" class="form-control"
                                                name="tax">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">City</label>
                                            <input id="inputText3" value="0" type="text" class="form-control"
                                                name="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Country</label>
                                            <input id="inputText3" value="0" type="text" class="form-control"
                                                name="country">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Location</label>
                                            <input id="inputText3" value="0" type="text" class="form-control"
                                                name="location">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Image</label>
                                            <input id="inputText3" type="file" name="image" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Add Place</button>
                                        </div>
                                    </form>
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





