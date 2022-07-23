<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title')</title>
      <meta name="description" content="@yield('description')">
      <meta name="keywords" content="@yield('keywords')">
      <meta name="author" content="İrem Kosar">
      <link rel="icon" type="image/x-icon" href="@yield('icon')">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('assets') }}/admin/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/custom.css" />

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      @yield("head")
      @yield('css')
      @yield('javascript')
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            @include('admin._sidebar')

            <div id="content">
               @include('admin._header')
               <div class="midde_cont">
                  @yield('content')
                  @include('admin._footer')
               </div>
            </div>
       
       
           

         </div>
      </div>
      <script src="{{ asset('assets') }}/admin/js/jquery.min.js"></script>
      <script src="{{ asset('assets') }}/admin/js/popper.min.js"></script>
      <script src="{{ asset('assets') }}/admin/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="{{ asset('assets') }}/admin/js/animate.js"></script>
      <!-- select country -->
      <script src="{{ asset('assets') }}/admin/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="{{ asset('assets') }}/admin/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="{{ asset('assets') }}/admin/js/Chart.min.js"></script>
      <script src="{{ asset('assets') }}/admin/js/Chart.bundle.min.js"></script>
      <script src="{{ asset('assets') }}/admin/js/utils.js"></script>
      <script src="{{ asset('assets') }}/admin/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('assets') }}/admin/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('assets') }}/admin/js/custom.js"></script>
      <script src="{{ asset('assets') }}/admin/js/chart_custom_style1.js"></script>

   </body>
</html>
