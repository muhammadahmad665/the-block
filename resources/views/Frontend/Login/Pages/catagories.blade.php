@section('links')
@endsection
@extends('welcome')
@section('contentarea')
<header class="">
    <div class="for-stick">
        @include('Frontend.Navs.Header.header')
        @include('Frontend.Login.Components.catagoriesdropdown')
    </div> 
</header>
<section class="inner-content back-new">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 overflow-hidden">
                    <div class="set-hero-top " data-aos="fade-right">
                        <h2 class="text-center pt-5">All Catagerios</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Business Reviews and Ratings -->
<section class="py-5 bg-lights overflow-hidden">
    <div class="container" data-aos="fade-down">
        <div class="row">
            <div class="col-md-12 py-3">
                <div class="heading-Br">
                    <h2 class="mb-0">Business Reviews and Ratings</h2>
                </div>
            </div>
            <div class="col-md-12">
                @include('Frontend.Login.Components.homeSliders')
            </div>
        </div>
    </div>
</section>

<!-- Trending Businesses Near You -->
<section class="py-5 bg-lights overflow-hidden" >
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-12 py-3">
                <div class="heading-Br">
                    <h2 class="mb-0">Trending Businesses Near You</h2>
                </div>
            </div>
            <div class="col-md-12">
                @include('Frontend.Login.Components.homeSliders')
            </div>
        </div>
    </div>
</section>
<!-- Trending Businesses Near You Close-->

<!-- More To Explore -->
<section class="py-5 overflow-hidden">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <h2 class="h2-same">More To Explore</h2>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-12">
                    <div class="py-3 ">
                        <ul class="nav nav-tabs nav-tabs-cus" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Deals</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Flash Sale</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Events</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row py-3">
                                <div class="col-md-4 pt-3">
                                    @include('Frontend.Login.Components.whatshotdeals')
                                </div>
                                <div class="col-md-4 pt-3">
                                    @include('Frontend.Login.Components.whatshotdeals')
                                </div>
                                <div class="col-md-4 pt-3">
                                    @include('Frontend.Login.Components.whatshotdeals')
                                </div>
                                <div class="col-md-4 pt-3">
                                    @include('Frontend.Login.Components.whatshotdeals')
                                </div>
                                
                            </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row py-3">
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale')
                                    </div>
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale')
                                    </div>
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale')
                                    </div>
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale')
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row py-3">
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale2')
                                    </div>
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale2')
                                    </div>
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale2')
                                    </div>
                                    <div class="col-md-4 pt-3">
                                        @include('Frontend.Login.Components.whatshotflashsale2')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        
    </div>
</section>
<!-- More To Explore close-->
<!-- footer -->
@include('Frontend.Navs.Footer.footerscribe')

@endsection
@section('script')
@endsection
