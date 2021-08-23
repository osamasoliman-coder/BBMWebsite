@extends('layout')

@section('content')
<section>
    <p class="text-center" data-aos="fade-right" data-aos-delay="300"
       style="font-size: 31px;margin-top: 56px;color: rgb(127,130,133);"><strong>Contact Us</strong></p>
    <div class="container" style="padding-bottom: 55px;padding-top: 39px;margin-bottom: 20px;">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p class="shadow" data-aos="fade-right" data-aos-delay="250"
                           style="color: rgb(52,150,248);font-size: 19px;padding: 28px;margin-top: 12px;background-color: #ffffff;">
                            <i class="fa fa-home" style="padding-right: 8px;font-size: 22px;"></i><strong>Address :&nbsp;</strong><span
                                style="font-size: 13px;color: rgb(62,139,217);"><strong>Abu Dhabi , UAE</strong></span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p class="shadow" data-aos="fade-right" data-aos-delay="350"
                           style="color: rgb(52,150,248);font-size: 19px;padding: 28px;background-color: #ffffff;">
                            <i class="fa fa-phone" style="padding-right: 8px;font-size: 22px;"></i><strong>Phone:&nbsp;</strong><span
                                style="font-size: 13px;color: rgb(62,139,217);"><strong>+971566687188</strong></span>
                        </p>
                        <p class="shadow" data-aos="fade-right"
                           data-aos-delay="500"
                           style="color: rgb(52,150,248);font-size: 19px;padding: 28px;background-color: #ffffff;">
                            <i class="fa fa-whatsapp" style="padding-right: 8px;font-size: 22px;"></i><strong>Whatsapp:&nbsp;</strong><span
                                style="font-size: 13px;color: rgb(62,139,217);"><strong>+971566687188</strong></span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <p class="shadow" data-aos="fade-right" data-aos-delay="650"
                           style="color: rgb(52,150,248);font-size: 19px;padding: 28px;background-color: #ffffff;">
                            <i class="fa fa-envelope" style="padding-right: 8px;font-size: 20px;"></i><strong>Email:&nbsp;</strong><span
                                style="font-size: 13px;color: rgb(62,139,217);"><strong>info@bluemarlin.ae</strong></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                @if(Session::has('success_message'))
                    <div class="alert alert-success">
                        <strong>Success</strong> {{Session::get('success_message')}}
                    </div>
                @endif
                <form action="{{ route('send.email') }}" method="Post">
                    @csrf
                    <input class="border rounded shadow" name="name" type="text" data-aos="fade-left"
                           data-aos-delay="600"
                           style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;font-size: 21px;"
                           placeholder="Enter Your Name">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input class="border rounded shadow" name="email" type="email" data-aos="fade-left"
                           data-aos-delay="600"
                           style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;font-size: 20px;"
                           placeholder="Enter Email">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input class="border rounded shadow" name="phone" type="text" data-aos="fade-left"
                           data-aos-delay="600"
                           style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;font-size: 20px;"
                           placeholder="Enter Your Phone">
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <input class="border rounded shadow" name="message" type="text" data-aos="fade-left"
                           data-aos-delay="600"
                           style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;height: 122px;font-size: 20px;"
                           placeholder="Enter Your Message">
                    @error('message')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                    <button class="btn btn-primary"
                            data-aos="fade-left"
                            data-aos-delay="600" type="submit" style="width: 100%;margin-top: 9px;background-color: #F3B333;color: black;font-weight: bold">Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
