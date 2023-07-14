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
                        <h2 class="text-center pt-5">RSVP Plus</h2>  
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
                <div class="main-date-appointment main-date-appointment-new0">
                  <h4 class="">
                    The Host Requires A Downpayment 
                  </h4>
                  <p>Your confirmation will be sent after sucessful payment of the downpayment of the door charge.</p>
                </div>
                <!-- Contact Details -->
                <div class="main-date-appointment">
                  <h4 class="">
                    Send RSVP to Host
                  </h4>
                  <div class="btn-dates-appointment">
                    <a class="btn  btn-lights-new-rounded" for="fname-app">Olivia Rhye</a>
                    <a class="btn  btn-lights-new-rounded">Add Contact</a>
                  </div>
                  <form>
                    <div class="form-row form-row-appointment">
                      <div class="col">
                        <label class="" for="fname-app">First name</label>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" id="fname-app" placeholder="Olivia">
                      </div>
                    </div>

                    <div class="form-row form-row-appointment">
                      <div class="col">
                        <label class="" for="lname-app">Last name</label>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" id="lname-app" placeholder="Rhye">
                      </div>
                    </div>
                    <div class="form-row form-row-appointment">
                      <div class="col">
                        <label class="" for="phno-app">Phone Number</label>
                      </div>
                      <div class="col">
                        <input type="number" class="form-control" id="phno-app" placeholder="456-789-123">
                      </div>
                    </div>
                    <div class="form-row form-row-appointment">
                      <div class="col">
                        <label class="" for="email-app">Email</label>
                      </div>
                      <div class="col">
                        <input type="email" class="form-control" id="email-app" placeholder="oliviarhye@gmail.com">
                      </div>
                    </div>

                    <div class="d-flex justify-content-end">
                      <a href="#" class="btn btn-lights-new-rounded">edit</a>
                    </div>

                  </form>
                  
                </div>

                <div class="main-date-appointment">
                  <h4 class="mb-0">
                    Downpayment Details
                  </h4>
                  
                  <form>
                    <div class="form-row form-row-appointment">
                      <div class="col">
                        <label class="" for="fname-app">Door Charge</label>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" id="fname-app" placeholder="$25">
                      </div>
                    </div>

                    <div class="form-row form-row-appointment">
                      <div class="col">
                        <label class="" for="lname-app">Downpayment</label>
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" id="lname-app" placeholder="$5">
                      </div>
                    </div>
                    

                  </form>
                  
                </div>

                <p class="mb-0 color-light-grey small">
                    I acknowledge and agree to The Block’s General Terms of Use and Privacy Policy.
                  </p>
              	<a href="payment" class="btn btn-blue-new mt-3">Proceed to Payment</a>
              	  
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
