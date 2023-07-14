@section('links')
@endsection
@extends('welcome')
@section('contentarea')

<header class="">
    <div class="for-stick">
        @include('Frontend.Navs.Header.header')
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
    			<!-- deals -->
    			<div class="row">
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
				    				<div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotdeals')
				    				</div>
				    				<div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotdeals')
				    				</div>
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotdeals')
				    				</div>
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotdeals')
				    				</div>
					    		</div>
    						</div>
    					</div>
    			</div>
    			<!-- deals close -->

    			<!-- Flash Sale -->
    			<div class="row">
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
				    				<div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale')
				    				</div>

                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale')
				    				</div>

                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale')
				    				</div>

                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale')
				    				</div>
				    				
					    		</div>
    						</div>
    					</div>
    			</div>
    			<!-- Flash Sale close-->

    			<!-- Flash Sale 2 -->
    			<div class="row">
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
			    				<div class="col-md-4 pt-3">
                                    @include('Frontend.Login.Components.whatshotflashsale2')
			    				</div>

                                <div class="col-md-4 pt-3">
                                    @include('Frontend.Login.Components.whatshotflashsale2')
			    				</div>
                                <div class="col-md-4 pt-3">
                                    @include('Frontend.Login.Components.whatshotflashsale2')
			    				</div>
                                <div class="col-md-4 pt-3">
                                    @include('Frontend.Login.Components.whatshotflashsale2')
			    				</div>
			    				
			    				
				    		</div>
						</div>
					</div>
    			</div>
    			<!-- Flash Sale 2 close -->
    			
    		</div>
    	</section>
    <!-- What's Hot? close-->
    <!-- footer -->
    @include('Frontend.Navs.Footer.footerscribe')

@endsection
@section('script')
@endsection
