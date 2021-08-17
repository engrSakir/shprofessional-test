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
<body style="background:#F2F2F2;">
<section >
    <div class="container pt-5 mt-5">
        <div class="row justify-content-center  py-5">
            <div class="col-md-5">
            <h3 class="h3 h3-responsive text-uppercase text-center pb-4"><a href="{{url('/')}}" class="black-text">{{ __('SHProfessional') }}</a></h3>
                <div class="card" style="box-shadow:none;">
                    <div class="card-body px-4 text-font">
                        <h4 class="h4 h4-responive text-center py-2">Admin Login</h4>
                    <form method="POST" action="{{route('admin.login.post')}}">
                            @csrf
                            <!-- Password -->
                            <div class="md-form">
                                 <input id="email" type="email" class="form-control " name="email" value="" required ="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="email" class="">{{ __('E-Mail Address') }}</label>
                            </div>
                            <!--<div class="form-group row">-->
                            <!--    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

                            <!--    <div class="col-md-6">-->
                            <!--        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->

                            <!--        @error('email')-->
                            <!--            <span class="invalid-feedback" role="alert">-->
                            <!--                <strong>{{ $message }}</strong>-->
                            <!--            </span>-->
                            <!--        @enderror-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- Password -->
                                  <div class="md-form">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                     <label for="password" class="">{{ __('Password') }}</label>
                                  </div>
                            <!--<div class="form-group row">-->
                            <!--    <label for="password" class="">{{ __('Password') }}</label>-->

                            <!--    <div class="col-md-6">-->
                            <!--        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->

                            <!--        @error('password')-->
                            <!--            <span class="invalid-feedback" role="alert">-->
                            <!--                <strong>{{ $message }}</strong>-->
                            <!--            </span>-->
                            <!--        @enderror-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="row">
                                <div class="col-md-11 ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label  class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                             {{-- <div class="col-md-7">
                                    @if (Route::has('password.request'))
                                        <a class="black-text text-right" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    </div> --}}
                                    <div class="text-center m-auto py-3">
                                         <button type="submit" class="btn btn-custom white-text px-5 my-2">
                                        {{ __('Login') }}
                                    </button>
                                    </div>


                                    </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
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
