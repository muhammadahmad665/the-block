@section('links')
@endsection
@extends('welcome')
@section('contentarea')

<header class="">
    <div class="for-stick">
        @include('Frontend.Navs.Header.managerheader')
    </div> 
</header>
<section class="inner-content back-new">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 overflow-hidden">
                    <div class="set-hero-top " data-aos="fade-right">
                        <h2 class="text-center pt-5">Home Bussiness</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			<div class="col-md-4 pt-3">
    				@include('Frontend.Store.Components.sideProfileManage')
    			</div>


	    		<div class="col-md-8">
	  				<div class="">
	  					<h2 class="mb-0">Top 10</h2>
	  					<div class="row ">
	  						
	  						<div class="  col-sm-4 pt-3">
			    				@include('Frontend.store.Components.reviewcards')
			    			</div>
			    			<div class="  col-sm-4 pt-3">
			    				@include('Frontend.store.Components.reviewcards')
			    			</div>
			    			<div class="  col-sm-4 pt-3">
			    				@include('Frontend.store.Components.reviewcards')
			    			</div>
			    			
			    			
	  					</div>
	  					<h2 class="my-4">Product Review</h2>

	  					<!-- Post -->
                        @include('Frontend.User.userComponents.post')

                        <h2 class="my-4">Bussiness Review</h2>

	  					<!-- Post -->
                        @include('Frontend.User.userComponents.post')

	  					
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
