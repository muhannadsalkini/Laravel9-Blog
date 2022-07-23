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
                   <h3 class="title">User Comments & Reviews</h3>
               </div>
               <div class="input-checkbox">
               <table class="table table-striped">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Place
                        </th>
                        <th>
                            Subject
                        </th>
                        <th>
                            Comment
                        </th>
                        <th>
                            Rate
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
                  @foreach( $comments as $rs)
                  <tr>
                    <td>{{$rs->id}}</td>
                    <td>@if($rs->place)<a href="{{route('place',['id'=>$rs->place_id])}}">
                            {{$rs->place->title}}@endif</a>
                     </td>
                    <td>{{$rs->user->name}}</a></td>
                    <td>{{$rs->subject}}</td>
                    <td>{{$rs->comment}}</td>
                    <td>{{$rs->rate}}</td>
                    <td>{{$rs->status}}</td>


                    <td><a href="{{route('userpanel.commentdestroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm" onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>

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
