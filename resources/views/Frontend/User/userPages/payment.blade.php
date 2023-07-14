@section('links')
@endsection
@extends('welcome')
@section('contentarea')

<header class="">
    <div class="for-stick">
        @include('Frontend.Navs.Header.headerquick')
    </div> 
</header>
<section class="inner-content back-new">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 overflow-hidden">
                    <div class="set-hero-top " data-aos="fade-right">
                        <h2 class="text-center pt-5">Payment</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			<div class="col-md-8 m-auto">
    				<div class="row">
    					<div class="col-md-6">
    				@include('Frontend.User.userComponents.leftBooking')
    			</div>


	    		<div class="col-md-6">
	  				
	  					<div class="reedem-main">
                
               <h3>USD <span>25.00</span></h3>

               <div class="bk-details">
                 <h4 class="font-14 mb-0"><a href="#">Booking Details</a></h4>
               </div>

              <div class="cards-sets">
                <div class="inner-payments-card">
                  <h4 class="mb-0">
                    <img src="assets/images/mastercard.png" class="img-fluid">
                    <span>Mastercard</span>
                  </h4>
                  <input type="radio" >
                </div>

                <div class="inner-payments-card">
                  <h4 class="mb-0">
                    <img src="assets/images/visa.png" class="img-fluid">
                    <span>Visa</span>
                  </h4>
                  <input type="radio" >
                </div>

                <div class="inner-payments-card">
                  <h4 class="mb-0">
                    <img src="assets/images/paypal.png" class="img-fluid">
                    <span>Paypal</span>
                  </h4>
                  <input type="radio" >
                </div>

                <div class="inner-payments-card">
                  <h4 class="mb-0">
                    <img src="assets/images/applepay.png" class="img-fluid">
                    <span>Apple Pay</span>
                  </h4>
                  <input type="radio" >
                </div>
              </div>

              	<a href="#" class="btn btn-blue-new mt-3">Pay Now</a>
              	  
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
