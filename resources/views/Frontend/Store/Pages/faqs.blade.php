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
                        <h2 class="text-center pt-5">Frequently Asked Questions</h2>  
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

    			<div class="col-md-8 pt-3 ">
    				<div class="">
    					<h2 class="font-22">Frequently Asked Questions</h2>

    					<!-- Faqs -->
    					<div id="main-faqs">
						  
							<div class="accordion" id="faq">
			                    <div class="card">
			                        <div class="card-header" id="faqhead1">
			                            <a href="#" class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"
			                            aria-expanded="true" aria-controls="faq1">How to advertise on The Block? </a>
			                        </div>

			                        <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
			                            <div class="card-body">
			                                Mi ultrices dui nunc amet nisl euismod in eget pulvinar. Nec morbi purus eros morbi dui proin enim mauris. Est etiam tellus urna id faucibus nec ridiculus egestas. Arcu senectus augue turpis fermentum urna in rhoncus dignissim. Massa massa etiam tristique mi gravida nullam. 
			                            </div>
			                        </div>
			                    </div>
			                    <div class="card">
			                        <div class="card-header" id="faqhead2">
			                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
			                            aria-expanded="true" aria-controls="faq2">How to advertise on The Block? </a>
			                        </div>

			                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
			                            <div class="card-body">
			                                Mi ultrices dui nunc amet nisl euismod in eget pulvinar. Nec morbi purus eros morbi dui proin enim mauris. Est etiam tellus urna id faucibus nec ridiculus egestas. Arcu senectus augue turpis fermentum urna in rhoncus dignissim. Massa massa etiam tristique mi gravida nullam.
			                            </div>
			                        </div>
			                    </div>
			                    <div class="card">
			                        <div class="card-header" id="faqhead3">
			                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
			                            aria-expanded="true" aria-controls="faq3">How to advertise on The Block? </a>
			                        </div>

			                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
			                            <div class="card-body">
			                                Mi ultrices dui nunc amet nisl euismod in eget pulvinar. Nec morbi purus eros morbi dui proin enim mauris. Est etiam tellus urna id faucibus nec ridiculus egestas. Arcu senectus augue turpis fermentum urna in rhoncus dignissim. Massa massa etiam tristique mi gravida nullam.
			                            </div>
			                        </div>
			                    </div>
			                </div>
						    
						 </div>
						 <!-- Faqs cc -->
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
