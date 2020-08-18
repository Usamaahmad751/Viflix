<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Favicons -->
<!--     <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
 -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
    <!-- Youtube Vid JavaScript File -->
    <script src="{{ asset('js/homepageVid.js') }}"></script>

    <!-- Lity Video Lightbox -->
    <link href="{{ asset('lity-2.3.1/dist/lity.min.css') }}" rel="stylesheet">

</head>
<body>

    <!--==========================
    Contact bar
    ============================-->

    <div id="tpbr_topbar"><div id="tpbr_box">Have a question? Call us : +92-316-5040056 | Email us : contact@viflix.net</div></div><!-- #Contact bar -->

    <!--==========================
    Header
    ============================-->
    <header id="header">

        <div id="topbar">
          <div class="container">
            <div class="social-links">
              <a href="{{ url('https://twitter.com/Viflix1') }}" target="blank" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="{{ url('https://www.facebook.com/Viflix.net') }}" target="blank" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="{{ url('https://www.pinterest.com/viflix9099') }}" target="blank" class="pinterest"><i class="fa fa-pinterest"></i></a>
              <a href="{{ url('https://www.instagram.com/viflix99') }}" target="blank" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="container">

          <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="{{ url('/#intro') }}" class="scrollto">
                <img src="{{ asset('/img/logo.png') }}"><!-- <span>Viflix</span> --></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
          </div>

          <nav class="main-nav float-right d-none d-lg-block">
            <ul>
              <li><a href="{{ url('/#intro') }}">Home</a></li>
              <li class="drop-down"><a href="{{ url('/video-editing-services') }}">Services</a>
                <ul>
                  <li><a href="{{ url('/corporate-video-editing') }}">Corporate Video Editing</a></li>
                  <li><a href="{{ url('/promotional-video-editing') }}">Promotional Video Editing</a></li>
                  <li><a href="{{ url('/outdoor-video-editing') }}">Outdoor Video Editing</a></li>
                  <li><a href="{{ url('/family-video-editing') }}">Family Video Editing</a></li>
                  <li><a href="{{ url('/custom-requirements') }}">Custom Requirements</a></li>
                </ul>
              </li>
              <li><a href="{{ url('/#portfolio') }}">Portfolio</a></li>
              <li><a href="{{ url('/start-your-project') }}">Start Your Project</a></li>
              <li><a href="{{ url('/blogs') }}">Blog</a></li>
              <li><a href="{{ url('/#about') }}">About Us</a></li>
              <li><a href="{{ url('/#footer') }}">Contact Us</a></li>
            </ul>
          </nav><!-- .main-nav -->
          
        </div>
    </header><!-- #header -->
    

    @yield('content')


    <!--==========================
        Footer
    ============================-->
    <footer id="footer" class="section-bg">
    <div class="footer-top">
    <div class="container">

    <div class="row">

      <div class="col-lg-6">

        <div class="row">

            <div class="col-sm-6">

              <div class="footer-info">
                <h3>Viflix</h3>
                <p>Viflix is an online videography services platform. We believe in discovering visual elegance so that you may convey your message in a perfected manner. Vision, reliability and perfection are the values that guide us in our journey.</p>
              </div>

            </div>

            <div class="col-sm-6">
              <div class="footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="{{ url('/#intro') }}">Home</a></li>
                  <li><a href="{{ url('/#about') }}">About us</a></li>
                  <li><a href="{{ url('/video-editing-services') }}">Services</a></li>
                  <li><a href="{{ url('/terms-and-conditions') }}">Terms & conditions</a></li>
                  <li><a href="{{ url('/privacy-policy') }}">Privacy policy</a></li>
                </ul>
              </div>

              <div class="footer-links">
                <h4>Contact Us</h4>
                <p>
                  <strong>Phone:</strong> +92-316-5040056<br>
                  <strong>Email:</strong> contact@viflix.net<br>
                </p>
              </div>

              <div class="social-links">
                <a href="{{ url('https://twitter.com/Viflix1') }}" target="blank" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="{{ url('https://www.facebook.com/Viflix.net') }}" target="blank" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="{{ url('https://www.pinterest.com/viflix9099') }}" target="blank" class="pinterest"><i class="fa fa-pinterest"></i></a>
                <a href="{{ url('https://www.instagram.com/viflix99') }}" target="blank" class="instagram"><i class="fa fa-instagram"></i></a>
              </div>

            </div>

        </div>

      </div>

      <div class="col-lg-6" id="contactF">
          @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message') }}
        </div>
        @endif
        <div class="form">
          
          <h4>Send us a message</h4>
          <form method="POST" role="form" class="contactForm" action="/contactMail">
            <div id="mail-status"></div>
            <div class="form-group">
              <input type="text" name="userName" class="form-control" id="userName" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  class="demoInputBox" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" class="demoInputBox"/>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" class="demoInputBox"/>
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="content" id="content" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" class="demoInputBox"></textarea>
              <div class="validation"></div>
            </div>

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>

            <div class="text-center"><button type="submit" title="Send Message" onClick="sendContact();">Send Message</button></div>
            @csrf
          </form>
        </div>

      </div>

      

    </div>

    </div>
    </div>

    <div class="container">
    <div class="copyright">
    &copy; Copyright <strong>Viflix</strong>. All Rights Reserved
    </div>
    </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->
    <!-- jQuery 3 -->
<script src="{!!asset('js/jquery-3.2.1.min.js')!!}"></script>
    <script type="text/javascript">
    function sendContact() {
    
        jQuery.ajax({
            url: "/contactMail",
            data:'userName='+$("#userName").val()+'&userEmail='+
            $("#userEmail").val()+'&subject='+
            $("#subject").val()+'&content='+
            $(content).val(),
            type: "POST",
            success:function(data){
                $("#mail-status").html(data);
            },
            error:function (){}
        });
    
}

    
    </script>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/mobile-nav/mobile-nav.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <!-- <script src="{{ asset('contactform/contactform.js') }}"></script> -->
    <!-- Start Your Project JavaScript File -->
    <script src="{{ asset('js/syp.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('js/main.js') }}"></script>
    
    <!-- Lity Video Lightbox -->
    <script src="{{ asset('lity-2.3.1/dist/lity.min.js') }}"></script>
    
</body>
</html>