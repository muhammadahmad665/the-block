@section('links')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
@endsection
@extends('welcome')
@section('contentarea')


    <!-- Header -->
	<header class="">
		<div class="for-stick">
			@include('Frontend.Navs.Header.header')
		</div>
    </header>
	<section class="inner-content back-new">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 overflow-hidden">
                        <div class="set-hero-top " data-aos="fade-right">
                            <h2 class="text-center">Login</h2>  
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="py-5 bg-lights">
    	<div class="container pt-4">
    		<div class="row overflow-hidden">
    			<div class=" col-md-6 d-flex align-items-center justify-content-center" data-aos="fade-right">
    				<div class="inner-left-lock">
    					<img src="{{ asset('assets/images/lock.png') }}" class="img-fluid">
    					<h4>Enter your phone number</h4>
    					<p>We will send you the 4 digit Verification code</p>
    				</div>
    			</div>
    			<div class=" col-md-6" data-aos="fade-left">
    				<div class="p-5 set-border-login-right">
    					<form>
						  <div class="form-group ">
						    <label class="set-lbl-login">Mobile Number</label>
						    <div class="set-inp">
						    	<input id="phone"  type="tel" name="phone" />
						    	<a href="#" class="color-blue set-r">register</a>
						    </div>
						  </div>
						  
						  <a href="funleisure" type="submit" class="btn btn-blue-new w-100 mt-5 mb-3">Login</a>
						</form>
						<p class="set-p-login mb-0 py-3">or Sign In with</p>
						<div class="butns-set">
							<a href="#" class="set-l-btns">
								<img src="{{ asset('assets/images/glogin.png') }}" class="img-fluid " >
							</a>
							<a href="#" class="set-l-btns">
								<img src="{{ asset('assets/images/flogin.png') }}" class="img-fluid " >
							</a>
							<a href="#" class="set-l-btns">
								<img src="{{ asset('assets/images/alogin.png') }}" class="img-fluid " >
							</a>
						</div>
						<p class="font-set-p-login">Don’t have an account?</p>
    				</div>
    				
    			</div>
    		</div>
    	</div>
    </section>
	<!-- footer -->
    @include('Frontend.Navs.Footer.footerscribe')
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
@endsection
