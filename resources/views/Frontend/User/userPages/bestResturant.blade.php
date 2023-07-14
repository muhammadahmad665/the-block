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
                        <h2 class="text-center pt-5">Best Restaurants</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			
                <div class="col-md-4 mt-3">
                    <div class="main-filters">
                        <div class="set-all-filter-backs">
                            <a class="" href="#">Relevance</a>
                            <a class="" href="#">Open Now</a>
                            <a class="" href="#">Top Rated</a>                            
                        </div>
                        <h4 class="my-3">
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
