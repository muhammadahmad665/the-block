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
                        <h2 class="text-center pt-5">Manage Customers</h2>  
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
    				<ul class="nav nav-tabs nav-tabs-new  " id="myTab" role="tablist">
					  
					  <li class="nav-item">
					    <a class="nav-link" id="manage-flash-sales" data-toggle="tab" href="#manage-flash" role="tab" aria-controls="manage-flash" aria-selected="false">Customer List</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="manage-booking" data-toggle="tab" href="#manage" role="tab" aria-controls="manage" aria-selected="false">Manage Booking</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="loyalty-card" data-toggle="tab" href="#loyalty" role="tab" aria-controls="loyalty" aria-selected="false">Loyalty Card</a>
					  </li>
					</ul>
					<div class="tab-content mt-5" id="myTabContent">
					  

					  <div class="tab-pane fade show active" id="manage-flash" role="tabpanel" aria-labelledby="manage-flash-sales">
					  	<div class="row">
					  		<div class="col-md-12">
					  			<div class="inner-all-tabs">
					  				<h4 class="font-18">Followers</h4>
					  				<div class="row ">
				  						<div class="  col-md-8 m-auto pt-3">
				  							<main class="d-flex justify-content-between align-items-start border-b pb-2">
				  								<div class="">
					  								<div class="left-profile-msg">
								                      <div class="imgs-online">
								                        <img src="assets/images/avt-img.png" class="img-fluid ">
								                        <img src="assets/images/online.png" class="img-fluid ">
								                      </div>
								                      <div class="flex-column">
								                        <h4 class="mb-0 font-16">Olivia Rhye</h4>
								                        <p class="mb-0 bg-greenss">Last seen May 20th, 2023</p>
								                      </div>
								                    </div>
					  							</div>
					  							<span>11:11 AM</span>
				  							</main>
				  							<main class="d-flex justify-content-between align-items-start border-b pb-2">
				  								<div class="">
					  								<div class="left-profile-msg">
								                      <div class="imgs-online">
								                        <img src="assets/images/avt-img.png" class="img-fluid ">
								                        <img src="assets/images/online.png" class="img-fluid ">
								                      </div>
								                      <div class="flex-column">
								                        <h4 class="mb-0 font-16">Olivia Rhye</h4>
								                        <p class="mb-0 bg-greenss">Last seen May 20th, 2023</p>
								                      </div>
								                    </div>
					  							</div>
					  							<span>11:11 AM</span>
				  							</main>
				  							<main class="d-flex justify-content-between align-items-start border-b pb-2">
				  								<div class="">
					  								<div class="left-profile-msg">
								                      <div class="imgs-online">
								                        <img src="assets/images/avt-img.png" class="img-fluid ">
								                        <img src="assets/images/online.png" class="img-fluid ">
								                      </div>
								                      <div class="flex-column">
								                        <h4 class="mb-0 font-16">Olivia Rhye</h4>
								                        <p class="mb-0 bg-greenss">Last seen May 20th, 2023</p>
								                      </div>
								                    </div>
					  							</div>
					  							<span>11:11 AM</span>
				  							</main>
				  							<main class="d-flex justify-content-between align-items-start border-b pb-2">
				  								<div class="">
					  								<div class="left-profile-msg">
								                      <div class="imgs-online">
								                        <img src="assets/images/avt-img.png" class="img-fluid ">
								                        <img src="assets/images/online.png" class="img-fluid ">
								                      </div>
								                      <div class="flex-column">
								                        <h4 class="mb-0 font-16">Olivia Rhye</h4>
								                        <p class="mb-0 bg-greenss">Last seen May 20th, 2023</p>
								                      </div>
								                    </div>
					  							</div>
					  							<span>11:11 AM</span>
				  							</main>
						    			</div>
						    			
				  					</div>
					  			</div>
					  		</div>
					  	</div>
					  </div>
					  <div class="tab-pane fade" id="manage" role="tabpanel" aria-labelledby="manage-booking">
					  		<div class="row">
						  		<div class="col-md-12">
						  			<div class="inner-all-tabs">
						  				<div class="">
						  					<div class="dropdown ">
											  <button class="btn btn-white-new  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											  Confirmed
											  </button>
											  <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
											      <a class="dropdown-item " >
											      	<p class="mb-0">not confirmed</p>
											        
											      </a>
											      
											      

											               
											</div>
											</div>
						  				</div>
						  				<div class="row ">
					  						<div class="  col-sm-6 pt-3">
							    				<div class="main-edit-profile  border-pad-gray">
													
													<div class=" border-0 d-flex align-items-center justify-content-center pt-3">
														<img src="assets/images/avt-img.png" class="img-fluid">
														<div class="profile-head-main-inner ml-3">
															<h4 class="mb-0 font-14">Olivia Rhye</h4>
															
															<ul class="ul-explore ">
												                <li>
												                <img class="img-fluid" src="assets/images/cal.png">
												                    
												                    <p class="mb-0">January 02, 2022, Tuesday</p>
												                </li>
												                <li>
												                <img class="img-fluid" src="assets/images/clock.png">
												                    
												                    <p class="mb-0">4:00PM</p>
												                </li>
												                <li>
												                <img class="img-fluid" src="assets/images/cal2.png">
												                    
												                    <p class="mb-0">2</p>
												                </li>
												            </ul>
														</div>
													</div>
													
													<div class="btn-inner-premium justify-content-center">
												        <button class="btn btn-blue-new"><i class="fa-regular fa-plus"></i> Message</button>
												        <button class="btn btn-lights-new"><i class="fa fa-phone"></i> Call</button>
												    </div>
												</div>	
							    			</div>
							    			
							    			
					  					</div>
						  			</div>
						  		</div>
						  	</div>
					  </div>


					  <div class="tab-pane fade" id="loyalty" role="tabpanel" aria-labelledby="loyalty-card">
					  	<div class="row">
					  		<div class="col-md-12">
					  			<div class="inner-all-tabs">
					  				<div class="d-flex justify-content-end">
					  					<button class="btn btn-white-new">Add Deals</button>
					  				</div>
					  				<div class="row ">
				  						<div class="  col-sm-6 pt-3">
						    				<a href="#">
					                            <img src="assets/images/debitcard.png" class="img-fluid">
					                        </a>
						    			</div>
						    			<div class="  col-sm-6 pt-3">
						    				<a href="#">
					                            <img src="assets/images/debitcard.png" class="img-fluid">
					                        </a>
						    			</div>
						    			<div class="  col-sm-6 pt-3">
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
</section>
<!-- footer -->
@include('Frontend.Navs.Footer.footerscribe')

@endsection
@section('script')
@endsection
