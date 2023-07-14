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
                        <h2 class="text-center pt-5">Escrow</h2>  
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
					
					<div class="col-md-8 ">
						
						<div class="main-inbox">
							<div class="first-wallet-sec">
								<div class="first-wallet-sec-inner">
		    						<h4 class="mb-0">Escrow</h4>
								</div>
								<a class="btn btn-blue-new" href="escrowaac">Add A Contract</a>
							</div>
							
							<div class="set-escrow pt-3">
								<a class="" data-toggle="modal" data-target="#sellings">
							    	<div class="flex-between border-pad-gray">
							    		<div class="inner-main-profilecata">
							    			<h4 class="mb-0 font-16">Seller Agreements</h4>
							    			<span class="bg-blues">2</span>	
							    		</div>
							    		<img class="img-fluid" src="{{ asset('assets/images/profile4.png') }}">
							    	</div>
							    </a>
							    <a class="" href="#">
							    	<div class="flex-between border-pad-gray">
							    		<div class="inner-main-profilecata">
							    			<h4 class="mb-0 font-16">Buyer Agreements</h4>
							    			<span class="bg-blues">2</span>	
							    		</div>
							    		<img class="img-fluid" src="{{ asset('assets/images/profile4.png') }}">
							    	</div>
							    </a>
							    <h4 class="mb-0 font-16">
							    	Recent Agreements
							    </h4>

							    <a class="" href="#">
							    	<div class="flex-column">
							    		<div class=" border-pad-gray">
								    		<div class="inner-main-profilecata inner-main-profilecata-cus">
								    			<img class="img-fluid" src="{{ asset('assets/images/redselling.png') }}">
								    			<h4 class="mb-0 font-16 red-color">Selling</h4>
								    				
								    		</div>

								    		<div class="inner-main-escrow mt-3">
								    			<h4 class="mb-0 font-16">Mac Studio</h4>
								    			<p class="mb-0 font-11">Dec 25, 2022</p>
								    		</div>




								    		<div class="inner-main-escrow2 mt-3">
								    			<h4 class="mb-0 font-16">$1200</h4>
								    			<span class="mb-0 font-11 btn-redish">Awaiting Deposit</span>
								    		</div>

								    		<button class="mt-3 btn btn-lights-trans">Olivia Rhye</button>

								    	</div>
							    	</div>
							    </a>

							    <a class="" href="#" >
							    	<div class="flex-column">
							    		<div class=" border-pad-gray">
								    		<div class="inner-main-profilecata inner-main-profilecata-cus">
								    			<img class="img-fluid" src="{{ asset('assets/images/greenselling.png') }}">
								    			<h4 class="mb-0 font-16 green-color">Buying</h4>
								    				
								    		</div>
								    		<div class="inner-main-escrow mt-3">
								    			<h4 class="mb-0 font-16">Mac Studio</h4>
								    			<p class="mb-0 font-11">Dec 25, 2022</p>
								    		</div>
								    		<div class="inner-main-escrow2 mt-3">
								    			<h4 class="mb-0 font-16">$1200</h4>
								    			<span class="mb-0 font-11 bg-blues">In-Transit</span>
								    		</div>

								    		<button class="mt-3 btn btn-lights-trans">Olivia Rhye</button>

								    	</div>
							    	</div>
							    </a>

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
