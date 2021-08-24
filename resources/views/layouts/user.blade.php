<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="UTF-8">
    <title>SHProfessional</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;1,300&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <link href="{{ url('css/adminstyle.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style>
        .list-group .list-group-item {
            background: #181818 !important;
            color: #fff !important;
            border: none !important;
        }

        .photo-edit {
            margin-top: -44px;
            width: 37px;
            height: 37px;
            background: #181818;
            border-radius: 50px;
            margin-left: 145px;
            position: absolute;
        }

        .more-action {
            transform: translate3d(45px, 350px, 0px) !important;
        }

        .dropdown-item:active {
            background: #fff;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgb(255, 255, 255);

    </style>

</head>

<body class="grey lighten-3">
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar py-3"
            style="box-shadow:none!important">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
                    <strong class="blue-text"></strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a class="navbar-brand black-text" href="{{ url('/') }}">SHProfessional</a>

                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item px-2">
                            <a href="{{ url('/') }}" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link " href="#">Why SHProfessional</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link " href="{{ url('partners') }}">Partners</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link " href="{{ url('services') }}">Services</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link " href="{{ url('contactus') }}">Contact Us</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown mr-5 pr-5">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('profile') }}">My Profile</a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>


                </div>

            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed " style="box-shadow:none!important;background:#181818;">
            <div class="text-center m-auto py-2">

                <img src="{{ asset('uploads/users/' . Auth::user()->profile_image) }}" width="150" height="150" alt=""
                    class="rounded-circle">
                <a href="{{ url('profile') }}">

                    <div class="photo-edit p-2" data-toggle="tooltip" title="Edit Image">
                        <i class="fa fa-edit text-white " style="font-size:15px;"></i>

                    </div>
                </a>
                <h4 class="h4 p-0 m-0 h4-responsive text-white text-center pt-3">{{ @Auth::user()->name }}</h4>
                <p class="text-white">{{ @Auth::user()->email }}</p>
                <hr>


            </div>
            <div class="list-group list-group-flush">
                <a href="{{ url('home') }}" class="list-group-item active waves-effect">
                    <i class="fas fa-chart-pie mr-3"></i>Dashboard
                </a>

                {{-- <a href="#" type="button" id="dropdown" data-toggle="dropdown"   --}}
                {{--     class="  dropdown-toggle multi-level-dropdown list-group-item  list-group-item-action"   --}}
                {{--     aria-haspopup="true" aria-expanded="false" style="border-radius:5px;"><i   --}}
                {{--         class="fa fa-link"></i>&ensp;Links</a>   --}}
                {{-- <ul class="dropdown-menu font-weight-normal  rounded-0 white border-0 z-depth-1">   --}}
                {{--     <li class="dropdown-item p-0">   --}}
                {{--         <a href="{{ url('location') }}" class="dropdown-item w-100">Input</a>   --}}
                {{--     </li>   --}}
                {{--     <li class="dropdown-item p-0">   --}}
                {{--         <a href="{{ url('locationy') }}" class="dropdown-item w-100">Output</a>   --}}
                {{--     </li>   --}}
                {{--     <li class="dropdown-item p-0">   --}}
                {{--         <a href="{{ url('locationz') }}" class="dropdown-item w-100">Correspondence </a>   --}}
                {{--     </li>   --}}
                {{--     <li class="dropdown-item p-0">   --}}
                {{--         <a href="{{ url('locationo') }}" class="dropdown-item w-100">Others </a>   --}}
                {{--     </li>   --}}
                {{-- </ul>    --}}
                <a href="{{ url('files') }}" class=" list-group-item  waves-effect">
                    <i class="fa fa-folder" aria-hidden="true"></i>&ensp;
                    Files
                </a>
                <a href="{{ route('notes') }}" class=" list-group-item  waves-effect">
                    <i class="fa fa-file" aria-hidden="true"></i>&ensp;
                    General Notes
                </a>
                {{-- <a href="{{ route('apiKey') }}" class=" list-group-item  waves-effect">   --}}
                {{--     <i class="fa fa-file" aria-hidden="true"></i>&ensp;   --}}
                {{--     API Key   --}}
                {{-- </a>   --}}

                <!-- Basic dropdown -->

                <!--<a class=" dropdown-toggle list-group-item list-group-item-action waves-effect mt-2" type="button" data-toggle="dropdown"-->
                <!--  aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars mr-3"></i>More Action</a>-->

                <!--<div class="dropdown-menu">-->
                <!--  <a class="dropdown-item" href="#">Links</a>-->
                <!--  <a class="dropdown-item" href="#">Files</a>-->

                <!--</div>-->
                <!-- Basic dropdown -->

                <!--<a href="#" class="list-group-item list-group-item-action waves-effect">-->
                <!--  <i class="fas fa-table mr-3"></i>X Location</a>-->
                <!--<a href="#" class="list-group-item list-group-item-action waves-effect">-->
                <!--  <i class="fas fa-map mr-3"></i>Y Location</a>-->
                <!--<a href="#" class="list-group-item list-group-item-action waves-effect">-->
                <!--  <i class="fas fa-money-bill-alt mr-3"></i>Z Location</a>-->
            </div>

        </div>
        <!-- Sidebar -->

    </header>
    <!--Main Navigation-->
    @yield('content')
    <!--Footer-->
    {{-- <footer class="page-footer text-center font-small mt-5" style="background:#181818;bottom:0px">


   <!--Copyright-->
   <div class="footer-copyright py-3">
     © 2020 Copyright:
     <a href="#" target="_blank"> smartTax </a>
   </div>
   <!--/.Copyright-->

 </footer> --}}
    <!--/.Footer-->

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>
