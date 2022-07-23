@extends('layouts.admin')
@section('title','Add Category List')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
<div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <h3>Add Faq</h3>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <span class="col-sm-2" style="margin-left:870px;">
                  <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active"> Add Faq</li>
                  </ol>
                </span>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                <h3 class="card-title">Faq Elements</h3>
                            </div>
                            <div class="card">
                                <div class="card-body">     
                                    <form role="form" action="{{ route('admin.faq.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Question</label>
                                            <input type="text" class="form-control" name="question" placeholder="Question">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Answer </label>
                                            <textarea class="form-control" id="answer" name="answer">
                                            </textarea>
                                            <script>
                                                ClassicEditor
                                                  .create( document.querySelector( '#answer' ) )
                                                  .then( editor => {
                                                  console.log( editor );
                                                } )
                                                  .catch( error => {
                                                  console.error( error );
                                                } );
                                           </script>
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option selected="selected">False</option>
                                                <option>True</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button class="btn btn-primary" type="submit">Add Faq</button>
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





