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
                        <h2 class="text-center pt-5">Following</h2>  
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
							

							<div class="main-inbox-second ">
								<h2 class="font-22">700 Following</h2>
								<div class="main-inbox-second-inner pt-3">
									<div class="left-profile-msg">
										<div class="imgs-online">
											<img src="{{ asset('assets/images/avt-img.png') }}" class="img-fluid ">
											<img src="{{ asset('assets/images/online.png') }}" class="img-fluid ">
										</div>
										<div class="flex-column">
											<h4 class="mb-0 font-16">Olivia Rhye</h4>
											
										</div>
									</div>
									<div class="time-badge">
										<button class="btn btn-lights-new">Following</button>
									</div>
								</div>
								<div class="main-inbox-second-inner pt-3">
									<div class="left-profile-msg">
										<div class="imgs-online">
											<img src="{{ asset('assets/images/avt-img.png') }}" class="img-fluid ">
											<img src="{{ asset('assets/images/online.png') }}" class="img-fluid ">
										</div>
										<div class="flex-column">
											<h4 class="mb-0 font-16">Olivia Rhye</h4>
											
										</div>
									</div>
									<div class="time-badge">
										<button class="btn btn-lights-new">Following</button>
									</div>
								</div>
								<div class="main-inbox-second-inner pt-3">
									<div class="left-profile-msg">
										<div class="imgs-online">
											<img src="{{ asset('assets/images/avt-img.png') }}" class="img-fluid ">
											<img src="{{ asset('assets/images/online.png') }}" class="img-fluid ">
										</div>
										<div class="flex-column">
											<h4 class="mb-0 font-16">Olivia Rhye</h4>
											
										</div>
									</div>
									<div class="time-badge">
										<button class="btn btn-lights-new">Following</button>
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
