@extends('layouts.layout')
@section('content')
<section style="background:linear-gradient(rgba(27,188,160,0.5),rgba(27,188,160,0.5)),url('svg/services.jpeg');background-size:cover;">
    <div class="container py-3">
        <div class="py-5">
            <h1 class="white-text text-center h1 h1-responsive ">Contact Us</h1>
            <p class="text-font text-center text-white">
            <a href="{{url('/')}}" class="white-text"> Home</a>/Contact
            </p>

        </div>
    </div>
</section>
<div class="container my-5 py-5 ">


  <!--Section: Content-->
  <section class=" text-center text-lg-left dark-grey-text">

    <style>
      .map-container {
        height: 300px;
        position: relative;
      }

      .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
      }
    </style>

    <!--Google map-->
    

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-5  mb-0 mb-md-0">

        <h3 class="font-weight-bold">Saiful & Hafizur Professional Corporation</h3>

       
        <p><span class="font-weight-bold mr-2 text-font">Email:</span>info@shprofessional.ca</p>
        <p><span class="font-weight-bold mr-2 text-font">Address:</span>2972 Danforth Ave
East York, Ontario, Canada
M4C 1M6</p>
            <div class="row">
                <div class="col-md-6"> <p><span class="font-weight-bold mr-2">Cell:</span>(647) 351 0622</p>
            </div>
                <div class="col-md-6"> <p><span class="font-weight-bold mr-2">Fax:</span> 647 348 9022</p>
            </div>
               
            </div>
               </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-7  mb-4 mb-md-0">
        @include('partials.alert')
     <form class="" style="color: #757575;" id="contact-form" name="contact-form" action="{{route('mail')}}" method="POST">
                        @csrf
                        

            <!-- Material outline input -->
            <div class="md-form md-outline mb-0">
              <input type="text" id="name" name="name" class="form-control">
              <label for="">Full name</label>
            </div>
        <!--Grid row-->

        <!-- Material outline input -->
        <div class="md-form md-outline mt-3">
          <input type="email" id="email" name="email" class="form-control">
          <label for="email">E-mail</label>
        </div>

        <!-- Material outline input -->
        <div class="md-form md-outline">
          <input type="text" id="subject" name="subject" class="form-control">
          <label for="subject">Subject</label>
        </div>

        <!--Material textarea-->
        <div class="md-form md-outline mb-3">
          <textarea name="message" id="message" class="md-textarea form-control" rows="3"></textarea>
          <label for="message">How we can help?</label>
        </div>

        <button type="submit" class="btn btn-custom px-5 white-text btn-md ml-0">Submit<i class="fa fa-paper-plane ml-2"></i></button>

      </div>
      <!--Grid column-->
</form>
    </div>
    <!--Grid row-->


  </section>
  <!--Section: Content-->
<div id="map-container-google-1" class="z-depth-1 map-container mt-5">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2884.947828932974!2d-79.292675!3d43.690848!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cc20f65cd5f9%3A0x2188fb50415c911f!2s2972%20Danforth%20Ave%2C%20East%20York%2C%20ON%20M4C%201M6%2C%20Canada!5e0!3m2!1sen!2sbd!4v1587997145281!5m2!1sen!2sbd"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!--Google Maps-->

</div>


@endsection
