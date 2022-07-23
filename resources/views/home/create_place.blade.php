@extends('layouts.frontbase')

@section('title', 'About Us | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon) )

@section('content')
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="dashboard-wrapper">
                <div class="container-fluid dashboard-content">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3>Add a new Place </h3>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="section-block" id="basicform">Add Place</div>
                                    <div class="card">
                                        <div class="card-body">

                                            <form action="{{ route('userplace.store') }}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Category</label>
                                                    <select class="form-control" name="category_id">
                                                        @foreach ($data as $rs)
                                                            <option value="{{ $rs->id }}">
                                                                {{ $rs->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Type</label>
                                                    <select class="form-control" name="type">
                                                        <option value="place">Place</option>
                                                        <option value="activity">Activity</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Country</label>
                                                    <input id="inputText3" type="text" class="form-control" name="country">
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">City</label>
                                                    <input id="inputText3" type="text" class="form-control" name="city">
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputText3" class="col-form-label">Location</label>
                                                    <input id="inputText3" type="text" class="form-control" name="location">
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
                                                    <label for="inputText3" class="col-form-label" >Image</label>
                                                    <input id="inputText3" type="file" name="image" class="form-control" >
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

            </div>
        </div>
@endsection
