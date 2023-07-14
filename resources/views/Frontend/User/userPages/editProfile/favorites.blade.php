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
                        <h2 class="text-center pt-5">My Favorites</h2>  
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
							<section class=" overflow-hidden">
							<div class="container" data-aos="fade-up">
								<div class="row">
									<div class="col-md-12">
										<div class="">
											<h2 class="h2-same">My Favorites</h2>
										</div>
									</div>
								</div>
								<div class="row">
										<div class="col-md-12">
											<div class="py-3 ">
												<ul class="nav nav-tabs nav-tabs-cus" id="myTab" role="tablist">
												  <li class="nav-item" role="presentation">
												    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Businesses</button>
												  </li>
												  <li class="nav-item" role="presentation">
												    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Products</button>
												  </li>
												  <li class="nav-item" role="presentation">
												    <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Deals</button>
												  </li>
												</ul>
												<div class="tab-content" id="myTabContent">
												  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
												  	<div class="row py-3">
													  	<div class="col-md-6 pt-3">
															@include('Frontend.Login.Components.nearbycard')
														</div>
														<div class="col-md-6 pt-3">
															@include('Frontend.Login.Components.nearbycard')
														</div>
														
									    				
									    			</div>
												  </div>
												  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
														<div class="row py-3">
															<div class="col-md-6 pt-3">
																@include('Frontend.Login.Components.nearbycard')
															</div>
															<div class="col-md-6 pt-3">
																@include('Frontend.Login.Components.nearbycard')
															</div>
															<div class="col-md-6 pt-3">
																@include('Frontend.Login.Components.nearbycard')
															</div>
															<div class="col-md-6 pt-3">
																@include('Frontend.Login.Components.nearbycard')
															</div>
														</div>
												  </div>
												  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
												  <div class="row py-3">
															<div class="col-md-6 pt-3">
																@include('Frontend.Login.Components.nearbycard')
															</div>
															<div class="col-md-6 pt-3">
																@include('Frontend.Login.Components.nearbycard')
															</div>
															<div class="col-md-6 pt-3">
																@include('Frontend.Login.Components.nearbycard')
															</div>
														</div>
												  </div>
												</div>
											</div>
										</div>
								</div>
								
							</div>
							</section>
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
