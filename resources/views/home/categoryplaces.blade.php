@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')
<div class="container">
<div class="row">
   @foreach ($places as $place)
   <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{Storage::url($place->image)}}" style="height:400px; width:600px">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{$place->location}}</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">{{$place->title}}</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('place', ['id' => $place->id])}}" class="btn btn-primary mt-1">Book Now</a>
                </div>
   @endforeach
</div>

</div>


@endsection
