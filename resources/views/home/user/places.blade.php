@extends('layouts.frontbase')

@section('title', 'User Comments & Reviews')


 @section('content')

     <div id="breadcrumb">
         <div class="container">
             <ul class="breadcrumb">
                 <li><a href="{{route('home')}}">Home / </a></li>
                 <li class="active"> User Comment</li>
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
                             <h3 class="title">User Places</h3>
                             <a style="width: 100px" href="{{route('userplace.create')}}" class="btn btn-block btn-danger btn-sm" >Add Place</a>
                         </div>

                         <div class="input-checkbox">
                             <table class="table table-striped">
                                 <thead>
                                 <tr>
                                     <th>
                                         Id
                                     </th>
                                     <th>
                                         Category
                                     </th>
                                     <th>
                                         Title
                                     </th>
                                     <th>
                                         Keywords
                                     </th>
                                     <th>
                                         Type
                                     </th>
                                     <th>
                                         Country
                                     </th>
                                     <th>
                                         City
                                     </th>
                                     <th>
                                         Location
                                     </th>
                                     <th>
                                         Created At
                                     </th>
                                     <th>
                                         Status
                                     </th>

                                     <th>
                                         Delete
                                     </th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                 @foreach( $places as $rs)
                                     <tr>
                                         <td>{{$rs->id}}</td>
                                         <td>{{$rs->category->title}}</td>
                                         <td>{{$rs->title}}</a></td>
                                         <td>{{$rs->keywords}}</td>
                                         <td>{{$rs->type}}</td>
                                         <td>{{$rs->country}}</td>
                                         <td>{{$rs->city}}</td>
                                         <td>{{$rs->loction}}</td>
                                         <td>{{$rs->created_at}}</td>
                                         <td>{{$rs->status}}</td>


                                         <td><a href="{{route('userplace.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                     </tr>
                                 @endforeach
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
@endsection
