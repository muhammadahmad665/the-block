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
                        <h2 class="text-center pt-5">Wallet</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
<div class="container" data-aos="fade-up">
	<div class="row">
		<div class="col-md-4 pt-3">
			@include('Frontend.User.userComponents.sideUserEdit')
		</div>
		<div class="col-md-8 pt-3">
			<div class="">
				<div class="row ">
					
					<div class="col-md-12 ">
						
						<div class="main-inbox">
							<div class="first-wallet-sec">
								<div class="first-wallet-sec-inner">
									<img class="img-fluid" src="{{ asset('assets/images/profile3.png') }}">
		    						<p class="mb-0">Wallet</p>
								</div>
								<div class="three-bars">
									<a href="" class="">2 <span>Coupons</span></a>
									<a href="" class="set-border-rl">0 <span>Tickets</span></a>
									<a href="" class="">2 <span>E-VIP Cards</span></a>
								</div>
							</div>
							
							<div class="main-inbox-second flex-column mt-5">
								<div class="first-f-badge">
									<h2 class="font-22">Coupons</h2>
									<span class="set-blue-badge">2</span>
								</div>

								<div class="row">
			    					<div class="col-md-12 " data-aos="fade-up">
			    						<div class=" ">
											<div class="row ">
							    				<div class="col-md-6 pt-3">
			                                        @include('Frontend.Login.Components.whatshotdeals')
							    				</div>
							    				<div class="col-md-6 pt-3">
			                                        @include('Frontend.Login.Components.whatshotdeals')
							    				</div>
			                                    <div class="col-md-6 pt-3">
			                                        @include('Frontend.Login.Components.whatshotdeals')
							    				</div>
			                                    <div class="col-md-6 pt-3">
			                                        @include('Frontend.Login.Components.whatshotdeals')
							    				</div>
								    		</div>
			    						</div>
			    					</div>
				    			</div>
								
							</div>

							<div class="main-inbox-second flex-column my-5">
								<div class="first-f-badge">
									<h2 class="font-22">Tickets</h2>
									<span class="set-blue-badge">2</span>
								</div>

								<div class="row">
			    					<div class="col-md-12 " data-aos="fade-up">
			    						<div class=" ">
											<div class="row ">
							    				<div class="col-md-6 pt-3">
			                                        @include('Frontend.Login.Components.whatshotflashsale2')
							    				</div>
							    				<div class="col-md-6 pt-3">
			                                        @include('Frontend.Login.Components.whatshotflashsale2')
							    				</div>
			                                    
								    		</div>
			    						</div>
			    					</div>
				    			</div>
								
							</div>

							<div class="main-inbox-second flex-column mb-5">
								<div class="first-f-badge">
									<h2 class="font-22">E-VIP Card</h2>
									<span class="set-blue-badge">2</span>
								</div>

								<div class="row">
			    					<div class="col-md-12 " data-aos="fade-up">
			    						<div class=" ">
											<div class="row ">
							    				<div class="col-md-6 pt-3">
			                                        <a href="#">
						                                <img src="assets/images/debitcard.png" class="img-fluid">
						                            </a>
							    				</div>
							    				<div class="col-md-6 pt-3">
			                                       <a href="#">
						                                <img src="assets/images/debitcard.png" class="img-fluid">
						                            </a>
							    				</div>
			                                    
								    		</div>
			    						</div>
			    					</div>
				    			</div>
								
							</div>
						</div>

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
