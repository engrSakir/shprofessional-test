@extends('layouts.layout')
@section('content')
<section style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('svg/smarttax.jpg');background-size:cover;">
    <div class="container text-white py-5">
            <div class="row   py-5">
                <div class="col-md-6 text-center d-none d-md-block">
            <h1 class="h1 h1-responsive pt-5 mt-5" style="font-size:52px;">30 Years of Experience</h1>
        <p class=" " style="letter-spacing:1px;">Our tax professionals help clients meet regulatory obligations, reduce tax burdens, and navigate complex regulations around the world.</p><a href="" class="btn btn-custom px-5 white-text">Register Now</a>
            </div>
            <div class="col-md-1 d-none d-sm-block">
                
            </div>
        <div class="col-md-5">
            <div class="card pt-3 pb-3" style="box-shadow:none;">
                <div class="card-body px-4 text-font">
                                 <h3 class="h3 h3-responsive text-uppercase text-center black-text pb-4">{{ __('Login SHProfessional') }}</h3>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Password -->
                        <div class="md-form">
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required ="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                            <div class="col-md-5 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label  class="form-check-label black-text" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                         <div class="col-md-7">
                                @if (Route::has('password.request'))
                                    <a class="black-text text-right" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                                <div class="text-center m-auto py-3">
                                     <button type="submit" class="btn btn-custom white-text px-5 my-2">
                                    {{ __('Login') }}
                                </button>
                                </div>
                                 

                                </div>
                               
                                                                 <p class="text-center black-text pt-3">Not a member?<a href="{{url('register')}}" class="text-danger"> Register</a> </p>

                      
                    </form>
                </div>
            </div>
        </div>
    </div>

<!--        <div class="row pt-3">-->
<!--            <div class="col-md-6 ml-auto">-->
<!--            <h1 class="h1 h1-responsive  pt-5 mt-5" style="font-size:50px;">30 Year Of Experience</h1>-->
<!--        <p class=" " style="letter-spacing:1px;">-->
<!--Have 30 years of combined experience helping our clients.-->
<!--.</p>-->
<!--        <a href="{{url('login')}}" class="btn btn-custom px-5 white-text">Login Now</a>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</section>
<!--why smarttax-->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Why SHProfessional</p>
                <h3 class="h3 h3-responsive">
               Tax partners continuously monitors and analyze changing tax legislation
                </h3>
                <p class="pt-3 text-justify">We are two CPA partners have 30 years of combined experience helping our clients with their: individual, corporate and business tax and audit, full cycle accounting, reporting and budgeting. Our mission is to provide tax, accounting and business advisory that meets the client’s individual needs and expectations.<br> We think beyond our client’s bottom line. We find ways to advance the interests of our clients to strengthen their ability to compete in the global marketplace. We take the time to understand each client’s business and to put our effort and time in fulfilling both their business and personal goals.<br> Furthermore, we anticipate the client’s needs, promptly respond to their inquiries and deal with concerns in a manner consistent with the business and professional ethics as well as sound judgement.</p>
            </div>
            <div class="col-md-6 pt-5">
                <img src="{{url('svg/whysmart.jpg')}}" class="immg img-fluid">
            </div>
            <!--<a href=" " class="btn btn-custom btn-md white-text px-5">See More</a>-->
        </div>
    </div>
</section>
<section class="py-5" style="background:#181818;">
    <div class="container text-white py-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <h1 class="h1 h1-responsive text-center ">Tax</h1>
        <p class="text-center px-5 py-3">
Our tax professionals help clients meet regulatory obligations, reduce tax burdens,<br> and navigate complex regulations around the world.</p>
        <div class="text-center">
            <a href="" class="btn btn-md btn-custom px-5">
            Register Now
            </a>
        </div>
    </div>
    <div class="carousel-item">
     <h1 class="h1 h1-responsive text-center ">Accounting</h1>
        <p class="text-center px-5 py-3">
        Across industries and continents, SHPC provides clients with the resources needed to create<br> clarity, minimize risk, and solve today’s most complex challenges.
</p>
        <div class="text-center">
            <a href="" class="btn btn-md btn-custom px-5">
            Register Now
            </a>
        </div>
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
       
    </div>
</section>

<!--products-->
<section class="py-5" style="background:#F6F6F6;">
    <div class="container py-3">
        <div class="row py-4">
            <div class="col-md-4">
                <!-- Card -->
                <div class="card card-product" style="box-shadow:none;border-bottom:3px solid #1BBCAA;">

                <!-- Card image -->
                <img class="card-img-top" src="{{asset('svg/client.jpg')}}" alt="Our Clients">

                <!-- Card content -->
                <div class="card-body text-center py-4">

                <!-- Title -->
                <h4 class="card-title"><a class="site-color">Our Clients</a></h4>
                <!-- Text -->
                <p class="card-text" style="font-family: 'Raleway', sans-serif!important;">
                    Our clients are individuals and small and mid-sized businesses, privately-owned enterprises and self-employed persons of various professions such as doctors, dentists, pharmacists, lawyers, social workers, cab drivers, food caterers and many more. We assist all clients to experience smooth and accurate business set-up, expansion, maturity and liquidation addressing technical aspects in orders them to stay focused on their specialized areas.
                     </p>
                </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-md-4">
                <!-- Card -->
                <div class="card card-product" style="box-shadow:none;border-bottom:3px solid #1BBCAA;">

                <!-- Card image -->
                <img class="card-img-top" src="{{asset('svg/manag.jpg')}}" alt="Owner-Manager Business">

                <!-- Card content -->
                <div class="card-body text-center py-4">

                <!-- Title -->
                <h4 class="card-title"><a class="site-color">Owner-Manager Business</a></h4>
                <!-- Text -->
                <p class="card-text pb-4 mb-4">As an owner and manager, you are responsible for the strategic direction of the company and perform daily functions. This means that your attention is constantly diverted from long-range strategy to more short-term management of crises. Our focus is to provide business advisory and perform accounting functions to keep you focused in your areas of specialty.</p>
                </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-md-4">
                <!-- Card -->
                <div class="card card-product" style="box-shadow:none;border-bottom:3px solid #1BBCAA;">

                <!-- Card image -->
                <img class="card-img-top" src="{{asset('svg/money-2724245_1920.jpg')}}" alt="Privately Held Companies">

                <!-- Card content -->
                <div class="card-body text-center py-4">

                <!-- Title -->
                <h4 class="card-title"><a  class="site-color">Privately Held Companies</a></h4>
                <!-- Text -->
                <p class="card-text pb-4">Having rigorous experience in a diverse range of industries, Saiful & Hafizur Professional Corporation has a focus of lending to the needs of the privately held companies. Our mission is to provide our client with the expertise and resources to coup with the ever-changing challenges in the market place while maintaining the close relationship and attention you would expect to receive from your local CPA. </p>
                </div>

                </div>
                <!-- Card -->
            </div>
         </div>
    </div>
</section>

@endsection
