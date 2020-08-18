@extends('layouts.app')
@section('title', $blog->bname)
@section('content')
<!--==========================
Intro Section
============================-->


                                    <!--==========================
                                        Ze blog image goes here
                                    ============================-->
<section class="banner" style="background: #f5f8fd url({{ asset($blog->pic) }}) center top no-repeat; background-size: cover; height: 70vh;">
<!-- 	<div class="d-flex justify-content-center h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-lg-12">
          <h2>Put ze blog name here</h2>    
        </div> 
      </div>
    </div>  -->            
</section><!-- #intro -->

<main id="main">

    <!--==========================
      Body
    ============================-->
    <section id="blog">

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- Page Content -->
            <div class="container">

              <!-- ze Blog -->
              <div class="row">
<!--                 <div class="col-md-5 d-flex justify-content-center">
                  <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/uploads/testblog.jpg') }}" alt="">
                  </a>
                </div> -->
                <div class="col-md-12">
                  <h3 style="text-align: center;">{{$blog->bname}}</h3>
                  <div class="text-editor">
                    {!!$blog->bdesc!!}
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
          </div>
        </div>
      </div>

    </section><!-- #body -->

    <!--
    /*--------------------------------------------------------------
    # Styling for Navbar text for visibility
    --------------------------------------------------------------*/   -->
  
    <style type="text/css">
      .main-nav a, #header .container .text-light span, #header .container .text-light img, #header #topbar .container a{
        text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
        -webkit-text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
        -moz-text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
        -ms-text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
        -o-text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
      }
    </style>

</main>

@endsection