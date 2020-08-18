@extends('layouts.app')
@section('title', 'Viflix-Video Editing Services Company')

@section('content')
	<!--==========================
	Intro Section
	============================-->
	<section id="intro" class="clearfix">
		<div class="video-container" >
    		<div class="video-foreground">
    			<iframe
					src="https://www.youtube.com/embed/hyAg-sVBuNw?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=hyAg-sVBuNw&disablekb=1"
					frameBorder="0">
    			</iframe>
  			</div>         
 		</div>
 		<div class="img-container">
   			<div class="img-foreground">
  				<img src="{{ asset('img/home-mobile-cover.jpg') }}">
  			</div>  
 		</div>           
	</section>
	<!-- #intro -->

	<main id="main">


	<!--==========================
	  Why Us Section
	============================-->

	<section id="services" class="section-bg">

		<div class="container-fluid">
	    
		    <header class="section-header">
				<h3>Why choose our video editing services?</h3>
				<p style="padding-bottom: 20px;">Welcome to Viflix! If you are looking for an online video editing service then you are at the right place.At Viflix, we love to take your raw footage and turn it into an amazing video that you’ll love to share and enjoy.</p>
				<p>Working with Viflix is very easy, whether its a fun family vacation, a corporate promotional video, exciting outdoor adventure or a romantic wedding moment, we can edit it all. Get in touch today and see how we can help you!
				</p>
			</header>

	<!-- 	    <div class="row">

		      <div class="col-lg-6">
		        <div class="why-us-img">
		          <img src="{{ asset('img/why-us.jpg') }}" alt="" class="img-fluid">
		        </div>
		      </div>

		      <div class="col-lg-6">
		        <div class="why-us-content">
		          <p>At Viflix, we love to take your raw footage and turn it into an amazing video that you’ll love to share and enjoy.</p>
		          <p>Working with Viflix is very easy, whether its a fun family vacation, a corporate promotional video, exciting outdoor adventure or a romantic wedding moment, we can edit it all. Get in touch today and see how we can help you!
		          </p>
		          
		        </div>

		      </div>

		    </div> -->

	  	</div>
		<div class="container why">

			<div class="row">

			  <div class="col-sm-6 col-md-4 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
			    <div class="box">
			      <div class="icon" style="background: #fceef3;"><img style="height: 70%" src="{{ asset('img/why/pro.png') }}"></i></div>
			      <h4 class="title"><a>Professional Video Editors</a></h4>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-4 col-lg-3 wow bounceInUp" data-wow-duration="1.4s">
			    <div class="box">
			      <div class="icon" style="background: #fff0da;"><img style="height: 70%" src="{{ asset('img/why/ear.png') }}"></div>
			      <h4 class="title"><a>We use copy right free music</a></h4>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-4 col-lg-3 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
			    <div class="box">
			      <div class="icon" style="background: #e6fdfc;"><img style="height: 70%" src="{{ asset('img/why/time.png') }}"></div>
			      <h4 class="title"><a>Fast Five Days Delivery Time</a></h4>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-4 col-lg-3 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
			    <div class="box">
			      <div class="icon" style="background: #eafde7;"><img style="height: 70%" src="{{ asset('img/why/wallet.png') }}"></div>
			      <h4 class="title"><a>Pay only 40% to start</a></h4>
			    </div>
			  </div>

			  <div class="col-sm-6 col-md-4 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
			    <div class="box">
			      <div class="icon" style="background: #e1eeff;"><img style="height: 60%" src="{{ asset('img/why/cloud.png') }}"></div>
			      <h4 class="title"><a>Upload your footage or share cloud link with us</a></h4>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-4 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
			    <div class="box">
			      <div class="icon" style="background: #ecebff;"><img style="height: 70%" src="{{ asset('img/why/secure.png') }}"></div>
			      <h4 class="title"><a>Your data is secure with us</a></h4>
			    </div>
			  </div>
			  <div class="col-sm-12 col-md-12 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
			    <div class="box">
			      <div class="icon" style="background: #ebf0ff;"><img style="height: 70%" src="{{ asset('img/why/stable.png') }}"></div>
			      <h4 class="title"><a>Stabilization,audio edit, color grading, effects, titles, transitions – we deliver it all in a professionally edited video</a></h4>
			    </div>
			  </div>

			</div>

		</div>
	</section><!-- #why -->

	<!--==========================
	  Get Started
	============================-->
	<section id="get-started" class="wow fadeInUp">
	  <div class="container">
	    <div class="row">
	      <div class="col-lg-9 text-center text-lg-left">
	        <h3 class="cta-title">Get Started</h3>
	        <p class="cta-text"> If you would like to start your video project, click on the link below and we will convert your footage into an amazing video.</p>
	      </div>
	      <div class="col-lg-3 cta-btn-container text-center">
	        <a class="cta-btn align-middle" href="{{ url('/start-your-project') }}">Start Project</a>
	      </div>
	    </div>

	  </div>
	</section><!-- #Get Started -->

	<!--==========================
	  Calculate Your Price
	============================-->
	<section id="calc-price" class="wow fadeInUp">
	  <div class="container">
	    <div class="row">
	      <div class="col-lg-9 text-center text-lg-left">
	        <h3 class="cta-title">Calculate Your Price</h3>
	        <p class="cta-text"> We offer the best prices, click on the link below and calculate the price for your video project.</p>
	      </div>
	      <div class="col-lg-3 cta-btn-container text-center">
	        <a class="cta-btn align-middle" href="{{ url('/start-your-project') }}">Calculate Price</a>
	      </div>
	    </div>

	  </div>
	</section><!-- #Calculate Your Price -->

	<!--==========================
	  Features Section
	============================-->
	<section id="features">
	  <div class="container">

  		<header class="section-header" class="section-bg">
			<h3 style="padding-bottom: 60px;">Services</h3>
		</header>

	    <div class="row feature-item">
	      <div class="col-lg-6 wow fadeInUp">
	        <img src="{{ asset('img/services/corporate.png') }}" class="img-fluid" alt="">
	      </div>
	      <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
	        <h4>Corporate Video Editing</h4>
	        <p>Video can help you represent and promote your business. Viflix helps you create amazing events promos, exciting conference stories or simply rebrand the existing video. Our video editing services can do anything your corporate needs.</p>
	        <a href="{{ url('/video-editing-services#corp') }}" class="btn">Learn More</a>
	      </div>
	    </div>

	    <div class="row feature-item mt-5 pt-5">
	      <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
	        <img src="{{ asset('img/services/Familyevent.png') }}" class="img-fluid" alt="">
	      </div>

	      <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
	        <h4>Family Video Editing</h4>
	        <p>Our video editing services will let you create lasting memories that you’ll love to share with your friends and family. Whether its a birthday party or a backyard balloon fight. We use amazing music, best transitions and titles to create the perfect video for you.</p>
			<a href="{{ url('/video-editing-services#fam') }}" class="btn">Learn More</a>
	      </div>   
	    </div>

	    <div class="row feature-item mt-5 pt-5">
	      <div class="col-lg-6 wow fadeInUp">
	        <img src="{{ asset('img/services/outdoor.png') }}" class="img-fluid" alt="">
	      </div>
	      <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
	        <h4>Outdoor Video Editing</h4>
	        <p>Our video editing services allows you to capture the thrill and excitement of your outdoor activities. Whether you’re skiing down icy slopes or camping in the wilderness, our video editing services lets you relive the adventure.</p>
	        <a href="{{ url('/video-editing-services#out') }}" class="btn">Learn More</a>
	      </div>
	    </div>

	    <div class="row feature-item mt-5 pt-5">
	      <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
	        <img src="{{ asset('img/services/eventpromo.png') }}" class="img-fluid" alt="">
	      </div>

	      <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
	        <h4>Promotional Video Editing</h4>
	        <p>Reach your target audience and get your company recognized with our promotional videos. Whether you want to promote an event or launch a new product, we can make promos for it all.</p>
			<a href="{{ url('/video-editing-services#prom') }}" class="btn">Learn More</a>
	      </div>   
	    </div>

	    <div class="row feature-item mt-5 pt-5">
	      <div class="col-lg-6 wow fadeInUp">
	        <img src="{{ asset('img/services/custom-01-1024x576.png') }}" class="img-fluid" alt="">
	      </div>
	      <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
	        <h4>Custom Requirements</h4>
	        <p> you don’t know where to start or want a custom made project, then contact us. Our professional team of editors will discuss your project and send you a quote.</p>
	        <a href="{{ url('/video-editing-services') }}" class="btn">Learn More</a>
	      </div>
	    </div>

	  </div>
	</section><!-- #about -->

	<!--==========================
	  Timeline
	============================-->
	<section id="team">
	  <div class="container">
	    <div class="section-header">
	      <h3>Our Process</h3>
	      <p>Working with Viflix is very easy! You’ll sure love our simple and elegant process.</p>
	    </div>
		<div class="container-fluid">
		    <div class="row example-centered">
		        <div class="col-xs-12 col-xs-offset-1 col-sm-12 col-sm-offset-2">
		            <ul class="timeline timeline-centered">
		                <li class="timeline-item">
		     
		                    <div class="timeline-marker"></div>
		                    <div class="timeline-content">
		                        <h3 class="timeline-title">Begin</h3>
		                    </div>
		                </li>
		                <li class="timeline-item">
		                    <div class="timeline-marker"></div>
		                    <div class="timeline-content">
		                        <h3 class="timeline-title">Upload</h3>
		                    </div>
		                </li>
		                <li class="timeline-item">
		                    <div class="timeline-marker"></div>
		                    <div class="timeline-content">
		                        <h3 class="timeline-title">Edit</h3>
		                    </div>
		                </li>
		                <li class="timeline-item">
		                    <div class="timeline-marker"></div>
		                    <div class="timeline-content">
		                        <h3 class="timeline-title">Revisions</h3>
		                    </div>
		                </li>
		                <li class="timeline-item">
		                    <div class="timeline-marker"></div>
		                    <div class="timeline-content">
		                        <h3 class="timeline-title">Pay</h3>
		                    </div>
		                </li>
		                <li class="timeline-item">
		                    <div class="timeline-marker"></div>
		                    <div class="timeline-content">
		                        <h3 class="timeline-title">Download</h3>
		                    </div>
		                </li>
		            </ul>
		        </div>
		    </div>
		</div>


	  </div>
	</section><!-- #timeline -->

	<!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Promotional</li>
              <li data-filter=".filter-card">Corporate</li>
              <li data-filter=".filter-web">Outdoor</li>
            </ul>
          </div>
        </div>

		<!-- https://img.youtube.com/vi/hyAg-sVBuNw/hqdefault.jpg -->
        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/hyAg-sVBuNw?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=hyAg-sVBuNw&disablekb=1&vq=small"
					frameBorder="0" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4><a>Viflix</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="https://www.youtube.com/watch?v=hyAg-sVBuNw" data-lity data-title="Viflix" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="{{ URL::to('https://www.youtube.com/watch?v=hyAg-sVBuNw') }}" target="blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/xQJfFLJufYw?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=xQJfFLJufYw&disablekb=1&vq=small"
					frameBorder="0" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4><a>Cinematic</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="https://www.youtube.com/watch?v=xQJfFLJufYw" data-lity data-title="Cinematic" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="{{ URL::to('https://www.youtube.com/watch?v=xQJfFLJufYw') }}" target="blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/vlDzYIIOYmM?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=vlDzYIIOYmM&disablekb=1&vq=small"
					frameBorder="0" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4><a>GoPro</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="https://www.youtube.com/watch?v=vlDzYIIOYmM" data-lity data-title="GoPro" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="{{ URL::to('https://www.youtube.com/watch?v=vlDzYIIOYmM') }}" target="blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/UalTfOIDQ7M?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=UalTfOIDQ7M&disablekb=1&vq=small"
					frameBorder="0" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4><a>Creative Percept</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="https://www.youtube.com/watch?v=UalTfOIDQ7M" data-lity data-title="Creative Percept" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="{{ URL::to('https://www.youtube.com/watch?v=UalTfOIDQ7M') }}" target="blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/M4nDf8Js-p4?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=M4nDf8Js-p4&disablekb=1&vq=small"
					frameBorder="0" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4><a>Tips</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="https://www.youtube.com/watch?v=M4nDf8Js-p4" data-lity data-title="Tips" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="{{ URL::to('https://www.youtube.com/watch?v=M4nDf8Js-p4') }}" target="blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/W52Yi86GfuU?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=W52Yi86GfuU&disablekb=1&vq=small"
					frameBorder="0" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4><a>Starbucks</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="https://www.youtube.com/watch?v=W52Yi86GfuU" data-lity data-title="Starbucks" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="{{ URL::to('https://www.youtube.com/watch?v=W52Yi86GfuU') }}" target="blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/Fjo20qYsXqc?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=Fjo20qYsXqc&disablekb=1&vq=small"
					frameBorder="0" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4><a>Microsoft</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="https://www.youtube.com/watch?v=Fjo20qYsXqc" data-lity data-title="Microsoft" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="{{ URL::to('https://www.youtube.com/watch?v=Fjo20qYsXqc') }}" target="blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/PfxLRA2bJ3A?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=PfxLRA2bJ3A&disablekb=1&vq=small"
					frameBorder="0" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4><a>Euromicron</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="https://www.youtube.com/watch?v=PfxLRA2bJ3A" data-lity data-title="Euromicron" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="{{ URL::to('https://www.youtube.com/watch?v=PfxLRA2bJ3A') }}" target="blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <iframe class="img-fluid" width="560" height="315" src="https://www.youtube.com/embed/KfW5U7lmaiI?autoplay=1&mute=1&enablejsapi=1&controls=0&loop=1&playlist=KfW5U7lmaiI&disablekb=1&vq=small"
					frameBorder="0" allowfullscreen></iframe>
              <div class="portfolio-info">
                <h4><a>Fish Catching</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="https://www.youtube.com/watch?v=KfW5U7lmaiI" data-lity data-title="Fish Cartching" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="{{ URL::to('https://www.youtube.com/watch?v=KfW5U7lmaiI') }}" target="blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

	<!--==========================
	  Testimonial
	============================-->
	<section id="testimonials">
	  <div class="container">

	    <header class="section-header">
	      <h3>Customer Testimonials</h3>
	    </header>

	    <div class="row justify-content-center">
	      <div class="col-lg-8">

	        <div class="owl-carousel testimonials-carousel wow fadeInUp">

	          <div class="testimonial-item">
	            <img src="{{ asset('img/quote.png') }}" class="testimonial-img" alt="">
	            <h3>Renew Your Health</h3>
	            <p>
	              I had a complicated video caption template created and Viflix was super helpful fully understood the project & delivered it on time. Highly recommended.
	            </p>
	          </div>

	          <div class="testimonial-item">
	            <img src="{{ asset('img/quote.png') }}" class="testimonial-img" alt="">
	            <h3>Macwat</h3>
	            <p>
	              Had a great experience working with Viflix. Patient and they gave us the flexibility to get the video right. I will be using them again! Very soon!
	            </p>
	          </div>

	          <div class="testimonial-item">
	            <img src="{{ asset('img/quote.png') }}" class="testimonial-img" alt="">
	            <h3>Ollywoadhill</h3>
	            <p>
	              Perfect work! Clear communication and fast completion and reasonable price. I strongly recommend Viflix for video editing services.
	            </p>
	          </div>

	          <div class="testimonial-item">
	            <img src="{{ asset('img/quote.png') }}" class="testimonial-img" alt="">
	            <h3>Creative Hands</h3>
	            <p>They are very talented and creative. I am more than satisfied with the results and will definitely be working again for future projects.
	            </p>
	          </div>

	        </div>

	      </div>
	    </div>


	  </div>
	</section><!-- #testimonials -->

    	<!--==========================
	  About Us Section
	============================-->
	<section id="about">

	  <div class="container">
	    <div class="row">

	      <div class="col-lg-5 col-md-6">
	        <div class="about-img">
	          <img src="{{ asset('img/About_us.png') }}" alt="">
	        </div>
	      </div>

	      <div class="col-lg-7 col-md-6">
	        <div class="about-content">
	          <h2>About Us</h2>
	          <p>We are capturing more video footage than ever before. But the challenge of editing all those clips into a video that you can share and enjoy often leads to the loss of your precious moments.Well not anymore, We take your footage and turn it into a high quality video that you can share and enjoy. Whether its a birthday party or clips from your camping trip, our team of professional editors will create amazing videos, allowing you to relive the adventure.Our professional approach, years of experience and cost effective prices have allowed us to grow as a community. Keeping every customer’s need in mind and deploying best editing techniques, we have been able to help people and brands. Our customers have been the motivation factor behind our drive for discovering visual elegance.</p>
	          <h3>Our Process</h3>
	          <p>Viflix makes the video editing process very easy and simple for you. Just follow two simple steps.</p>
	          <ul>
	            <li><i class="ion-android-checkmark-circle"></i> Upload your footage to our secure servers and tell us about the services that best matches your needs.</li>
	            <li><i class="ion-android-checkmark-circle"></i> From here on, our team will start working on your footage, following your guidelines and expectations.</li>
	            <li><i class="ion-android-checkmark-circle"></i> Once completed, we will send you the final video for your review. If you want any edits, that’s no problem, you can make three revisions, guaranteeing the video of your dreams!</li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>

	</section><!-- #about -->


	</main>


<!-- <a href="{{route('ves')}}">Services</a>
<a href="{{route('blog')}}">Blog</a>
<a href="{{route('privacy')}}">Privacy Policy</a> -->
@endsection
