@extends('layouts.user')

@section('content')
<main class="pt-2 mx-lg-5">
    <div class="container-fluid mt-5 pt-4">
        
            <div class="row ">
                <div class="col-md-7">
                    <!-- Material form login -->
            <div class="card px-lg-5 py-5">
              <h3 class="h3-responsive mb-4">Edit Profile</h3>
                <!--Card content-->
                <div class="card-body ">

                  <!-- Form -->
                <form  style="color: #757575;" action="{{route('pro.update')}}" method="POST" enctype="multipart/form-data">
                  @csrf 
                  <!-- Email -->
                    <div class="md-form">
                    <input type="text" name="client-id" class="form-control" disabled placeholder="SMT{{@Auth::user()->id}}">
                      <label for="">Client Id</label>
                    </div>
                    <img src="{{asset('uploads/users/'.@Auth::user()->profile_image)}}" width="100" >
                    <div class="form-group">
                        <label for="">Profile Photo</label>
                      <input type="file" name="image" class="form-control">
                    </div>
                    <!-- Password -->
                    <div class="md-form">
                    <input type="text" name="name"  class="form-control" value="{{@Auth::user()->name}}">
                      <label for="">Full Name</label>
                    </div>
                    <div class="md-form">
                        <input type="email" name="email"  class="form-control" value="{{@Auth::user()->email}}">
                        <label for="">Email</label>
                    </div>
                    <div class="md-form">
                        <textarea  class="form-control md-textarea" rows="3" name="address">{{@Auth::user()->address}}</textarea>
                        <label for="">Address</label>
                    </div>

                    <div class="md-form">
                        <input type="text" name="mobile"  class="form-control" value="{{@Auth::user()->mobile}}">
                        <label for="">Phone Number</label>
                    </div>
                  

                    <!-- Sign in button -->
                    <button class="btn btn-custom text-white btn-block my-4 waves-effect z-depth-0" type="submit">Chnage Profile</button>


                  </form>
                  <!-- Form -->

                </div>

              </div>

                </div>

    </div>
</main>
@endsection
