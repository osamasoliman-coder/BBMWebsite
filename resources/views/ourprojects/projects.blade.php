@extends('layout')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="200" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('assets/img/bbmwebsite/projects/webdevlop.png')}}" style="height: 250px;" alt="">
                        <!--<h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>Web Development</strong></h1>-->
                        <button onclick="window.location='{{ route('pweb') }}'" class="btn animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;height:50px;width: 170px;text-align: center;background-color: #116389;">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="200" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('assets/img/bbmwebsite/projects/branding_creative.png')}}" style="height: 250px;" alt="">
                        <!--<h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>Branding and Creatives</strong></h1>-->
                        <button onclick="window.location='{{ route('pbranding') }}'" class="btn animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;height:50px;width: 170px;text-align: center;background-color: #116389;">Show</button>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4" data-aos="fade-right" data-aos-delay="200" style="margin-top: 30px;">
                    <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;"><img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing" src="{{asset('assets/img/bbmwebsite/projects/Mobile Application.png')}}" style="height: 250px;" alt="">
                        <!--<h1 class="text-center" style="font-size: 23px;margin-top: 16px;padding-right: 5px;padding-left: 5px;color: rgb(85,88,91);"><strong>Mobile Apps</strong></h1>-->
                        <button  class="btn  animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;height:50px;width: 170px;text-align: center;background-color: #116389;">Show</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
