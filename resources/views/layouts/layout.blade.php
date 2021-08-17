<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="UTF-8">
    <title>SHProfessional</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;1,300&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">


</head>
<body>
    

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark py-4" style="box-shadow:none;border-bottom:1px solid #000;">
<div class="container">
  <!-- Navbar brand -->
  <a class="navbar-brand black-text" href="{{url('/')}}">SHProfessional</a>

  <!-- Collapse button -->
  <button class="navbar-toggler black" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item px-2">
      <a class="nav-link " href="{{url('/')}}">Home
        </a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link " href="{{url('whyshprofessional')}}">Why SHProfessional</a>
      </li>
      <li class="nav-item px-2">
        <a class="nav-link " href="{{url('partners')}}">Partners</a>
      </li>
      <li class="nav-item px-2">
      <a class="nav-link " href="{{url('services')}}">Services</a>
      </li>
      <!-- Dropdown -->
      {{-- <li class="nav-item dropdown px-2">
        <a class="nav-link  dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Services</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Accounting</a>
          <a class="dropdown-item" href="#">Taxation</a>
        </div>
      </li> --}}

      <li class="nav-item px-2 mr-4">
        <a class="nav-link " href="{{url('contactus')}}">Contact Us</a>
      </li>
      @guest

      <li class="nav-item px-2 ">
      <a class="nav-link white-text btn  px-4 btn-custom  btn-md" href="{{url('register')}}" style="color:#fff!important;box-shadow:none;">
        Registration/Sign in
        </a>
      </li>
    @endguest
    @auth
     <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{route('home')}}" class="dropdown-item">
                                       My Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endauth


    </ul>
    <!-- Links -->
  </div>
  <!-- Collapsible content -->
  </div>
</nav>
<!--/.Navbar-->
@yield('content')
<!-- Footer -->
<footer class="page-footer font-small ">
    <div style="background-color: #181818;">

    <!-- Footer Links -->
    <div class="container text-center text-md-left pt-3">

        <!-- Footer links -->
        <div class="row text-center text-md-left  py-5">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase  font-weight-bold ">Why SHProfessional</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                <p>Have 30 years of combined experience helping our clients.</p>
                <a href="{{url('register')}}" class="btn btn-outline-white px-5 btn-sm " style="box-shadow: none;">Get Started </a>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-2  mx-auto mt-3">
                <h6 class="text-uppercase  font-weight-bold">Services</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                <p>
                    <a class="" href="#">Accounting</a>
                </p>
                <p>
                    <a class="" href="#">Taxation</a>
                </p>


            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3  mx-auto mt-3">
                <h6 class="text-uppercase font-weight-bold">Links</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                    <a href="{{url('whyshprofessional')}}">Why SHProfessional</a>
                </p>
                <p>
                    <a href="{{url('partners')}}">Partners</a>
                </p>
                <p>
                    <a href="{{url('contactus')}}">Contact Us</a>
                </p>

            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                <p>
                    <i class="fa fa-home mr-3"></i>2972 Danforth Ave, East York, &ensp; &ensp; &ensp; &ensp; &ensp;Ontario M4C 1M6</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i>info@shprofessional.ca</p>
                <p>
                    <i class="fa fa-phone mr-3"></i>647-351-0622 |  647-348-9022</p>
               
            </div>
            <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>

        <!-- Grid row -->
        <div class="row d-flex align-items-center py-3 " >

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">

                <!--Copyright-->
                <p class="text-center text-md-left">© 2020 Copyright: powered by Innovibiz inc.
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    </div>
</footer>
<!-- Footer -->
<!-- Footer -->
</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
<script>

    $(document).ready(function(){
        // $("#modalLoginForm").modal('show');
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if (scroll > 150) {
                $(".navbar").css("background" , "#fff");
            }

            else{
                $(".navbar").css("background" , "");
            }
        })
    })
</script>

</html>
