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
                        <h2 class="text-center pt-5">Booking</h2>  
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

                          <div class="left-newyear-first">
                              <h4 class="mb-0 font-18">Event Details</h4>
                              <ul class="ul-left-newyear">
                                
                                  <li class="">
                                      <a href="">
                                          <p>New Year’s Countdown Party 2022</p>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="">
                                          <img src="assets/images/date.png" class="img-fluid">
                                          <p>December 31, 2022</p>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="">
                                          <img src="assets/images/clock.png" class="img-fluid">
                                          <p>9:00 PM</p>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="">
                                          <img src="assets/images/mappin.png" class="img-fluid">
                                          <p>12 Smith Street, Chinatown</p>
                                      </a>
                                  </li>
                                  
                              </ul>
                          </div>

                          <div class="main-date-appointment">
                            <h4 class="">
                              Date
                            </h4>
                            <div class="btn-dates-appointment">
                              <a class="btn  btn-lights-new-rounded">Today</a>
                              <a class="btn  btn-lights-new-rounded">Tomorrow</a>
                              <a class="btn  btn-lights-new-rounded">Dec 25</a>
                              <a class="btn  btn-lights-new-rounded" type="date">Dates</a>
                            </div>
                          </div>

                          <div class="left-newyear-first left-newyear-first2">
                              <h6 class="mb-0 font-14">Children</h6>
                              <div class="plus-minus">
                                  <div id="increment-count" class="increment-count">
                                    <input type="image" id="up-arrow" src="assets/images/plus.png" />
                                  </div>
                                  <div id="total-count" class="total-count">
                                  </div>
                                  <div id="decrement-count" clas>
                                    <input type="image" id="down-arrow" src="assets/images/minus.png" />
                                  </div>
                              </div>
                          </div>

                          <div class="left-newyear-first left-newyear-first2">
                              <h6 class="mb-0 font-14">Adult</h6>
                              <div class="plus-minus">
                                  <div id="increment-count">
                                    <input type="image" id="up-arrow" src="assets/images/plus.png" />
                                  </div>
                                  <div id="total-count">
                                  </div>
                                  <div id="decrement-count">
                                    <input type="image" id="down-arrow" src="assets/images/minus.png" />
                                  </div>
                              </div>
                          </div>

                          <div class="left-newyear-first left-newyear-first2">
                              <h6 class="mb-0 font-14">Couple</h6>
                              <div class="plus-minus">
                                  <div id="increment-count">
                                    <input type="image" id="up-arrow" src="assets/images/plus.png" />
                                  </div>
                                  <div id="total-count">
                                  </div>
                                  <div id="decrement-count">
                                    <input type="image" id="down-arrow" src="assets/images/minus.png" />
                                  </div>
                              </div>
                          </div>

                          <div class="left-newyear-first">
                              <h4 class="mb-0 font-18">Booking Details</h4>
                              <ul class="ul-left-newyear">
                                
                                  <li class="">
                                      <a href="">
                                          <p>New Year’s Countdown Party 2022</p>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="">
                                          <p>December 31, 2022</p>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="">
                                          <p>1 x Children</p>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="">
                                          <p>1 x Couple</p>
                                      </a>
                                  </li>
                                  <li class="">
                                      <a href="">
                                          <h4 class="mb-0 font-18">$25</h4>
                                      </a>
                                  </li>
                              </ul>
                          </div>

                        	@include('Frontend.User.userComponents.contactDetails')

                        	<a href="rsvp" class="btn btn-blue-new mt-3">Proceed To Payment</a>
                        	  
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
