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
                        <h2 class="text-center pt-5">Inbox</h2>  
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
					
					<div class="col-md-12">
						
						<div class="main-inbox">
							<div class="main-inbox-first">
								<div class="main-inbox-first-search">
									<input class="form-control mr-sm-2" type="search" placeholder="Send Messages" aria-label="Search">
									<i class="fa fa-search" type="button"></i>
								</div>
								<a href="#" class="btn btn-blue-new d-flex align-items-center">
									<i class="fa-regular fa-pen-to-square"></i>
								</a>
							</div>

							<div class="main-inbox-second pt-3">

								<a href="#"   data-toggle="modal" data-target="#select-recipent">
									<div class="main-inbox-second-inner pt-3">
										<div class="left-profile-msg">
											<div class="imgs-online">
												<img src="{{ asset('assets/images/avt-img.png') }}" class="img-fluid ">
												<img src="{{ asset('assets/images/online.png') }}" class="img-fluid ">
											</div>
											<div class="flex-column">
												<h4 class="mb-0 font-16">Olivia Rhye</h4>
												<p class="mb-0 font-14">Enim amet sagittis senectus orci eu urna tellus.</p>
											</div>
										</div>
										<div class="time-badge">
											<p class="">11:11 AM</p>
											<span class="bg-pinks">10</span>
										</div>
									</div>
								</a>

								


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
