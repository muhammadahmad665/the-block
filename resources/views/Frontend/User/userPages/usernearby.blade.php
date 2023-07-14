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
                        <h2 class="text-center pt-5">What’s Nearby?</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="right-set-nearby mt-3">
    					<div class="set-btns-left-menu">
    						<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						      <a class="nav-link active" id="v-pills-restaurant-tab" data-toggle="pill" data-target="#v-pills-restaurant" type="button" role="tab" aria-controls="v-pills-restaurant" aria-selected="true">Restaurants</a>
						      <a class="nav-link" id="v-pills-gasstation-tab" data-toggle="pill" data-target="#v-pills-gasstation" type="button" role="tab" aria-controls="v-pills-gasstation" aria-selected="false">Gas Stations</a>
						      <a class="nav-link" id="v-pills-restaurant-tab" data-toggle="pill" data-target="#v-pills-restaurant" type="button" role="tab" aria-controls="v-pills-restaurant" aria-selected="false">Restaurants</a>
						      
						    </div>

	    				</div>

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
	  					<div class="tab-content" id="v-pills-tabContent">
					      <div class="tab-pane fade show active" id="v-pills-restaurant" role="tabpanel" aria-labelledby="v-pills-restaurant-tab">
					      	<div class="row ">
	  						
		  						<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
				    				@include('Frontend.Login.Components.nearbycard')
				    			</div>
				    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
				    				@include('Frontend.Login.Components.nearbycard')
				    			</div>
				    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
				    				@include('Frontend.Login.Components.nearbycard')
				    			</div>
				    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
				    				@include('Frontend.Login.Components.nearbycard')
				    			</div>
				    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
				    				@include('Frontend.Login.Components.nearbycard')
				    			</div>
				    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
				    				@include('Frontend.Login.Components.nearbycard')
				    			</div>
				    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
				    				@include('Frontend.Login.Components.nearbycard')
				    			</div>
		  					</div>
					      </div>

					      <div class="tab-pane fade" id="v-pills-gasstation" role="tabpanel" aria-labelledby="v-pills-gasstation-tab">...</div>
					      <div class="tab-pane fade" id="v-pills-restaurant" role="tabpanel" aria-labelledby="v-pills-restaurant-tab">...</div>
					      
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
