@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Blog Detail</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Blog Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        @include('home.messages')
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{Storage::url($data->image)}}" alt="">
                                <div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">01</h6>
                                    <small class="text-white text-uppercase">Jan</small>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">

                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>

                            <h2 class="mb-3">{{$data->title}}</h2>

                            @foreach($images as $rs)
                                <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{Storage::url($rs->image)}}">
                                <p>{!!$data->detail!!}</p>
                            @endforeach
                        </div>
                    </div>
                    <!-- Blog Detail End -->

                    <!-- Comment List Start -->
                    <div class="bg-white" style="padding: 30px; margin-bottom: 30px;">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h4>
                        @foreach($comments as $rs)

                            <div class="media mb-3">
                                <img src="{{Storage::url($data->image)}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a href="">{{$rs->user->name}}</a> <small><i>{{$rs->created_at}}</i></small></h6>
                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->comment}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Comment List End -->


                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <img src="img/user.jpg" class="img-fluid mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3">John Doe</h3>
                        <p>Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est  ipsum erat kasd amet elitr</p>
                        <div class="d-flex justify-content-center">
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary px-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Search Form -->
                    <div class="mb-5">
                        <div class="bg-white" style="padding: 30px;">
                            <div class="input-group">
                                <input type="text" class="form-control p-4" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary border-primary text-white"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Design</a>
                                    <span class="badge badge-primary badge-pill">150</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i class="fa fa-angle-right text-primary mr-2"></i>Web
                                        Development</a>
                                    <span class="badge badge-primary badge-pill">131</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Online Marketing</a>
                                    <span class="badge badge-primary badge-pill">78</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Keyword Research</a>
                                    <span class="badge badge-primary badge-pill">56</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a class="text-dark" href="#"><i
                                            class="fa fa-angle-right text-primary mr-2"></i>Email Marketing</a>
                                    <span class="badge badge-primary badge-pill">98</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="{{Storage::url($data->image)}}" style="height:100px; weight:100px">
                            <div class="pl-3">
                                <h6 class="m-1">En sevilen fotoğraflar</h6>
                                <small>Jan 06, 2023</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="{{Storage::url($rs->image)}}" style="height:100px; weight:100px">
                            <div class="pl-3">
                                <h6 class="m-1">En sevilen fotoğraflar</h6>
                                <small>Jan 03, 2025</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid" src="{{Storage::url($data->image)}}" style="height:100px; weight:100px">
                            <div class="pl-3">
                                <h6 class="m-1">En sevilen fotoğraflar</h6>
                                <small>Jan 07, 2027</small>
                            </div>
                        </a>
                    </div>

                    <!-- Tag Cloud -->
                    <div class="col-md-6">
                        <h4 class="text-uppercase">Write Your Comment</h4>
                        <p>Your email address will not be published.</p>
                        <form class="review-form" action="{{route('storecomment')}}" method="post">
                            @csrf
                            <input class="input" type="hidden" name="place_id" value="{{$data->id}}">
                            <div class="form-group">
                                <input class="input" type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="input" name="comment" placeholder="Your Comment"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="input-raiting">
                                    <strong class="text-uppercase">Your Rating:</strong>
                                    <div class="stars">
                                        <input type="radio" id="star5" name="rate" value="5"><label for="star5"></label>
                                        <input type="radio" id="star4" name="rate" value="4"><label for="star4"></label>
                                        <input type="radio" id="star3" name="rate" value="3"><label for="star3"></label>
                                        <input type="radio" id="star2" name="rate" value="2"><label for="star2"></label>
                                        <input type="radio" id="star1" name="rate" value="1"><label for="star1"></label>
                                    </div>
                                </div>
                            </div>
                            @auth
                                <button class="primary-btn">Submit</button>
                            @else
                                <a href="/login" class="primary-btn">For Submit Your Comment,Please Login</a>
                            @endauth
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>
    </div>


@endsection
