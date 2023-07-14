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
                        <h2 class="text-center pt-5">Edit profile User</h2>  
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
	    		<div class="col-md-6">
	  				<div class="">
	  					<div class="row ">
	  						
	  						<div class="col-md-8 pt-3 m-auto">
	  							<div class="editProfile-main">
	  								<h4>Edit Your Profile</h4>
	  								<form>
	  									<div class="form-group form-group-bussiness">
				                        	<label for="yp-edit">Your Photo</label>
				                        	
				                        	<input type="image" src="{{ asset('assets/images/avt-img.png') }}" class="img-fluid w-25" />
											<input type="file" id="img-show-click"  />
											
					                     </div>
				                      <div class="form-group form-group-bussiness">
				                        <label for="email-edit">Email</label>
				                        <input type="email" class="form-control" id="email-edit"  placeholder="johndoe@email.com">
				                      </div>
				                      <div class="form-group form-group-bussiness">
				                        <label for="ep-Name">First Name</label>
				                        <input type="text" class="form-control" id="ep-Name"  placeholder="First Name">
				                      </div>
				                      <div class="form-group form-group-bussiness">
				                        <label for="epl-Name">Last Name</label>
				                        <input type="text" class="form-control" id="epl-Name"  placeholder="Last Name">
				                      </div>
				                      
				                      
				                      <div class="form-group form-group-bussiness">
				                        <label for="phone2">Phone Number</label>
										<input id="phone2" class="form-control" type="tel" name="phone2" />	
				                      </div>
				                      <div class="form-group form-group-bussiness form-group-bussiness-pass">
				                        <label for="password-ed">Password</label>
										
										<input class="form-control" type="password"  autocomplete="current-password" required="" id="id_password">
  										<i class="far fa-eye" id="togglePassword" ></i>	
				                      </div>
				                      <div class="form-group form-group-bussiness form-group-bussiness-pass">
				                        <label for="con-password">Confirm Password</label>
										<input class="form-control" type="password"  autocomplete="current-passwords" required="" id="id_password2">
  										<i class="far fa-eye" id="togglePassword2" ></i>		
				                      </div>

				                      <button class="btn btn-blue-new">Update Profile</button>
				                      
				                                  
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
