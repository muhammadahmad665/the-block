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
        <div class="container back-new3">
            
        </div>
</section>
<section class=" py-5 bg-lights">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-head-premium">
                    <h2 class="">Core by Clare Smyth </h2>
                    <div class="btn-inner-premium">
                        <button class="btn btn-blue-new" data-toggle="modal" data-target="#set-appointment"><i class="fa-regular fa-plus"></i> Book</button>
                        <button class="btn btn-lights-new"><i class="fa-regular fa-heart"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			
                <div class="col-lg-4 col-md-6">
                    <div class="main-right-reviews">
                        <div class="main-right-reviews-first">
                            <a class="btn  btn-lights-new-rounded">
                               <img src="assets/images/prem.png" class="img-fluid"> Premium
                            </a>
                            <ul class="ul-set-home mb-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><span>5.0</span></li>

                            </ul>
                            <p class="mb-0">Average Spending</p>
                            <div class="btns-nearby">
                                <a href="">Restaurant</a>
                                <a href="">Bakery</a>
                            </div>
                            <ul class="ul-set-locations mb-0">
                                <li class="">
                                    <img src="assets/images/mappin.png" class="img-fluid"> 12 Smith Street, Chinatown
                                </li>
                                <li class="">
                                    <img class="img-fluid" src="assets/images/clock.png">
                                    <a href="#" class="color-green">Open Now</a>
                                </li>
                                <li class="">
                                    <img src="assets/images/maploc.png" class="img-fluid">
                                        5 min
                                     <a href="#" class="color-blues">View Map</a>
                                </li>
                            </ul>
                            <div id="map-container-google-2" class="z-depth-1-half map-container">
                                <iframe src="https://maps.google.com/maps?q=chicago&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
                            <p>Bibendum condimentum porttitor sagittis ut quis commodo porttitor. Eget gravida mauris amet nibh sit. Adipiscing magna nibh quam nunc quis phasellus.</p>
                            <div class="bts-all-reviews">
                                <a href="#" class="btn btn-blue-new">
                                    <img src="assets/images/tel.png" class="img-fluid">
                                     Contact
                                </a>
                                <a href="#" class="btn btn-lights-new">
                                    <img src="assets/images/tel2.png" class="img-fluid">
                                    Direction
                                </a>
                                <a href="#" class="btn btn-white-new">
                                    <img src="assets/images/tel3.png" class="img-fluid">
                                    Menu
                                </a>
                            </div>
                        </div>
                        <div class="main-right-reviews-second">
                            <h4>Events and Deals</h4>
                            @include('Frontend.Login.Components.whatshotflashsale2')
                            @include('Frontend.Login.Components.whatshotflashsale')
                            @include('Frontend.Login.Components.whatshotdeals')
                            
                        </div>
                        <div class="main-right-reviews-second">
                            <h4>E-VIP Card</h4>
                            <a href="#">
                                <img src="assets/images/debitcard.png" class="img-fluid">
                            </a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="main-reviews-set">
                        <h4 >Reviews</h4>
                        <div class="reviews-set-first">
                            @include('Frontend.User.userComponents.ratingsbar')
                            <button class="btn btn-blue-new" data-toggle="modal" data-target="#reviewtitles"><i class="fa-regular fa-plus"></i> Add A Review</button>
                        </div>
                        <div class="btns-rights-review">
                            <a class="btn  btn-lights-new-rounded">
                                Product Reviews
                            </a>
                            <a class="btn  btn-lights-new-rounded">
                                Business Reviews
                            </a>
                        </div>
                        <!-- Post -->
                        @include('Frontend.User.userComponents.post')
                        <!-- Post -->
                        @include('Frontend.User.userComponents.post')
                        <!-- Post -->
                        @include('Frontend.User.userComponents.post')
                        <!-- Post -->
                        @include('Frontend.User.userComponents.post')
                        
                </div>
    			
    		</div>
    	</div>
</section>
<!-- footer -->
@include('Frontend.Navs.Footer.footerscribe')

@endsection
@section('script')
@endsection
