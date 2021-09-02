@extends('layout')

@section('content')
    <section>
        <p class="text-center" data-aos="fade-right" data-aos-delay="300"
           style="font-size: 31px;margin-top: 56px;color: rgb(127,130,133);"><strong>Contact Us</strong></p>
        <div class="container" style="padding-bottom: 55px;padding-top: 39px;margin-bottom: 20px;">
            <form action="{{ route('send.email') }}" method="Post">
                @csrf
            <div class="row">

                    <div class="col-sm-12 col-md-6">

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
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <input class="border rounded shadow" name="message" type="text" data-aos="fade-left"
                               data-aos-delay="600"
                               style="width: 100%;padding: 16px;margin: 4px;margin-top: 9px;height: 122px;font-size: 20px;"
                               placeholder="Enter Your Message">
                        @error('message')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <button class="btn btn-primary sendmail"
                                data-aos="fade-left"
                                data-aos-delay="600" type="submit"
                                style="width: 100%;margin-top: 9px;background-color: #F3B333;color: black;font-weight: bold">
                            Send
                        </button>
                        @if(Session::has('success_message'))
                            <div class="alert alert-success" style="margin-top: 15px;">
                                <strong>Success</strong> {{Session::get('success_message')}}
                            </div>
                        @endif
                    </div>
            </div>
            </form>
        </div>
    </section>
@endsection

