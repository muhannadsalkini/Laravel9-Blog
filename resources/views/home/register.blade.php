@extends('layouts.frontbase')

@section('title', 'User Registration Page | ')


 @section('content')
 <div id="breadcrumb">
     <div class="container">
         <ul class="breadcrumb">
             <li><a href="{{route('home')}}">Home / </a></li>
             <li class="active"> User Registration</li>
         </ul>
    </div>
</div>  

<div class="section">

<div class="container">

<div class="row">
    <div class="col-md-12">
    @include('auth.register')
</div>
</div>
</div>
</div>


@endsection