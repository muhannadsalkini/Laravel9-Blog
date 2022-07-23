@extends('layouts.frontbase')

@section('title', 'User Panel')


 @section('content')
 <div id="breadcrumb">
     <div class="container">
         <ul class="breadcrumb">
             <li><a href="{{route('home')}}">Home / </a></li>
             <li class="active"> User Panel</li>
         </ul>
    </div>
</div>  

<div class="section">

<div class="container">

<div class="row">
       <div class="col-md-2">
       <div class="billing-details">
           <div class="section-title">
               <h3 class="title">User Menu</h3>
            </div>
            @include('home.user.usermenu')
        </div>
        </div>

           <div class="col-md-10">
           <div class="shiping-methods">
               <div class="section-title">
                   <h3 class="title">User Profile</h3>
               </div>
               <div class="input-checkbox">
                @include('profile.show')
               </div>
           
</div>
</div>

</div>

</div>






@endsection