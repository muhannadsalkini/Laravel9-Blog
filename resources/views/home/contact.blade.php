@extends('layouts.frontbase')

@section('title', 'Contact | '. $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon) ) 

 @section('content')
 <div id="breadcrumb">
     <div class="container">
         <ul class="breadcrumb">
             <li><a href="{{route('home')}}">Home / </a></li>
             <li class="active"> Contact</li>
         </ul>
    </div>
</div>  

<div class="section">

<div class="container">

<div class="row">
       <div class="col-md-4">
           <div class="section-title">
               <h3 class="title">Contact Form</h3>
            </div>
            @include('home.messages')
            <form id="checkout-form" action="{{route('storemessage')}}" class="clearfix" method="post">
                @csrf
            <div class="form-group">
                <input class="input" type="text" name="name" placeholder="Name & Surname">
            </div>
            <div class="form-group">
                <input class="input" type="tel" name="phone" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input class="input" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="input" type="text" name="subject" placeholder="Subject">
            </div>
            <div class="form-group">
                <textarea class="input" type="text" name="message" placeholder="Your Message"></textarea>
            </div>
            <div class="form-group">
                <input class="input" type="submit" value="Send Message">
            </div>
           </div>
           </div>

           <div class="col-md-8">
           <div class="shiping-methods">
               <div class="section-title">
                   <h3 class="title">Contact Information</h3>
               </div>
               <div class="input-checkbox">
               {!! $setting->contact !!}
               </div>
</form>
               
</div>
</div>

</div>
</div>
</div>


@endsection