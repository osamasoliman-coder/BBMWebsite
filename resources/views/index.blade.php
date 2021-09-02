@extends('layout')
@section('links')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
@section('content')

    <!-- ======= Hero Section Start======= -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active" style="visibility: hidden"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="visibility: hidden"></li>
                <li data-target="#myCarousel" data-slide-to="2" style="visibility: hidden"></li>
                <li data-target="#myCarousel" data-slide-to="3" style="visibility: hidden"></li>
                <li data-target="#myCarousel" data-slide-to="4" style="visibility: hidden"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{asset('assets/img/banners/Web-banner_4.jpg')}}" alt="Los Angeles" style="width:100%;">
                </div>
                <div class="item">
                    <img src="{{asset('assets/img/banners/Web-banner_6.jpg')}}" alt="Chicago" style="width:100%;">
                </div>
                <div class="item">
                    <img src="{{asset('assets/img/banners/Web-banner_5.jpg')}}" alt="New york" style="width:100%;">
                </div>
                <div class="item">
                    <img src="{{asset('assets/img/banners/Web-banner_7.jpg')}}" alt="New york" style="width:100%;">
                </div>
                <div class="item">
                    <img src="{{asset('assets/img/banners/Web-banner_8.jpg')}}" alt="New york" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- ======= Hero Section End======= -->

    <main id="main">

        <!-- ======= about Section ======= -->
        <!-- ======= about Section ======= -->

    {{--        <section>--}}
    {{--            <img src="{{ asset('assets/img/banners/who-we-are_banner.jpg') }}" alt="" style="width:100%;height: 100%;padding: 10px;">--}}
    {{--        </section>--}}

    <!-- ======= Who we are Section ======= -->
        <section id="clients" class="clients">


            <div class="section-title" data-aos="fade-up">
                <div class="section-title">
                    <div class="circle" style="margin-top: 15px;">
                        <span>WHO WE ARE</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12" data-aos="fade-up-right">
                    <img src="{{ asset('assets/img/banners/Web-banner_wwa01.png') }}" alt="" style="width: 100%">
                </div>
                <div class="col-md-6 col-sm-12" data-aos="fade-up-left">
                    <img src="{{ asset('assets/img/banners/Web-banner_wwa02.png') }}" alt="" style="width: 100%">
                </div>
            </div>


        </section><!-- End Clients Section -->


        <!-- ======= services Section ======= -->
        <section id="clients" class="clients slide-top" style="background-color: #F3B333">


                <div class="section-title" data-aos="fade-up" style="margin-top: 20px;">
                    <div class="section-title animate__animated animate__fadeInUp" data-aos="fade-up">
                        <div class="circle" style="margin-top: 15px;">
                            <span>SERVICES</span>
                        </div>
                    </div>
                </div>

                <div class="owl-carousel clients-carousel" style="margin-top: 20px;">
                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('branding') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/Branding.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('web') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/WebDev.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('mobile') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/AppDev.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('seo') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/SEO.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('smm') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/SMM.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('dm') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/DigiMrkt.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('influencer') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/Influencer.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('vp') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/Video.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('ps') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/Photo.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>

{{--                                                <img class="imag_service" src="{{ asset('assets/img/bbmwebsite/photos.png') }}" alt="Paris" class="center"--}}
{{--                                                     style="width: 100px;height: 100px;background-color: white;">--}}
{{--                                                <br>--}}
{{--                                                <h5 style="text-align: center;color: #002E5F;font-weight: bold;margin-top: 10px;font-size: 12px;">--}}
{{--                                                    PHOTO SHOOTING</h5>--}}
{{--                                                <br>--}}
{{--                                                <div class="center">--}}
{{--                                                    <a href="{{ route('ps') }}" class="btn"--}}
{{--                                                       style="background-color: #CCCCCC;color: #304A78;font-size: 13px;border-radius: 25px;">Read--}}
{{--                                                        more</a>--}}
{{--                                                </div>--}}

                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('drone') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/Drone.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('em') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/EvMang.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                    <div class="col-sm-12 col-md-4" data-aos="fade-left">
                        <a href="{{ route('sponsorship') }}" target="_blank">
                            <img class="imag_service center" src="{{ asset('assets/img/servicesnew/Sponsorship.png') }}"
                                 alt="Paris"
                                 style="width: 150px!important;height: 150px!important;">
                        </a>
                    </div>

                </div>


        </section><!-- End Clients Section -->


        <!-- ======= latest work Section ======= -->
    {{--        <section style="background-color: #F3B333;">--}}
    {{--            <div style="margin-top: 40px;">--}}
    {{--                <div class="section-title">--}}
    {{--                    <div class="section-title animate__animated animate__fadeInUp" data-aos="fade-up">--}}
    {{--                        <button id="lastwork_title">Lates <br> Work</button>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="owl-carousel clients-carousel">--}}
    {{--                    <div class="col">--}}
    {{--                        <img class="imag_service" style="padding: 10px;" src="assets/img/grey.jpeg" alt="Paris"--}}
    {{--                             class="center" style="width: 500px;height: 500px;">--}}
    {{--                    </div>--}}


    {{--                </div>--}}
    {{--            </div>--}}

    {{--        </section>--}}
    <!-- ======= End latest work Section ======= -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">


                <div class="section-title" data-aos="fade-up" style="margin-top: 20px;">
                    <div class="section-title animate__animated animate__fadeInUp" data-aos="fade-up">
                        <div class="circle">
                            <span>OUR CLIENTS</span>
                        </div>

                    </div>

                </div>

                <div class="owl-carousel clients-carousel" style="margin-top: 20px;">
                    <div class="col-sm-12 col-md-4" data-aos="fade-right">
                        <a href="#" target="_blank">
                            <img class="imag_service center" src="https://i.postimg.cc/RZKjJNhF/Whats-App-Image-2021-03-13-at-4-40-26-PM.jpg"
                                 alt="Paris"
                                 style="width: 170px!important;height: 170px!important;border-radius: 100px">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4" data-aos="fade-right">
                        <a href="https://www.ishineae.ae/en" target="_blank">
                            <img class="imag_service center" src="https://i.postimg.cc/vT8VfgGd/Whats-App-Image-2021-03-13-at-4-40-27-PM-1.jpg"
                                 alt="Paris"
                                 style="width: 160px!important;height: 160px!important;border-radius: 100px">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4" data-aos="fade-right">
                        <a href="http://idraksport.com/" target="_blank">
                            <img class="imag_service center" src="https://i.postimg.cc/KYNcL9jR/Whats-App-Image-2021-03-13-at-4-40-27-PM.jpg"
                                 alt="Paris"
                                 style="width: 160px!important;height: 160px!important;border-radius: 100px">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4" data-aos="fade-right">
                        <a href="https://alsarookhmarine.com/" target="_blank">
                            <img class="imag_service center" src="https://i.postimg.cc/VND15dZt/Whats-App-Image-2021-03-13-at-4-40-28-PM-1.jpg"
                                 alt="Paris"
                                 style="width: 160px!important;height: 160px!important;border-radius: 100px">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4" data-aos="fade-right">
                        <a href="https://deerfieldsperfumes.com/" target="_blank">
                            <img class="imag_service center" src="https://i.postimg.cc/tRVTvNmm/Whats-App-Image-2021-03-13-at-4-40-29-PM.jpg"
                                 alt="Paris"
                                 style="width: 160px!important;height: 160px!important;border-radius: 100px">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4" data-aos="fade-right">
                        <a href="https://316sport.ae/" target="_blank">
                            <img class="imag_service center" src="https://i.postimg.cc/DyLS0Prb/Whats-App-Image-2021-03-13-at-4-40-28-PM.jpg"
                                 alt="Paris"
                                 style="width: 160px!important;height: 160px!important;border-radius: 100px">
                        </a>
                    </div>


                </div>

        </section><!-- End Clients Section -->

        <!-- ======= Contact Section ======= -->
        <section>
            <div class="section-title" style="margin-top: 20px;">
                <div class="section-title" data-aos="fade-up">
                    <div class="circle">
                        <span>CONTACT US</span>
                    </div>
                </div>

            </div>

                <div class="row">

                    <form action="{{ route('send.email') }}" method="Post">
                        @csrf
                        <div class="col-sm-12 col-md-6">
                            @if(Session::has('success_message'))
                                <div class="alert alert-success">
                                    <strong>Success</strong> {{Session::get('success_message')}}
                                </div>
                            @endif


                            <input class="border rounded shadow" name="name" type="text" data-aos="fade-right"
                                   data-aos-delay="600"
                                   style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;font-size: 21px;"
                                   placeholder="Enter Your Name">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input class="border rounded shadow" name="email" type="email" data-aos="fade-right"
                                   data-aos-delay="600"
                                   style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;font-size: 20px;"
                                   placeholder="Enter Email">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input class="border rounded shadow" name="phone" type="text" data-aos="fade-right"
                                   data-aos-delay="600"
                                   style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;font-size: 20px;"
                                   placeholder="Enter Your Phone">
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror


                        </div>

                        <div class="col-sm-12 col-md-6">
                            <input class="border rounded shadow" name="message" type="text" data-aos="fade-left"
                                   data-aos-delay="600"
                                   style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;height: 122px;font-size: 20px;"
                                   placeholder="Enter Your Message">
                            @error('message')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <button class="btn btn-primary"
                                    data-aos="fade-left"
                                    data-aos-delay="600" type="submit"
                                    style="width: 100%;margin-top: 9px;background-color: #F3B333;color: black;font-weight: bold">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
        </section>
        <!-- End Contact Section -->


    </main><!-- End #main -->

@endsection
