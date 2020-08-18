@extends('layouts.app')
@section('title', 'Blogs-Viflix')
@section('content')
<!--==========================
Intro Section
============================-->
<section class="banner" style="background: #f5f8fd url({{ asset('img/covers/Blog.png') }}) center no-repeat; background-size: cover;">
	<div class="d-flex justify-content-center h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-lg-12">
          <h2><!-- Blogs --></h2>    
        </div> 
      </div>
    </div>             
</section><!-- #intro -->

<main id="main">

    <!--==========================
      Body
    ============================-->
    <section id="blogs">

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
			<!-- Page Content -->
			<div class="container">

				@foreach($blog as $bitem)
				
				<!-- Blog  -->
			  <div class="row">
			    <div class="col-md-5 d-flex justify-content-center">
			      <a href="#">
			        <img class="img-fluid rounded mb-3 mb-md-0" src="{{asset($bitem->pic)}}" alt="Blog: {{$bitem->bname}} picture">
			      </a>
			    </div>
			    <div class="col-md-7">
			      <h3>{{$bitem->bname}}</h3>
			      <div class="block-with-text">{!!$bitem->bdesc!!}</div>
			      <a class="btn btn-primary" href="{{url('blogs/'.$bitem->bid.'/'.str_slug($bitem->bname))}}">Read More</a>
			    </div>
			  </div>
			  <!-- /.row -->

			  <hr>
				@endforeach

			  <!-- Pagination -->
			  <ul class="pagination justify-content-center">
			    {{$blog->links()}}
			  </ul>

			</div>
			<!-- /.container -->
          </div>
        </div>
      </div>

    </section><!-- #body -->

</main>

<!--
/*--------------------------------------------------------------
# Styling for Navbar text for visibility
--------------------------------------------------------------*/   -->

<style type="text/css">
  .main-nav a, #header .container .text-light span, #header .container .text-light img, #header #topbar .container a{
    text-shadow: 0 0 1px #f8fafc, 0 0 1px #f8fafc;
    -webkit-text-shadow: 0 0 1px #f8fafc, 0 0 1px #f8fafc;
    -moz-text-shadow: 0 0 1px #f8fafc, 0 0 1px #f8fafc;
    -ms-text-shadow: 0 0 1px #f8fafc, 0 0 1px #f8fafc;
    -o-text-shadow: 0 0 1px #f8fafc, 0 0 1px #f8fafc;
  }
</style>

@endsection