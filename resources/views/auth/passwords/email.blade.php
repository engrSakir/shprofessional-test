@extends('layouts.layout')

@section('content')
<section style="background:#F2F2F2;">

<div class="container py-4">
    <div class="row justify-content-center py-5">
        <div class="col-md-5">
            <h3 class="h3 h3-responsive text-uppercase text-center pb-4">{{ __('Reset Password') }}</h3>
            <div class="card text-font" style="box-shadow:none;">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <!-- email-sent -->
                          <div class="md-form">
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="email">{{ __('E-Mail Address') }}</label>
                          </div>

                        <div class="form-group  mb-0">
                            <div class="m-auto text-center">
                                <button type="submit" class="btn btn-custom px-5 white-text">
                                    {{ __('Send Password Reset Link') }}
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
