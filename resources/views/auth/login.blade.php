@extends('layouts.layout')

@section('content')
<section style="background:#F2F2F2;">
<div class="container py-4">
    <div class="row justify-content-center  py-5">
        <div class="col-md-5">
             <h3 class="h3 h3-responsive text-uppercase text-center pb-4">{{ __('Login SmartTax') }}</h3>
            <div class="card" style="box-shadow:none;">
                <div class="card-body px-4 text-font">
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

                                    <label  class="form-check-label" for="remember">
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
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
