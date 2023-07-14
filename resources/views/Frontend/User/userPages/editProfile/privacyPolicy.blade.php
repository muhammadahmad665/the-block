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
                        <h2 class="text-center pt-5">Privacy Policy</h2>  
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
							

							<div class="main-inbox-second flex-column">
								<h2 class="font-22">Privacy Policy</h2>
								
								<p class=" font-11">Last Updated: August 1, 2022</p>

								<h4 class="font-18">Introduction</h4>
								<p class="font-14 text-justify">
									Feugiat magna felis mattis mauris mollis placerat pellentesque placerat. Tellus nam morbi nisi tincidunt tristique auctor auctor ut. Egestas senectus vulputate scelerisque eget consectetur quam non. Curabitur diam neque integer malesuada interdum non elit cras. Sit tristique adipiscing diam elit erat risus phasellus nam. Consectetur purus gravida facilisis scelerisque mattis. Nisi cursus pharetra ac sed senectus. Nisi tincidunt molestie pellentesque at erat leo ut elementum. Amet quis duis ultricies sit fermentum duis elit facilisi enim. Etiam aliquam arcu donec consequat. Lectus elit condimentum proin maecenas orci donec.<br><br>

									Aliquam dignissim egestas velit nunc. Dui enim cursus felis praesent in vitae et. Aenean nec ultrices ut sed enim nisi bibendum nam dictum. Et ullamcorper urna lectus mi mattis nisl elementum. A commodo feugiat at in cursus. Convallis mi tempus a nulla elit phasellus ultricies. Mauris arcu purus amet morbi arcu venenatis porta placerat.<br><br>

									Orci nulla adipiscing aenean viverra egestas sit risus in enim. Egestas dignissim vel sodales fames mattis facilisis egestas. Velit eget et nec non sit augue. Cras lobortis nibh varius volutpat mauris. Cras sapien faucibus volutpat nulla. Nibh varius nisl risus duis dis. Ac interdum turpis amet morbi. Ornare pellentesque vitae vel quam quis volutpat.
								</p>							

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
