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
                        <h2 class="text-center pt-5">Menu</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			<div class="col-md-3">
    				<div class="">
    					<div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <span class="input-group-text" ><i class="fa fa-search"></i></span>
						  </div>
						  <input type="text" class="form-control" placeholder="Search Menu" >
						</div>
    				</div>

    				<div class="set-btns-left-menu">
    					<a href="#starters">Starters</a>	
    					<a href="#mains">Mains</a>
    					<a href="#snacks">Snacks</a>
    					<a href="#">Starters</a>
    					<a href="#">Starters</a>
    				</div>
    			</div>
	    		<div class="col-md-9">
	  				<div class="">
	  					<div class="row ">
	  						<div class="col-md-12">
	  							<h2 class="font-weight-bolder " id="starters">Starters</h2>
	  						</div>
	  						<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
			    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
			    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
			    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
	  					</div>

	  					<div class="row py-5">
	  						<div class="col-md-12">
	  							<h2 class="font-weight-bolder " id="mains">Mains</h2>
	  						</div>
	  						<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
			    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
			    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
			    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
	  					</div>

	  					<div class="row ">
	  						<div class="col-md-12">
	  							<h2 class="font-weight-bolder " id="snacks">Snacks</h2>
	  						</div>
	  						<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
			                <div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
			    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
			    			</div>
			    			<div class="col-lg-4 col-md-3 col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.menuCard')
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
