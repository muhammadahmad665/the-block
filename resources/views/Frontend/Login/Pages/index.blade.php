@section('links')
@endsection
@extends('welcome')
@section('contentarea')
<!-- Header -->
<header class="">
        <div class="for-stick">
            @include('Frontend.Navs.Header.header')
        </div>    
</header>
    <!-- hero slider -->
<section class="hero-slider ">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 px-0">
                <!-- Swiper -->
                <div class="swiper mySwiper-heromain">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide hero-back-slider1 hero-back-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="set-hero set-hero-black" data-aos="fade-right">
                                        <h2>Be in the lookout for the latest events.</h2>
                                        <p>We revolutionize the way businesses acquire and keep their clients and consumers engaged.</p>
                                        <div class="btns-click">
                                            <a href="#"><img class="img-fluid" src="{{ asset('assets/images/apple-playstore.png') }}"></a>
                                            <a href="#" class="ml-2"><img class="img-fluid" src="{{ asset('assets/images/google-playstore.png') }}"></a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="swiper-slide hero-back-slider2 hero-back-slider">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="set-hero set-hero-black" data-aos="fade-right">
                                        <h2>Be in the lookout for the latest events.</h2>
                                        <p>We revolutionize the way businesses acquire and keep their clients and consumers engaged.</p>
                                        <div class="btns-click">
                                            <a href="#"><img class="img-fluid" src="{{ asset('assets/images/apple-playstore.png') }}"></a>
                                            <a href="#" class="ml-2"><img class="img-fluid" src="{{ asset('assets/images/google-playstore.png') }}"></a>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="swiper-slide hero-back-slider3 hero-back-slider">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="set-hero " data-aos="fade-right">
                                            <h2>Be in the lookout for the latest events.</h2>
                                            <p>We revolutionize the way businesses acquire and keep their clients and consumers engaged.</p>
                                            <div class="btns-click">
                                                <a href="#"><img class="img-fluid" src="{{ asset('assets/images/apple-playstore.png') }}"></a>
                                                <a href="#" class="ml-2"><img class="img-fluid" src="{{ asset('assets/images/google-playstore.png') }}"></a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="swiper-slide">
                        <div class="swiper-slide hero-back-slider4 hero-back-slider">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="set-hero " data-aos="fade-right">
                                            <h2>Be in the lookout for the latest events.</h2>
                                            <p>We revolutionize the way businesses acquire and keep their clients and consumers engaged.</p>
                                            <div class="btns-click">
                                                <a href="#"><img class="img-fluid" src="{{ asset('assets/images/apple-playstore.png') }}"></a>
                                                <a href="#" class="ml-2"><img class="img-fluid" src="{{ asset('assets/images/google-playstore.png') }}"></a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-hero-slider"></div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- hero slider close -->

<section class="bg-lights py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 overflow-hidden">
                <div class="businesses " data-aos="fade-up">
                    <p class="text-center">Popular businesses in Ghana are now in theBlock!</p>
                    <div class="businesses-inner ">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="">
                                    <!-- Swiper -->
                                    <div class="swiper mySwiper2">
                                    <div class="swiper-wrapper">
                                            <div class="swiper-slide text-center-sm">
                                            <img class="img-fluid" src="{{ asset('assets/images/l1.png') }}">
                                            </div>
                                            <div class="swiper-slide text-center-sm">
                                            <img class="img-fluid" src="{{ asset('assets/images/l2.png') }}">
                                            </div>
                                            <div class="swiper-slide text-center-sm">
                                            <img class="img-fluid" src="{{ asset('assets/images/l3.png') }}">
                                            </div>
                                            <div class="swiper-slide text-center-sm">
                                            <img class="img-fluid" src="{{ asset('assets/images/l4.png') }}">
                                            </div>
                                            <div class="swiper-slide text-center-sm">
                                            <img class="img-fluid" src="{{ asset('assets/images/l5.png') }}">
                                            </div>
                                            <div class="swiper-slide text-center-sm">
                                            <img class="img-fluid" src="{{ asset('assets/images/l6.png') }}">
                                            </div>                                          
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Love that we could make businesses accountable. -->    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <!-- Swiper -->
                          <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <div class="slider-main">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-6 overflow-hidden">
                                                <div class="slider-inner " data-aos="fade-right">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <h2 class="pb-3 w-75">Love that we could make businesses accountable.</h2>
                                                    <p class="mb-0">— Renee Wells</p>
                                                    <p>Influencer</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 overflow-hidden">
                                                <div class="video-right" data-aos="fade-left">
                                                     <a href="#">
                                                     <img class="img-fluid" src="{{ asset('assets/images/slider0.png') }}">
                                                     </a>
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="slider-main">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-6 overflow-hidden" >
                                                <div class="slider-inner" data-aos="fade-right">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <h2 class="pb-3 w-75">Love that we could make businesses accountable.</h2>
                                                    <p class="mb-0">— Renee Wells</p>
                                                    <p>Influencer</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 overflow-hidden">
                                                <div class="video-right" data-aos="fade-left">
                                                     <a href="#">
                                                     <img class="img-fluid" src="{{ asset('assets/images/slider0.png') }}">
                                                     </a>
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                  <div class="slider-main">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-6 overflow-hidden">
                                                <div class="slider-inner " data-aos="fade-right">
                                                    <ul>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                        <li><i class="fa-solid fa-star"></i></li>
                                                    </ul>
                                                    <h2 class="pb-3 w-75">Love that we could make businesses accountable.</h2>
                                                    <p class="mb-0">— Renee Wells</p>
                                                    <p>Influencer</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 overflow-hidden">
                                                <div class="video-right" data-aos="fade-left">
                                                     <a href="#">
                                                     <img class="img-fluid" src="{{ asset('assets/images/slider0.png') }}">
                                                     </a>
                                                </div>
                                            </div>
                                        </div>
                                 </div>
                              </div>

                              
                            </div>
                            <div class="swiper-pagination swiper-pagination-cus"></div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto overflow-hidden">
                    <div class="features-set" data-aos="fade-up">
                        <p class="mb-0">Features</p>
                        <h2 class="mb-0 py-3">We revolutionize the way people conduct business.</h2>
                        <p class="mb-0">Powerful, self-serve product and growth analytics to help you convert, engage, and retain more users. Trusted by over 4,000 startups.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search for local businesses in your locale -->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 overflow-hidden">
                    <div class="local-business" data-aos="fade-right">
                        <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid pb-3">
                        <div class="ml-3">
                            <h4>Search for local businesses in your locale</h4>
                            <p>Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid pb-3"> 
                                    <span class="ml-3">Leverage automation to move fast</span>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid pb-3"> 
                                    <span class="ml-3">Always give customers a human to chat to</span>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid pb-3"> 
                                    <span class="ml-3">Automate customer support and close leads faster</span>
                                </li>
                            </ul>
                        </div>                 
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center overflow-hidden">
                    <div class="inner-img-business" data-aos="fade-left">
                        <img src="{{ asset('assets/images/mbl1.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center overflow-hidden">
                    <div class="inner-img-business" data-aos="fade-right">
                    <img src="{{ asset('assets/images/mbl2.png') }}" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 overflow-hidden">
                    <div class="local-business" data-aos="fade-left">
                    <img src="{{ asset('assets/images/FI2.png') }}" class="img-fluid">
                        <div class="ml-3">
                            <h4>Search for local businesses in your locale</h4>
                            <p>Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid "> 
                                    <span class="ml-3">Leverage automation to move fast</span>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid "> 
                                    <span class="ml-3">Always give customers a human to chat to</span>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid "> 
                                    <span class="ml-3">Automate customer support and close leads faster</span>
                                </li>
                            </ul>
                        </div>                 
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 overflow-hidden">
                    <div class="local-business" data-aos="fade-right">
                        <img src= "assets/images/FI3.png" class="img-fluid pb-3">
                        <div class="ml-3">
                            <h4>Search for local businesses in your locale</h4>
                            <p>Whether you have a team of 2 or 200, our shared team inboxes keep everyone on the same page and in the loop.</p>
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid "> 
                                    <span class="ml-3">Leverage automation to move fast</span>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid "> 
                                    <span class="ml-3">Always give customers a human to chat to</span>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/tick.png') }}" class="img-fluid "> 
                                    <span class="ml-3">Automate customer support and close leads faster</span>
                                </li>
                            </ul>
                        </div>                 
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center overflow-hidden">
                    <div class="inner-img-business" data-aos="fade-left">
                    <img src="{{ asset('assets/images/mbl3.png') }}" class="img-fluid ">
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Search for local businesses in your locale close-->

     <!-- catagerios -->
     @include('Frontend.Login.Components.catagories')
    <!-- Start Your Journey Today -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="back-blue ">
                        <div class="row">
                            <div class="col-md-6 overflow-hidden">
                                <div class="inner-left-jour" data-aos="fade-right">
                                    <h4>Start Your Journey Today</h4>
                                    <p>Personal performance tracking made easy.</p>
                                    <div class="btns-apps">
                                        <a href=""><img src="{{ asset('assets/images/wapple.png') }}" class="img-fluid "></a>
                                        <a href="" class="ml-3"><img src="{{ asset('assets/images/wgoogle.png') }}" class="img-fluid "></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 overflow-hidden">
                                <div class="" data-aos="fade-left">
                                <img src="{{ asset('assets/images/journey.png') }}" class="img-fluid pb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- footer -->
    @include('Frontend.Navs.Footer.footer')
@endsection
@section('script')
@endsection
