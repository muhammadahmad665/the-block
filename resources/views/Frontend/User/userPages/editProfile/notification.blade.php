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
                        <h2 class="text-center pt-5">Notification</h2>  
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
							

							<div class="main-inbox-second flex-column">
								<h2 class="font-22">Notification</h2>
								
								<div class="set-all-filter-backs2">
	                                <h5>Order Updates</h5>
	                                <label class="switch-cus">
	                                <input type="checkbox" >
	                                <span class="slider-switch-cus round"></span>
	                                </label>
	                            </div>

	                            <div class="set-all-filter-backs2">
	                                <h5 class="font-14">Order Messages</h5>
	                                <label class="switch-cus">
	                                <input type="checkbox" checked="">
	                                <span class="slider-switch-cus round"></span>
	                                </label>
	                            </div>	

	                            <div class="set-all-filter-backs2">
	                                <h5 class="font-14">Email Notification</h5>
	                                <label class="switch-cus">
	                                <input type="checkbox" checked="">
	                                <span class="slider-switch-cus round"></span>
	                                </label>
	                            </div>

	                            <div class="set-all-filter-backs2">
	                                <h5 class="font-14">Rating Reminder</h5>
	                                <label class="switch-cus">
	                                <input type="checkbox" checked="">
	                                <span class="slider-switch-cus round"></span>
	                                </label>
	                            </div>
	                            <div class="set-all-filter-backs2">
	                                <h5 class="font-14">Notification Sound</h5>
	                                <label class="switch-cus">
	                                <input type="checkbox" checked="">
	                                <span class="slider-switch-cus round"></span>
	                                </label>
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
