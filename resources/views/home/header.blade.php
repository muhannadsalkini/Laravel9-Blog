@php
    $settings = App\Models\Setting::first();
@endphp
<!-- Topbar Start -->
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p><i class="fa fa-envelope mr-2"></i>{{$settings->email}}</p>
                    <p class="text-body px-3">|</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>{{$settings->phone}}</p>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">



                    <div class="pull-right">
                        @auth
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #656565">{{Auth::user()->name}}</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <ul>
                                    <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user-o"></i>My Profile</a><br></li>
                                    <li><a href="{{route('userpanel.reviews')}}"><i class="fa fa-exchange"></i>My Reviews</a></li>
                                    <li><a href="{{route('userplace.index')}}"><i class="fa fa-exchange"></i>My Places</a></li>
                                    <li><a href="/logoutuser" class="text-uppercase">Logout</a></li>
                                </ul>
                            </div>
                        @endauth
                        @guest
                            <a href="/loginuser" class="text-uppercase">Login</a> / <a href="/registeruser" class="text-uppercase">Join</a>
                            @endguest

                            </ul>
                    </div>


                    <a class="text-primary px-3" href="{{$settings->facebook}}" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-3" href="{{$settings->twitter}}" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-3" href="{{$settings->facebook}}" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-3" href="{{$settings->facebook}}" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-3" href="{{$settings->youtube}}" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">

        @php
            $mainCategories= \App\Http\Controllers\HomeController::maincategorylist();
        @endphp

        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{ route('home') }}" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            @include('home._category')
                        </div>
                    </div>
                    <a href="{{route('faq')}}" class="nav-item nav-link">Faq</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
