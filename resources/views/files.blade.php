@extends('layouts.user')

@section('content')
<main class="pt-2 mx-lg-5">
    <div class="container-fluid mt-5 pt-5">
        <div class=" card py-5 px-4 text-font" style="box-shadow:none;">
                            <h4 class="h4 h4-responsive py-2 px-5"> Select Location </h4>

            <!--<div class="row">-->
            <!--    <div class="col-md-2">-->
            <!--        <select class="browser-default custom-select">-->
            <!--            <option vlaue="">-->
            <!--                All-->
            <!--            </option>-->
            <!--            <option>-->
            <!--                Today-->
            <!--            </option>-->
            <!--        </select>-->
            <!--    </div>-->
            <!--    <div class="col-md-6">-->
                    <!-- Card -->
                    <!-- Card -->
            <!--    </div>-->
                
            <!--</div>-->
            <div class="row px-5 py-4">
                <div class="col-md-3" >
                    <a href="{{route('location-file','x')}}" class="black-text">
                    <div class=" ">
                      <!-- Card content -->
                     
                          <div class="card-body text-center" style="border:1px solid #dee2e6;    border-radius: 0.2rem;">
                                                     <img src="{{url('svg/folder.png')}}" class="img img-fluid" style="width:60%">

                    
                        <!-- Title -->
                        <h5 class="h5 h5-responsive pt-3">Input</h5>
                        <!-- Text -->
                       
                    
                      </div>
                    </div> 
                    </a>
                </div>
                <div class="col-md-3" >
                     <a href="{{route('location-file','y')}}" class="black-text">
                    <div class=" ">
                      <!-- Card content -->
                      <div class="card-body text-center" style="border:1px solid #dee2e6;    border-radius: 0.2rem;">
                       <img src="{{url('svg/folder.png')}}" class="img img-fluid" style="width:60%">

                        <!-- Title -->
                        <h5 class="h5 h5-responsive pt-3">
                           Output</h5>
                        <!-- Text -->
                       
                    
                      </div>
                    
                    </div>
                    </a>
                </div>
                
                <div class="col-md-3" >
<a href="{{route('location-file','z')}}" class="black-text">
                     <div class=" ">
                      <!-- Card content -->
                      <div class="card-body text-center" style="border:1px solid #dee2e6;    border-radius: 0.2rem;">
                                           <img src="{{url('svg/folder.png')}}" class="img img-fluid" style="width:60%">

                        <!-- Title -->
                        <h5 class="h5 h5-responsive pt-3">Correspondence</h5>
                        <!-- Text -->
                       
                    
                      </div>
                    
                    </div>
                    </a>
            </div>
            
            <div class="col-md-3" >
<a href="{{route('location-file','o')}}" class="black-text">
                     <div class=" ">
                      <!-- Card content -->
                      <div class="card-body text-center" style="border:1px solid #dee2e6;    border-radius: 0.2rem;">
                                           <img src="{{url('svg/folder.png')}}" class="img img-fluid" style="width:60%">

                        <!-- Title -->
                        <h5 class="h5 h5-responsive pt-3">Others</h5>
                        <!-- Text -->
                       
                    
                      </div>
                    
                    </div>
                    </a>
            </div>
            
            </div>
            
        
          
            
        
    </div>
    </div>
</main>

@endsection
