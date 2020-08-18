@extends('layouts.app')
@section('title', 'Start Your Project-Viflix')
@section('content')

@php
$promos=DB::table('promo')->get()->all();
$promosA = array();
foreach($promos as $promo) {
 $promosA[$promo->promo] = $promo->amount;
}
@endphp
<!--==========================
Intro Section
============================-->

<section class="banner" style="background: #f5f8fd url({{ asset('img/covers/starturproj.png') }}) center no-repeat; background-size: cover;">
    <div class="d-flex justify-content-center h-100">
        <div class="row justify-content-center align-self-center">
            <div class="col-lg-12">
                <!-- <h2>Start Your Project</h2> -->
            </div>
        </div>
    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      body
    ============================-->
    <section id="about" style="padding-top: 0;padding-bottom: 0">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <footer id="footer">
                            <div class="footer-top" style="background-color: transparent;">
                                <div class="container">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label  id="downloadnibba"
                                                            style=" text-align: center;
                                                                    display: inline-block;
                                                                    overflow-wrap: break-word;
                                                                    background-color: white;
                                                                    background-color: #007bff0f;
                                                                    border-radius: 0;"
                                                            type="text" class="col-xs-9 col-sm-9 col-md-9 col-lg-9 form-control"> Download step by step guide to your project at Viflix </label>
                                                        <a href="{{ route('download.insructions') }}" style="text-align: center; -webkit-appearance: button; display: inline-block;background: #1bb1dc;border: 0;border-radius: 3px;padding: 7px 25px;color: #fff;transition: 0.3s; float: right;" class="col-xs-3 col-sm-3 col-md-3 col-lg-3"  type="button" name="promo">Download</a>
                                                </div>

                                                <h4 id="downloadnibbah" class="pt-3">Enter your details.</h4>
                                                @if(session()->has('message'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('message') }}
                                                </div>
                                                @endif
                                                <form action="/addProject" enctype="multipart/form-data" method="POST"
                                                    role="form" class="form startForm">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                            placeholder="Your Name"
                                                            data-msg="Please enter at least 4 chars">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Your Email" data-rule="email"
                                                            data-msg="Please enter a valid email">
                                                        <div class="validation"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h4
                                                            style="font-weight: normal; padding-top: 15px; margin-bottom: 0;">
                                                            Kindly, pick the video category you want us to edit. - $ 60</h4>
                                                        <input type="radio" name="category" value="Corporate">
                                                        Corporate<br>
                                                        <input type="radio" name="category" value="Promotional">
                                                        Promotional<br>
                                                        <input type="radio" name="category" value="Family Events">
                                                        Family Events<br>
                                                        <input type="radio" name="category" value="Outdoor"> Outdoor<br>
                                                        <input type="radio" name="category" value="Custom" checked>
                                                        Custom
                                                    </div>


                                                    <h4 style="font-weight: normal; padding-top:5px; margin:0px">
                                                        Duration of
                                                        the Raw Footage in Minutes?</h4>
                                                    <p id="ovalue" style=" display: inline-block;font-weight: normal; padding-top:5px;padding-bottom:5px; margin:0px"></p> <span style="display: inline-block;"> Minute(s)</span>

                                                    <p style="font-weight: normal; padding-top:5px;padding-bottom:5px; margin:0px">
                                                        Additional Charges : $ <span id="monaynay"></span></p>
                                                    <div class="slidecontainer">
                                                        <input type="range" min="15" max="105" value="15" class="slider" name="rawlength" 
                                                            id="myRange">
                                                    </div>


                                                    <h4 style="font-weight: normal; padding-top:5px; margin:0px">
                                                        Duration of
                                                        the Final Video in Minutes?
                                                    </h4>
                                                    <p id="ovalue2" style="display: inline-block; font-weight: normal; padding-top:5px;padding-bottom:5px; margin:0px"></p> <span style="display: inline-block;"> Minute(s)</span>
                                                    <p style="font-weight: normal; padding-top:5px;padding-bottom:5px; margin:0px">
                                                        Additional Charges : $ <span id="monaynay2"></span></p>
                                                    <div class="slidecontainer">
                                                        <input type="range" min="1" max="7" value="1" class="slider" name="totallength" 
                                                            id="myRange2">
                                                    </div>


                                                    <div class="form-group">
                                                        <!-- <input type="text" class="form-control" 
                                                            placeholder="Would you like to add some pictures?"
                                                            data-msg="Please enter your answer"> -->
                                                        <div class="form-group">
                                                            <h4 style="font-weight: normal; padding-top: 15px; margin-bottom: 0;"> Would you like to provide some music?</h4>
                                                            <input type="radio" name="music" value="Yes" id="picturesCheck1" checked>
                                                            Yes ($ 0)<br>
                                                            <input type="radio" name="music" value="No" id="picturesCheck2">
                                                            No (Choose the best for me - $ 5)
                                                        </div>
                                                    </div>
                                                       <div class="form-group">
                                                      
                                                        <div class="form-group">
                                                            <h4 style="font-weight: normal; padding-top: 15px; margin-bottom: 0;"> Choose delivery time</h4>
                                                            <input type="radio" name="delivery"  value ="4"id="deliveryCheck1" checked>
                                                            4 days($0)<br>
                                                            <input type="radio" name="delivery" value="3" id="deliveryCheck1">
                                                       3 days($15)
                                                       <br/>
                                                       <input type="radio" name="delivery" value="2" id="deliveryCheck2">
                                                       2 days($30)
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="description" rows="5"
                                                            data-rule="required"
                                                            data-msg="Please write something for us"
                                                            placeholder="Describe your project briefly"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="promo" 
                                                            placeholder="Enter Your promo code (if available)"
                                                            data-msg="Please enter your answer"><button id="promoApply" type="button" name="promo">Apply</button>
                                                    </div>
                                                    
                                                    <div id="discountform" class="form-group">
<!--                                                         <h4 style="font-weight: normal; margin-bottom: 0; display: inline-block;"> You have availed a discount of: </h4><span id="discount" style="font-weight: bold; display: inline-block;float: right;"></span><span style="display: inline-block; float: right;">%</span> -->
                                                    </div>

                                                    <div class="form-group">
                                                        <h4 style="font-weight: normal; display: inline-block;">Sub Total</h4><span id="netTotal" name="netTotal" style="display: inline-block;float: right;"></span> <span style="display: inline-block; float: right;">$</span>
                                                    </div>

                                                    <div class="form-group">
                                                        <h4 style="display: inline-block;">Net Total</h4><span id="finalTotal" name="finalTotal" value="" style="font-weight: bold; display: inline-block;float: right;"></span> <span style="display: inline-block; float: right;">$</span>
                                                    </div>

                                                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                                                    <div id="errormessage">There was an error in processing your
                                                        request. Please try again.</div>

                                                    <div class="text-center">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <input type="hidden" name="total" id="netTotal1" value="">
                                                        <input type="hidden" name="promoamount" id="promoamount" value="">
                                                        <button type="submit" title="Submit">Submit</button></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- #body -->

</main>

<script>

     check_promo();

     function check_promo(query = ''){
        $.ajax({
            url:"{{ route('promo_search.action') }}",
            method:'GET',
            data:{query:query},
            dataType:'json',
            success:function(data){
                $('#discountform').html(data.discountrow);
                $('#promoamount').val(data.promoamount);
                var net = $('#netTotal1').val();
                if(data.promoamount > 0){
                    net = net - (data.promoamount/100 * net);
                    $('#finalTotal').val(net);
                    $('#finalTotal').html(net);
                }
                if(data.promoamount == 0){
                    $('#finalTotal').val(net);
                    $('#finalTotal').html(net);
                }
            }    
        })
    }

     $(document).on('click', '#promoApply', function(){
        var query = $('#promo').val();
        console.log(query);
        check_promo(query);
     });
</script>
<script src="{{ asset('js/slidervalue.js')}}"></script>
<script src="{{ asset('js/promo.js')}}"></script>

<style type="text/css">
  .main-nav a, #header .container .text-light span, #header .container .text-light img, #header #topbar .container a{
    text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
    -webkit-text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
    -moz-text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
    -ms-text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
    -o-text-shadow: 0 0 2px #f8fafc, 0 0 2px #f8fafc;
  }
</style>

@endsection