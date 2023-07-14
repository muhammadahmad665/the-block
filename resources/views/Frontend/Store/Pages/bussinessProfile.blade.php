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
                        <h2 class="text-center pt-5">Bussinsess Profile</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			<div class="col-md-4 pt-3">
    				@include('Frontend.store.Components.leftSideProfile')
    			</div>


	    		<div class="col-md-4 m-auto">
	  				<div class="">
	  					<h2 class="mb-4 font-22">Bussinsess Profile</h2>
	  					
	  					<form>
	                      <div class="form-group form-group-bussiness">
	                        <label for="bus-cate">Store Category</label>
	                        <select class="form-control">
	                          <option>Select Product Category</option>
	                          <option>Select Business Category</option>
	                          <option>Select Business Category</option>
	                        </select>
	                      </div>
	                      <div class="form-group form-group-bussiness">
	                        <label for="busName">Store Name</label>
	                        <input type="text" class="form-control" id="busName"  placeholder="Enter Business Name">
	                      </div>
	                      <div class="form-group form-group-bussiness">
	                        <label for="tags">Business Address</label>
	                        <input type="text" class="form-control" id="tags" data-role="tagsinput"  placeholder="">
	                      </div>
	                      
	                      <div class="form-group form-group-bussiness">
                        	<label for="reviewTitle">Phone Number</label>
						    <input id="phone2" class="form-control" type="tel" name="phone2" />	
                      	</div>

                      	<div class="form-group form-group-bussiness form-group-bussiness-sel">
                        	<label for="reviewTitle">Business Hours</label>

                        	<div class="flex-column">
                        		<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									  <label class="form-check-label font-11" for="flexCheckChecked">
									    Monday
									  </label>
								 </div>


								 <div class="d-flex justify-content-between">
								 	<div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Open</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                     </div>

				                     <div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Close</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                      </div>
								 </div>
                        	</div>
                        	<div class="flex-column">
                        		<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									  <label class="form-check-label font-11" for="flexCheckChecked">
									    Tuesday
									  </label>
								 </div>


								 <div class="d-flex justify-content-between">
								 	<div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Open</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                     </div>

				                     <div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Close</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                      </div>
								 </div>
                        	</div>
                        	<div class="flex-column">
                        		<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									  <label class="form-check-label font-11" for="flexCheckChecked">
									    Wednesday
									  </label>
								 </div>


								 <div class="d-flex justify-content-between">
								 	<div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Open</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                     </div>

				                     <div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Close</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                      </div>
								 </div>
                        	</div>
                        	<div class="flex-column">
                        		<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									  <label class="form-check-label font-11" for="flexCheckChecked">
									    Thursday
									  </label>
								 </div>


								 <div class="d-flex justify-content-between">
								 	<div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Open</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                     </div>

				                     <div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Close</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                      </div>
								 </div>
                        	</div>
                        	<div class="flex-column">
                        		<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									  <label class="form-check-label font-11" for="flexCheckChecked">
									    Friday
									  </label>
								 </div>


								 <div class="d-flex justify-content-between">
								 	<div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Open</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                     </div>

				                     <div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Close</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                      </div>
								 </div>
                        	</div>
                        	<div class="flex-column">
                        		<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									  <label class="form-check-label font-11" for="flexCheckChecked">
									    Saterday
									  </label>
								 </div>


								 <div class="d-flex justify-content-between">
								 	<div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Open</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                     </div>

				                     <div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Close</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                      </div>
								 </div>
                        	</div>
                        	<div class="flex-column">
                        		<div class="form-check">
									  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
									  <label class="form-check-label font-11" for="flexCheckChecked">
									    Sunday
									  </label>
								 </div>


								 <div class="d-flex justify-content-between">
								 	<div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Open</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                     </div>

				                     <div class="form-group form-group-bussiness">
				                        <label for="bus-cate" class="text-center">Close</label>
				                        <select class="form-control">
				                          <option>00:00</option>
				                        </select>
				                      </div>
								 </div>
                        	</div>
                      	</div>
	                      
	                      
	                                  
                      	<div class="form-group form-group-bussiness">
	                        <label for="location">Location</label>
	            			
	                          <div id="map-container-google-2" class="z-depth-1-half map-container" >
	                          <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
	                              style="border:0" allowfullscreen width="100%"></iframe>
	                          </div>
	                      </div>

	                      
	                      <div class="form-group form-group-bussiness">
	                        <label for="uploadPhoto">Storefront Photos</label>
	                        <input type="file" class="form-control-file" id="uploadPhoto">
	                      </div>

	                      <div class="form-group form-group-bussiness">
	                        <label for="businessDescription">Business Description</label>
	                        <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
	                      </div>
	                      <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
							  <label class="form-check-label font-11" for="flexCheckChecked">
							    I affirm that the information submitted is genuine and understand that these details are subject to approval.
							  </label>
						  </div>
						  <button class="btn btn-blue-new w-100 mt-3">Submit</button>
	                    </form>

	  					
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
