@extends('layouts.layout')

@section('content')
<section style="background:#F2F2F2;">

<div class="container py-4">
    <div class="row justify-content-center py-5">
        <div class="col-md-5">
            <h3 class="h3 h3-responsive text-uppercase text-center pb-4">{{ __('Reset Password') }}</h3>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        
                        <!-- email -->
                          <div class="md-form">
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="email">{{ __('E-Mail Address') }}</label>
                          </div>

                        <div class="md-form">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="password" class="">{{ __('Password') }}</label>

                           
                        </div>

                        <div class="md-form">
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                            
                        </div>

                        <div class=" mb-0">
                            <div class="text-center">
                                <button type="submit" class="btn btn-custom px-5 white-text">
                                    {{ __('Reset Password') }}
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
