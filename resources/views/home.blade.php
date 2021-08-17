@extends('layouts.user')

@section('content')
<main class="pt-2 mx-lg-5">
    <div class="container-fluid mt-5 pt-5">
        <div class="col-md-6 card p-4 text-center" style="box-shadow:none;">
        
            
               <p> <img class="img-thumbnail" src="{{asset('uploads/users/'.@Auth::user()->profile_image)}}" width="150" ></p>
                <h3 class="pt-3 font-weight-bold">{{@Auth::user()->name}}</h3>
                <p><b>Client Id:</b> SMT{{@Auth::user()->id}} <br><b>Mobile:</b> {{@Auth::user()->mobile}} <br><b>Email:</b> {{@Auth::user()->email}}<br> <b>Address:</b> {{@Auth::user()->address}}</p>
                
                <a class="btn btn-custom text-white btn-md px-5" href="{{url('profile')}}"> Edit <i class="fa fa-edit"></i></a>
                
            
            
        
    </div>
    </div>
</main>

@endsection
