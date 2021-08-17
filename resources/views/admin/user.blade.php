@extends('layouts.app')
@section('content')
<main class="pt-2 mx-lg-5">
      <div class="container-fluid mt-5 pt-5">
    <section class="container">
        
    <div class="card mt-4 px-5 py-3" style="box-shadow:none;">
        <div class="row py-5">
            <div class="col-md-5" >
                 <div class="" >
                    <img src="{{asset('uploads/users/'.$user->profile_image)}}" width="100" class="img-thumbnail mb-3">
                    <h3 class="">{{$user->name}}</h3>
                    <p><b>Client Id:</b> SMT{{$user->id}} <br><b>Contact:</b> {{$user->mobile}}<br> <b>Email:</b>  {{$user->email}}<br> <b>Address:</b> {{$user->address}}</p>
                </div>
            </div>
            <div class="col-md-7" style="border-left:1px solid #000;">
                <h3 class="pb-2 h3 h3-responsive">Documents :</h3>
                
                <div class="col-md-12  p-2 mb-1" style="border:1px solid #dee2e6">
                    
                        <a href="{{route('admin.files',[$user->id,'x'])}}">
                            <div class="row">
                                <div class="col-md-2">
                                     <img src="{{url('svg/folder.png')}}" class="img img-fluid" >
                                </div>
                                <div class="col-md-7">
                                    <p class=" pt-2 black-text">Input</p>
                                </div>
                            </div>
                        </a>
                    
                </div>
                
                <div class="col-md-12  p-2 mb-1" style="border:1px solid #dee2e6">
                    
                        <a href="{{route('admin.files',[$user->id,'y'])}}">
                            <div class="row">
                                <div class="col-md-2">
                                     <img src="{{url('svg/folder.png')}}" class="img img-fluid" >
                                </div>
                                <div class="col-md-7">
                                    <p class=" pt-2 black-text">Output</p>
                                </div>
                            </div>
                        </a>
                    
                </div>
                
                 <div class="col-md-12  p-2 mb-1" style="border:1px solid #dee2e6">
                   
                        <a href="{{route('admin.files',[$user->id,'z'])}}">
                             <div class="row">
                                <div class="col-md-2">
                                     <img src="{{url('svg/folder.png')}}" class="img img-fluid" >
                                </div>
                                <div class="col-md-7">
                                    <p class=" pt-2 black-text">Correspondence</p>
                                </div>
                            </div>
                        </a>
                    
                </div>
                
                <div class="col-md-12  p-2 mb-1" style="border:1px solid #dee2e6">
                   
                        <a href="{{route('admin.files',[$user->id,'o'])}}">
                             <div class="row">
                                <div class="col-md-2">
                                     <img src="{{url('svg/folder.png')}}" class="img img-fluid" >
                                </div>
                                <div class="col-md-7">
                                    <p class=" pt-2 black-text">Others</p>
                                </div>
                            </div>
                        </a>
                    
                </div>
       
            </div>
        </div>
       
        
        
    </div>
       
    </section>
        </div>

    </main>
@endsection

