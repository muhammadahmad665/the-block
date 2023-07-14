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
<section class="inner-content   ">
        <div class="container  back-new4">
            
        </div>
</section>
<section class=" py-5 bg-lights">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-head-premium">
                    <h2 class="d-flex">New Year’s Countdown Party 2022 
                        <!-- <a class="btn  btn-lights-new-rounded">
                           <img src="assets/images/date.png" class="img-fluid"> Event
                        </a> -->
                    </h2>
                    
                    <div class="btn-inner-premium">
                        <h4>$15</h4>
                        <button class="btn btn-lights-new"><i class="fa fa-phone"></i> Contact</button>
                        <button class="btn btn-blue-new" data-toggle="modal" data-target="#newyear"><i class="fa-regular fa-plus"></i> Book</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			
                <div class="col-lg-4 col-md-6">
                    <div class="main-left-newyear">
                        <div class="left-newyear-first">
                            <p class="color-light-grey">Core by Clare Smyth</p>
                            <p>Bibendum condimentum porttitor sagittis ut quis commodo porttitor. Eget gravida mauris amet nibh sit. Adipiscing magna nibh quam nunc quis phasellus.</p>
                            <ul class="ul-left-newyear">
                                <li class="">
                                    <a href="">
                                        <img src="assets/images/date.png" class="img-fluid">
                                        <p>December 31, 2022</p>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="">
                                        <img src="assets/images/clock.png" class="img-fluid">
                                        <p>9:00 PM</p>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="">
                                        <img src="assets/images/mappin.png" class="img-fluid">
                                        <p>12 Smith Street, Chinatown</p>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="">
                                        <img src="assets/images/phone.png" class="img-fluid">
                                        <p>+44 011 011 0111</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h4 class="mb-0 font-18">Booking Options</h4>
                        <div class="main-date-appointment">
                            <h4 class="">
                              Date
                            </h4>
                            <div class="btn-dates-appointment">
                              <a class="btn  btn-lights-new-rounded">Today</a>
                              <a class="btn  btn-lights-new-rounded">Tomorrow</a>
                              <a class="btn  btn-lights-new-rounded">Dec 25</a>
                              <a class="btn  btn-lights-new-rounded" type="date">Dates</a>
                            </div>
                        </div>
                        <div class="main-date-appointment">
                            <h4 class="">
                              Package Options
                            </h4>
                            <div class="btn-dates-appointment">
                              <a class="btn  btn-lights-new-rounded">Adult</a>
                              <a class="btn  btn-lights-new-rounded">Children</a>
                              <a class="btn  btn-lights-new-rounded">Couples</a>
                            </div>
                        </div>
                        <button class="btn btn-blue-new" data-toggle="modal" data-target="#set-appointment"><i class="fa-regular fa-plus"></i> Book</button>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6">
                    
                    <div class="newyear-right">
                        <div class="inner-new-year">
                            <h4>What to Expect?</h4>
                            <p>Bibendum condimentum porttitor sagittis ut quis commodo porttitor. Eget gravida mauris amet nibh sit. Adipiscing magna nibh quam nunc quis phasellus.</p>
                        </div>
                        <div class="inner-new-year">
                            <h4>Gallery</h4>
                            @include('Frontend.User.userComponents.gallery')
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
