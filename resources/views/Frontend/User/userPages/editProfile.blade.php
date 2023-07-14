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
                        <h2 class="text-center pt-5">Edit profile</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			<div class="col-md-4 pt-3">
    				@include('Frontend.User.userComponents.editProfileComp')
    			</div>
	    		<div class="col-md-8">
	  				<div class="">
	  					<div class="row ">
	  						
	  						<div class="  col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.foodCard')
			    			</div>
			    			<div class="  col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.foodCard')
			    			</div>
			    			<div class="  col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.foodCard')
			    			</div>
			    			<div class="  col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.foodCard')
			    			</div>
			    			<div class="  col-sm-6 pt-3">
			    				@include('Frontend.User.userComponents.foodCard')
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
