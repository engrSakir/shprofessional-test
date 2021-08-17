@extends('layouts.layout')
@section('content')
<section style="background:linear-gradient(rgba(27,188,160,0.5),rgba(27,188,160,0.5)),url('svg/services.jpeg');background-size:cover;">
    <div class="container py-3">
        <div class="py-5">
            <h1 class="white-text text-center h1 h1-responsive ">Why shprofessional</h1>
            <p class="text-font text-center text-white">
            <a href="{{url('/')}}" class="white-text"> Home</a>/Why shprofessional
            </p>

        </div>
    </div>
</section>
<!--why smarttax-->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Why shprofessional</p>
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
@endsection