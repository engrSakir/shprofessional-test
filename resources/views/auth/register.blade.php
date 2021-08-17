@extends('layouts.layout')

@section('content')
<section style="background:#F2F2F2;">
<div class="container py-4" >
    <div class="row justify-content-center py-5">
        <div class="col-md-5">
            <h3 class="h3 h3-responsive text-uppercase text-center pb-4">Create Account</h3>
            <div class="card" style="box-shadow:none;">

                <div class="card-body px-4">
                    <form method="POST" action="{{ route('register') }}" class="text-font">
                        @csrf

                        <div class="form-group ">
                            <div class="md-form">
                                <label for="name" >{{ __('Full Legal Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="md-form">
                                <input type="number" id="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                               maxlength="10" min=0>
                                <label for="mobile"> {{ __('Phone Number') }}</label>
                              </div>
                        </div>

                        <div class="form-group ">
                            <div class="md-form">
                            <label for="email" class="">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="md-form">
                            <label for="password" class="">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                               <p style="font-size:12px;" class="text-danger">combination of alphanumeric, numbers, special character</p>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="md-form">
                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="defaultUnchecked" required>
                                    <label class="custom-control-label" for="defaultUnchecked">Terms & Condition</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <a href="{{url('login')}}" class="black-text">
                                    Already have an account? <span class="text-danger">Login</span>.
                                </a>
                            </div>
                        </div>


                        <div class="form-group row mb-0 mt-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-custom btn-md px-5 text-white">
                                    {{ __('Submit') }}
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
