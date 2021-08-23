<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bluemarlin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

{{-- <!-- Favicons -->
<link href="assets/img/slide/digitalmarketing.jpeg" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

<!-- Favicons -->
    <link href="{{asset('assets/img/logos.png')}}" rel="icon" style="width: 100px;height: 100px;">
    <link href="{{asset('assets/img/logos.png')}}" rel="apple-touch-icon" style="width: 100px;height: 100px;">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/preload.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/reloadpage.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/js/slider.js')}}" rel="stylesheet">
    {{--awesome--}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">

    {{--animation--}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @yield('links')

    <style>

    </style>

</head>

<body style="background-color: #f0f0f0;">

<!--   preload-->
<div class="main-loader"></div>
<!--  end preload-->


<!-- ======= Header ======= -->

{{--#cdc9c9--}}
<header id="header" style="height: 100px;background-color: #f0f0f0">
    <div class=" d-flex justify-content-between align-items-center" style="padding-left: 20px;padding-right: 20px;">
        <div class="logo" style="height: 100px;">
            <img src="assets/img/logos.png" alt="" style="width: 150px;min-height: 100px;min-height: 100px;">
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{ route('home') }}" style="color: #304A78;">Home</a></li>
                <li><a href="{{ route('about') }}" style="color: #304A78;">About Us</a></li>
                <li class="drop-down"><a href="#" style="color: #304A78;">Services</a>
                    <ul>
                        <li><a href="{{ route('branding') }}">Branding</a></li>
                        <li><a href="{{ route('web') }}">Web Development</a></li>
                        <li><a href="{{ route('mobile') }}">Mobile App</a></li>
                        <li><a href="{{ route('seo') }}">Search Engine Optimization</a></li>
                        <li><a href="{{ route('smm') }}">Social Media Management</a></li>
                        <li><a href="{{ route('dm') }}">Digital Marketing</a></li>
                        <li><a href="{{ route('influencer') }}">Influencer</a></li>
                        <li><a href="{{ route('vp') }}">Video production</a></li>
                        <li><a href="{{ route('ps') }}">Photo shooting</a></li>
                        <li><a href="{{ route('drone') }}">Drone Services</a></li>
                        <li><a href="{{ route('em') }}">Event Management</a></li>
                        <li><a href="{{ route('sponsorship') }}">Sponsorship</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('projects') }}" style="color: #304A78;">Projects</a></li>
                <li><a href="{{ route('ourteam') }}" style="color: #304A78;">Join our team</a></li>
                <li><a href="{{ route('contact') }}" style="color: #304A78;">Contact</a></li>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <div class="div" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{--                                              <img src="images/sliderhome/uaeicon.png" style="display: inline-block;width: 30px;height: 30px;border-radius: 5px;">--}}
                                <p style="color: #304A78;font-family: 'Roboto Slab', serif;"> {{ $properties['native'] }}</p>
                            </a>
                        </div>
                    </li>

                @endforeach
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->


@yield('content')


{{--<!-- ======= Footer ======= -->--}}
{{--<footer id="footer">--}}

{{--    <div class="footer-top" style="background-color: #f1f0f0">--}}
{{--        <div class="row">--}}

{{--            <div class="col-lg-4 col-md-4 footer-info" style="background-image: url({{ asset('assets/img/footer/f2.png') }})">--}}
{{--               <div style="width: 150px;height: 150px;background-color: white!important;border-radius: 50%;margin-left: 60px;">--}}
{{--                   <img src="{{asset('assets/img/logos.png')}}" alt="" style="width: 140px!important;height: 140px!important;">--}}
{{--               </div>--}}
{{--            </div>--}}


{{--            <div class="col-lg-4 col-md-4 footer-links" style="background-image: url({{ asset('assets/img/footer/f2.png') }});height: 250px!important;">--}}
{{--                <img src="{{asset('assets/img/footer/f2.png')}}" style="width: 100%;max-height: 250px;" alt="">--}}


{{--                                        <h3 style="color: #304a78">Our Info</h3>--}}
{{--                                        <ul style="margin-top: 15px;">--}}
{{--                                            <li><i class="bx bx-chevron-right" style="color: #304a78"></i> <span style="color: #304a78">Location:</span> <a href="{{ route('home') }}" style="color: black;font-weight: bold">Abu Dhabi UAE</a></li>--}}
{{--                                            <li><i class="bx bx-chevron-right" style="color: #304a78"></i>  <span style="color: #304a78">Phone:</span> <a href="{{ route('contact') }}" style="color: black;font-weight: bold">00971568699589</a></li>--}}
{{--                                            <li><i class="bx bx-chevron-right" style="color: #304a78"></i>  <span style="color: #304a78">Email:</span><a href="{{ route('about') }}" style="color: black;font-weight: bold">info@bluemarlin.ae</a></li>--}}

{{--                                        </ul>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-4 footer-contact" style="background-image: url({{ asset('assets/img/footer/f2.png') }})">--}}
{{--                <div>--}}
{{--                    <h3>Get In Touch</h3>--}}
{{--                    <div class="social-links mt-3" style="margin-top: 160px;">--}}
{{--                        <a href="https://twitter.com/bluemarlinae/" class="twitter" style="background-color: #304a78"><i--}}
{{--                                class="bx bxl-twitter"></i></a>--}}
{{--                        <a href="https://www.facebook.com/BlueMarlinae/" class="facebook"--}}
{{--                           style="background-color: #304a78"><i class="bx bxl-facebook"></i></a>--}}
{{--                        <a href="https://www.instagram.com/bluemarlinae/" class="instagram"--}}
{{--                           style="background-color: #304a78"><i class="bx bxl-instagram"></i></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Copyright -->--}}
{{--    <div class="footer-copyright text-center py-3" style="background-color: #cdc9c9;font-size: 15px;color: #304a78">© 2021--}}
{{--        Blue Marlin Marketing. ALL RIGHTS RESERVED--}}
{{--    </div>--}}
{{--    <!-- Copyright -->--}}
{{--</footer><!-- End Footer -->--}}

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up"
        style="background-color: #f0f0f0;border: 1px solid grey;height: 250px!important;">

    <div class="footer-top" style="background-color: #f0f0f0;background-size: cover;height: 250px!important;">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 footer-info">
                    <div
                        style="border-radius: 50%;background-color: white;width: 200px;height: 160px;margin-top: 20px;">
                        <img src="{{asset('assets/img/logos.png')}}" alt=""
                             style="width: 200px!important;height: 150px!important;">
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 footer-links" style="margin-top: 20px;">
                    <h3 style="color: #304a78">Our Links</h3>
                    <ul style="margin-top: 15px;">
                        <li><i class="bx bx-chevron-right" style="color: #304a78"></i> <a href="{{ route('home') }}"
                                                                                          style="color: #304a78">Home</a>
                        </li>
                        <li><i class="bx bx-chevron-right" style="color: #304a78"></i> <a href="{{ route('contact') }}"
                                                                                          style="color: #304a78">Contact
                                Us</a></li>
                        <li><i class="bx bx-chevron-right" style="color: #304a78"></i> <a href="{{ route('about') }}"
                                                                                          style="color: #304a78">about</a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-4 col-md-4 footer-contact" style="margin-top: 20px;">
                    <h3 style="color:#304a78;">Get In Touch</h3>
                    <div class="social-links mt-3" style="margin-top: 160px;">
                        <a href="https://twitter.com/bluemarlinae/" class="twitter" style="background-color: #304a78"><i
                                class="bx bxl-twitter"></i></a>
                        <a href="https://www.facebook.com/BlueMarlinae/" class="facebook"
                           style="background-color: #304a78"><i class="bx bxl-facebook"></i></a>
                        <a href="https://www.instagram.com/bluemarlinae/" class="instagram"
                           style="background-color: #304a78"><i class="bx bxl-instagram"></i></a>
                        <ul style="margin-top: 20px;">
                            <li style="color: #304a78">
                                <p class="contact-txt" style="color: #304a78;text-align: left"><span style="margin-right: 10px;">Location:</span>Abu Dhabi - UAE</p>
                            </li>
                            <li style="color: #304a78">
                                <p class="contact-txt" style="color: #304a78"><span style="margin-right: 10px;">Mobile:</span>+971566687188</p>
                            </li>
                            <li style="color: #304a78">
                                <p class="contact-txt" style="color: #304a78"><span style="margin-right: 10px;">Email:</span>info@bluemarlin.ae</p>
                            </li>
                        </ul>
                    </div>

                </div>


            </div>


        </div>
    </div>
</footer><!-- End Footer -->
<!-- Copyright -->
{{--<div class="footer-copyright text-center py-3" style="background-color: #cdc9c9;font-size: 15px;color: #304a78">© 2021 Blue Marlin Marketing. ALL RIGHTS RESERVED--}}
{{--</div>--}}
<!-- Copyright -->

{{-- <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> --}}


<div id="WAButton">
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!--Jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--Floating WhatsApp css-->
<link rel="stylesheet"
      href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript"
        src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
<script>
    $("#WAButton").floatingWhatsApp({
        phone: '+971566687188', //WhatsApp Business phone number International format-
        //Get it with Toky at https://toky.co/en/features/whatsapp.
        headerTitle: 'Chat with us on WhatsApp!', //Popup Title
        popupMessage: 'Hello, how can we help you?', //Popup Message
        showPopup: true, //Enables popup display
        buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
        //headerColor: 'crimson', //Custom header color
        //backgroundColor: 'crimson', //Custom background button color
        position: "right"
    });

</script>
{{--end whatsapp section --}}

<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    setTimeout(function () {
        $('.main-loader').fadeToggle();
    }, 4000);
</script>

{{--animation--}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>
