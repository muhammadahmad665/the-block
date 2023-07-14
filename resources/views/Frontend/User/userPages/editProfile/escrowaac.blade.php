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
                        <h2 class="text-center pt-5">Escrow Add A Contract</h2>  
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
								<div class="">
		    						<h4 class="mb-0 font-18">Add A Contract</h4>
								</div>
							</div>
							
							<form class="mt-3">

							  <div class="form-group form-group-bussiness">
		                        <label for="busName">You Are</label>
		                        <div class="set-gaps">
		                        	<button class="btn btn-lights-new">Buying</button>
		                        	<button class="btn btn-lights-new">Selling</button>
		                        </div>
		                      </div>

		                      <div class="form-group form-group-bussiness">
		                        <label for="busName">Type</label>
		                        <div class="set-gaps">
		                        	<button class="btn btn-lights-new">Goods</button>
		                        	<button class="btn btn-lights-new">Services</button>
		                        </div>
		                      </div>

		                      <div class="form-group form-group-bussiness">
		                        <label for="busName">Buyer Name</label>
		                        <input type="text" class="form-control" id="busName"  placeholder="Enter Name">
		                      </div>
		                      <div class="form-group form-group-bussiness">
		                        <label for="reviewTitle">Product/Service Title</label>
		                        <input type="text" class="form-control" id="reviewTitle"  placeholder="Service Title">
		                      </div>
		                      <div class="form-group form-group-bussiness">
		                        <label for="ques-review">Proposed Price</label>
		                        <select class="form-control">
		                          <option>$ 1000 USDT</option>
		                          <option>Select all that would apply</option>
		                          <option>Select all that would apply</option>
		                        </select>
		                      </div>
		                      <div class="form-group form-group-bussiness">
		                        <label for="businessDescription">Proposed Terms</label>
		                        <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
		                      </div>
		                      
		                      <div class="form-group form-group-bussiness">
		                        <label for="uploadPhoto">Upload Photos</label>
		                        <input type="file" class="form-control-file" id="uploadPhoto">
		                      </div>
		                      	<button class="btn btn-blue-new w-100">Propose Contract</button>
		                    </form>
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
