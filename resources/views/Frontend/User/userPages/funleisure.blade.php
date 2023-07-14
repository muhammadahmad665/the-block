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
<section class="inner-content  back-new2 ">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 overflow-hidden">
                    <div class="set-hero-top " data-aos="fade-right">
                        <h2 class="text-center pt-5">Fun & Leisure</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			
                <div class="col-md-4">
                    <div class="main-filters">
                        <h4 class="">
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
                            <input type="checkbox" checked>
                            <span class="slider-switch-cus round"></span>
                            </label>
                        </div>
                        <div class="set-all-filter-backs">
                            <h5>Categories</h5>
                            <div class="set-custom-cata">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Transport & Services</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Food & Beverage</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">Malls & Shopping</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Healthcare & Beauty</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">Parenting Fun</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6">Housing & Accomodation</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7">Attractions</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label" for="customCheck8">Entertainment & Leisure</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                                    <label class="custom-control-label" for="customCheck9">Coop & Finance</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                    <label class="custom-control-label" for="customCheck10">Wellness & Health</label>
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
                    <div class="">
                        <div class="row">
                            <div class=" col-sm-6 pt-3">
                                @include('Frontend.Login.Components.nearbycard')
                            </div>
                            <div class=" col-sm-6 pt-3">
                                @include('Frontend.Login.Components.nearbycard')
                            </div>
                            <div class=" col-sm-6 pt-3">
                                @include('Frontend.Login.Components.nearbycard')
                            </div>
                            <div class=" col-sm-6 pt-3">
                                @include('Frontend.Login.Components.nearbycard')
                            </div>
                            <div class=" col-sm-6 pt-3">
                                @include('Frontend.Login.Components.nearbycard')
                            </div>
                            <div class=" col-sm-6 pt-3">
                                @include('Frontend.Login.Components.nearbycard')
                            </div>
                        </div>
                    </div>
                </div>
    			
    		</div>
    	</div>
</section>
<!-- footer -->
@include('Frontend.Navs.Footer.footerscribe')

@endsection
@section('script')
@endsection
