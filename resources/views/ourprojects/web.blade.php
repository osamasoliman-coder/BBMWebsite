@extends('layout')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4"  style="margin-top: 30px;">
                    <a href="http://idraksport.com/" target="_blank">
                        <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;">
                            <img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing"
                                 src="{{asset('assets/img/bbmwebsite/projects/web/web_buttons_IDRAK.jpg')}}"
                                 style="height: 280px;width: 100%" alt="">
                            {{--                            <p class="text-center" style="font-size: 19px;margin-top: 16px;color: rgb(85,88,91);">Idrak--}}
                            {{--                                Sport Facility Management</p>--}}
                            {{--                  <button onClick="location.href='http://idraksport.com/'" class="btn btn-primary bg-info animated-border-button"  id="btnshow" type="button" style="margin-left: 10px;margin-bottom: 15px;margin-top: 14px;height:50px;width: 170px;text-align: center">Visit</button>--}}
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4"  style="margin-top: 30px;">
                    <a href="https://www.ishineae.ae/en">
                        <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;">
                            <img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing"
                                 src="{{asset('assets/img/bbmwebsite/projects/web/web_buttons_ishine.jpg')}}"
                                 style="height: 280px;width: 100%" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4"  style="margin-top: 30px;">
                    <a href="https://316sport.ae/">
                        <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;">
                            <img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing"
                                 src="{{asset('assets/img/bbmwebsite/projects/web/web_buttons_316.jpg')}}"
                                 style="height: 280px;width: 100%" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4"  style="margin-top: 30px;">
                    <a href="https://deerfieldsperfumes.com/">
                        <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;">
                            <img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing"
                                 src="{{asset('assets/img/bbmwebsite/projects/web/web_buttons_deerfield.jpg')}}"
                                 style="height: 280px;width: 100%" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-sm-12 col-md-4"  style="margin-top: 30px;">
                    <a href="http://bluemarlin.ae">
                        <div class="card shadow-lg servicec" style="box-shadow: 5px 10px #e8e8e8;">
                            <img class="card-img-top w-100 d-block servicecard" data-bs-hover-animate="swing"
                                 src="{{asset('assets/img/bbmwebsite/projects/web/web_buttons_BMM.jpg')}}"
                                 style="height: 280px;width: 100%" alt="">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection
