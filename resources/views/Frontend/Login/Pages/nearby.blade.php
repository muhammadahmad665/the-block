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
                        <h2 class="text-center pt-5">Near By</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			<div class="col-md-12">
    				<h2 class="font-weight-bolder ">What's Nearby?</h2> 
    			</div>
    			
                <div class="col-lg-4 col-md-3 col-sm-6 pt-3">
    				@include('Frontend.Login.Components.nearbycard')
    			</div>
                <div class="col-lg-4 col-md-3 col-sm-6 pt-3">
    				@include('Frontend.Login.Components.nearbycard')
    			</div>
                <div class="col-lg-4 col-md-3 col-sm-6 pt-3">
    				@include('Frontend.Login.Components.nearbycard')
    			</div>
                <div class="col-lg-4 col-md-3 col-sm-6 pt-3">
    				@include('Frontend.Login.Components.nearbycard')
    			</div>
    			
    		</div>
    	</div>
</section>
<!-- footer -->
@include('Frontend.Navs.Footer.footerscribe')

@endsection
@section('script')
@endsection
