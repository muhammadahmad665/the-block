@section('links')
@endsection
@extends('welcome')
@section('contentarea')

<header class="">
    <div class="for-stick">
        @include('Frontend.Navs.Header.headerquick')
        @include('Frontend.Login.Components.catagoriesdropdown')
    </div> 
</header>
<section class="inner-content back-new">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 overflow-hidden">
                    <div class="set-hero-top " data-aos="fade-right">
                        <h2 class="text-center pt-5">What's Hot?</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>
    <!-- What's Hot? -->
    <section class="py-5 overflow-hidden bg-lights">
    		<div class="container" >

                <div class="row">
                    <div class="col-md-4 py-5">
                        <div class="main-filters">
                            <div class="set-btns-left-menu">
                                <a href="#deals">Deals</a>    
                                <a href="#flashsale">Flash Sale</a>
                                <a href="#events">Events</a>
                                
                            </div>
                            <h4 class="font-22 mb-0">
                                Filters
                            </h4>
                            <div class="set-all-filter-backs">
                                <h5>Rating</h5>
                                <div class="btns-filters">
                                    <a class="" href="#"><span class="">5</span> <i class="fa-regular fa-star"></i></a>
                                    <a class="" href="#"><span class="">4</span> <i class="fa-regular fa-star"></i></a>
                                    <a class="" href="#"><span class="">3</span> <i class="fa-regular fa-star"></i></a>
                                    <a class="" href="#"><span class="">2</span> <i class="fa-regular fa-star"></i></a>
                                    <a class="" href="#"><span class="">1</span> <i class="fa-regular fa-star"></i></a>
                                </div>
                            </div>
                            <div class="set-all-filter-backs">
                                <h5>Operating Hours</h5>
                                <div class="btns-filters btns-filters2 ">
                                    <a class="" href="#"><span class="">Open only</span> </a>
                                    <a class="" href="#"><span class="">All</span> </a>
                                </div>
                            </div>
                            <div class="set-all-filter-backs2">
                                <h5>Favorite Businesses</h5>
                                <label class="switch-cus">
                                <input type="checkbox" checked="">
                                <span class="slider-switch-cus round"></span>
                                </label>
                            </div>
                            <div class="set-all-filter-backs">
                                <h5>Deal Type</h5>
                                <div class="set-custom-cata">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Discounts</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Buy One, Get One</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Freebie</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">Cashback</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Point Rewards</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck6">Others</label>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="set-all-filter-backs">
                                <h5>Distance To Location</h5>
                                <div class="btns-filters btns-filtersloc">
                                    <a class="" href="#">
                                        Less Than 1km </a>
                                    <a class="" href="#"> Less Than 5km </a>
                                    <a class="" href="#">Less Than 10km </a>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="col-md-8">
                        <div class="py-5">
                            <main>
                                <!-- deals -->
                                <div class="row" id="deals">
                                    <div class="col-md-12" data-aos="fade-up">
                                        <div class="d-flex justify-content-between">
                                            <h2 class="h2-same">Deals</h2>
                                            <a href="#" class="color-blue">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-12 " data-aos="fade-up">
                                            <div class="py-3 ">
                                                <div class="row py-3">
                                                    <div class=" col-lg-6 col-md-12 col-6 pt-3">
                                                        @include('Frontend.Login.Components.whatshotdeals')
                                                    </div>
                                                    <div class=" col-lg-6 col-md-12 col-6 pt-3">
                                                        @include('Frontend.Login.Components.whatshotdeals')
                                                    </div>
                                                    <div class=" col-lg-6 col-md-12 col-6 pt-3">
                                                        @include('Frontend.Login.Components.whatshotdeals')
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-6 pt-3">
                                                        @include('Frontend.Login.Components.whatshotdeals')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- deals close -->

                                <!-- Flash Sale -->
                                <div class="row" id="flashsale">
                                    <div class="col-md-12" data-aos="fade-up">
                                        <div class="d-flex justify-content-between">
                                            <h2 class="h2-same">Flash Sale</h2>
                                            <a href="#" class="color-blue">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-12" data-aos="fade-up">
                                            <div class="py-3 ">
                                                <div class="row py-3 ">
                                                    <div class="col-lg-6 col-md-12 col-6 pt-3">
                                                        @include('Frontend.Login.Components.whatshotflashsale')
                                                    </div>

                                                    <div class="col-lg-6 col-md-12 col-6 pt-3">
                                                        @include('Frontend.Login.Components.whatshotflashsale')
                                                    </div>

                                                    <div class="col-lg-6 col-md-12 col-6 pt-3">
                                                        @include('Frontend.Login.Components.whatshotflashsale')
                                                    </div>

                                                    <div class="col-lg-6 col-md-12 col-6 pt-3">
                                                        @include('Frontend.Login.Components.whatshotflashsale')
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- Flash Sale close-->

                                <!-- Flash Sale 2 -->
                                <div class="row" id="events">
                                    <div class="col-md-12" data-aos="fade-up">
                                        <div class="d-flex justify-content-between">
                                            <h2 class="h2-same">Flash Sale</h2>
                                            <a href="#" class="color-blue">See More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" data-aos="fade-up">
                                        <div class="py-3 ">
                                            <div class="row py-3">
                                                <div class="col-lg-6 col-md-12 col-6 pt-3">
                                                    @include('Frontend.Login.Components.whatshotflashsale2')
                                                </div>

                                                <div class="col-lg-6 col-md-12 col-6 pt-3">
                                                    @include('Frontend.Login.Components.whatshotflashsale2')
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-6 pt-3">
                                                    @include('Frontend.Login.Components.whatshotflashsale2')
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-6 pt-3">
                                                    @include('Frontend.Login.Components.whatshotflashsale2')
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Flash Sale 2 close -->
                            </main>
                        </div>
                    </div>
                </div>

    			
    			
    		</div>
    	</section>
    <!-- What's Hot? close-->
    <!-- footer -->
    @include('Frontend.Navs.Footer.footerscribe')

@endsection
@section('script')
@endsection
