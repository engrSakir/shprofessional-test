@extends('layouts.layout')
@section('content')
<section style="background:linear-gradient(rgba(27,188,160,0.5),rgba(27,188,160,0.5)),url('svg/services.jpeg');background-size:cover;">
    <div class="container py-3">
        <div class="py-5">
            <h1 class="white-text text-center h1 h1-responsive ">Services</h1>
            <p class="text-font text-center text-white">
            <a href="{{url('/')}}" class="white-text"> Home</a>/Services
            </p>

        </div>
    </div>
</section>
<section>
    <div class="container my-5">
        <div class="row ">
            <div class="col-md-6">
                <div class="">
                    <h3 class="h3 h3-responsive">Our Services</h3>
                    <p>
                        We take the pride becoming partner of what our clients do and build a trust providing timely and accurate

services includes:
                    </p>
                    <ul class="list-unstyled text-font">
                        <li class="list-item py-1">
                         <i class="fa fa-check"></i>&ensp;Personal, business and corporation tax.
                        </li>
                        <li class="list-item py-1">
                            <i class="fa fa-check"></i>&ensp;Financial statement preparation

                        </li>
                        <li class="list-item py-1">
                            <i class="fa fa-check"></i>&ensp;Tax planning and appeal

                        </li>
                        <li class="list-item py-1 ">
                            <i class="fa fa-check"></i>&ensp;Full cycle accounting (AP,AR and payroll)

                        </li>
                        <li class="list-item py-1">
                            <i class="fa fa-check"></i>&ensp;Business incorporation and registration

                        </li>
                        <li class="list-item py-1">
                            <i class="fa fa-check"></i>&ensp;Instant cash refund (tax refund)

                        </li>
                        <li class="list-item py-1">
                            <i class="fa fa-check"></i>&ensp;EFILE, GST/HST,WSIB,EHT

                        </li>
                        <li class="list-item py-1">
                            <i class="fa fa-check"></i>&ensp;Statutory deductions and remittances

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 pl-5">
            <img src="{{asset('svg/service.jpg')}}" class="img img-fluid">
            </div>
        </div>
        <div class="row my-5">
            <div class="col-md-4">
                <!-- Card -->
                <div class="card card-product" style="box-shadow:none;border-bottom:3px solid #1BBCAA;">

                <!-- Card image -->
                <img class="" src="{{asset('svg/acc.jpeg')}}" alt="Accounting">

                <!-- Card content -->
                <div class="card-body text-center py-4">

                <!-- Title -->
                <h4 class="card-title"><a href="" class="site-color">Accounting</a></h4>
                <!-- Text -->
                <p class="card-text pb-4" style="font-family: 'Raleway', sans-serif!important;">
                    Saiful & Hafizur Professional Corporation has a highly qualified accounting experts consisting of partners who provide different levels of financial statement analysis and preparation depending on the needs of the client. They are responsible for the timely preparation of a wide variety of compilation, notice to reader, statements and financial information.
                </p>
                </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-4">
                <!-- Card -->
                <div class="card card-product" style="box-shadow:none;border-bottom:3px solid #1BBCAA;">

                <!-- Card image -->
                <img class="" src="{{asset('svg/Taxation.jpeg')}}" alt="Taxation">

                <!-- Card content -->
                <div class="card-body text-center py-4">

                <!-- Title -->
                <h4 class="card-title"><a href="" class="site-color">Taxation</a></h4>
                <!-- Text -->
                <p class="card-text pb-1" style="font-family: 'Raleway', sans-serif!important;">
                    The tax professionals at Saiful & Hafizur Professional Corporation provide comprehensive tax planning for individual clients, corporate clients and self-employed persons. Our primary objective is to ensure that the tax affairs of every client are reviewed continuously throughout the year on a proactive basis to minimize taxation, both in the short and long-term.
                </p>
                </div>

                </div>
                <!-- Card -->
            </div>
        </div>

    </div>

</section>
@endsection
