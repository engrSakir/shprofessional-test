<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="UTF-8">
    <title>SHProfessional Admin</title>
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
    <!-- jQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Custom styles for this template -->
    <link href="{{ url('css/simple-sidebar.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/2ea3e58683.js"></script>
    <style>
        .list-group .list-group-item {
            background: #181818 !important;
            color: #fff !important;
            border: none !important;
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
        }
        }

    </style>

<body style="box-shadow:noneimoprtant;" class="grey lighten-3 text-font">

    <div class="d-flex " id="wrapper">
        <!-- Sidebar -->
        <div class="" id="sidebar-wrapper" style="box-shadow:none!important;background:#181818;">
            <div class="sidebar-heading white-text my-3 mt-5">
                <a href="{{ route('super-admin.index') }}" style="color:yellow">
                    <br>
                    <br>
                    <h6 class="h4 h4-responsive">Super Admin Management</h6>
                </a>
            </div>
            <div class="list-group">
                <a href="{{ route('admin.doc.show') }}" class="list-group-item"
                    style="border-bottom:1px solid #ffffff73!important;">Documents</a>
            </div>
            <hr>
            <div class="sidebar-heading white-text my-3">
                <h4 class="h4 h4-responsive">All Clients</h4>
            </div>
            <hr>
            <div class="list-group">
                @foreach (@App\User::all() as $key => $user)
                    <a href="{{ route('admin.user', $user->id) }}" class="list-group-item @if ($key==0) active @endif"
                        style="border-bottom:1px solid #ffffff73!important;">{{ $user->name }}</a>

                @endforeach
                <br>
                <br>
                <br>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">


            <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar py-3"
                style="box-shadow:none!important">
                <div class="container-fluid">
                    <!-- Collapse -->

                    <!--<button class="" id="menu-toggle">-->
                    <!--              <i class="fa fa-bars">-->

                    <!--              </i>-->
                    <!--          </button>-->

                    <!-- Links -->

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <a class="navbar-brand black-text" href="{{ url('/admin/home') }}">SHProfessional</a>


                        <ul class="navbar-nav ml-auto">


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ @Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

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

            <div class="container-fluid text-font">
                @yield('content')
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <!-- JQuery -->

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
    <!--<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>-->
    <!--<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>-->

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>
