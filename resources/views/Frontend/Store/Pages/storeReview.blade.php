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
                        <h2 class="text-center pt-5">Store Review</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			<div class="col-md-4 pt-3">
    				@include('Frontend.store.Components.leftSideProfile2')
    			</div>


	    		<div class="col-md-8 pt-3">
	  				<div class="flex-column">
	  					
	  					<div class="d-flex justify-content-between">
	  						<h2 class="mb-4 font-22">Store Review</h2>
	  					</div>

	  					<div class="row ">
	  						
	  						<div class="  col-sm-6 pt-3">
			    				@include('Frontend.store.Components.reviewcards2')
			    			</div>
			    			<div class="  col-sm-6 pt-3">
			    				@include('Frontend.store.Components.reviewcards2')
			    			</div>
			    			<div class="  col-sm-6 pt-3">
			    				@include('Frontend.store.Components.reviewcards2')
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
