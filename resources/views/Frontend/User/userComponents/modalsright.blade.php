
<!-- Modal -->
<div class="modal fade" id="quickreview" tabindex="-1" role="dialog" aria-labelledby="quickreviewLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus" role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="quickreviewLabel">Add A Quick Review</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                    <form>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Business Name</label>
                        <input type="text" class="form-control" id="busName"  placeholder="Enter Name">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="reviewTitle">Review Title</label>
                        <input type="text" class="form-control" id="reviewTitle"  placeholder="Review Title">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="businessDescription">Business Description</label>
                        <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <ul class="ul-set-home ul-set-home2">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                            
                        </ul>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="uploadPhoto">Upload Photos</label>
                        <input type="file" class="form-control-file" id="uploadPhoto">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="ques-review">Select the products you want to mention on this review?</label>
                        <select class="form-control">
                          <option>Select all that would apply</option>
                          <option>Select all that would apply</option>
                          <option>Select all that would apply</option>
                        </select>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">Submit Review</button>
            </div>
        </div>
      </div>
</div>

<!-- Modal addabussiness -->
<div class="modal fade" id="addabussiness" tabindex="-1" role="dialog" aria-labelledby="addabussinessLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus" role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="addabussinessLabel">Add A Business</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                    <form>
                      <div class="form-group form-group-bussiness">
                        <label for="bus-cate">Business Category</label>
                        <select class="form-control">
                          <option>Select Business Category</option>
                          <option>Select Business Category</option>
                          <option>Select Business Category</option>
                        </select>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Business Name</label>
                        <input type="text" class="form-control" id="busName"  placeholder="Enter Name">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="reviewTitle">Business Address</label>
                        <input type="text" class="form-control" id="reviewTitle"  placeholder="Enter Business Address">
                      </div>
                      
                      <div class="form-group form-group-bussiness">
                        <label for="reviewTitle">Phone Number</label>
						            <input id="phone2" class="form-control" type="tel" name="phone2" />	
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="tags">Tags</label>
						            <input type="text" class="form-control" id="tags" data-role="tagsinput"  placeholder="">
                      </div>
                      
                      <div class="form-group form-group-bussiness">
                        <label for="location">Location</label>
            						<!--Google map-->
                          <div id="map-container-google-2" class="z-depth-1-half map-container" >
                          <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                              style="border:0" allowfullscreen></iframe>
                          </div>

                          <!--Google Maps-->
  						    	
                      </div>
                                  

                                  <div class="form-group form-group-bussiness">
                                    <label for="businessDescription">Business Description</label>
                                    <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
                                  </div>
                    </form>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">Submit Review</button>
            </div>
        </div>
      </div>
</div>


<!-- Modal Review Title Goes Here -->
<div class="modal fade" id="reviewtitles" tabindex="-1" role="dialog" aria-labelledby="reviewtitlesLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus" role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="reviewtitlesLabel">Review Title Goes Here</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="set-review-modal-main">
                        <div class="img-rating-stars">
                            <ul class="ul-set-home mb-0 py-2">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <p class="mb-0">Bibendum condimentum porttitor sagittis ut quis commodo porttitor.
                               Eget gravida mauris amet nibh sit. 
                               Adipiscing magna nibh quam nunc quis phasellus. 
                               Felis nulla quis integer augue amet. 
                               Pretium interdum eget arcu non sed turpis nisl.
                            </p>
                            <div class="gallery">
                                <div class="imgs-gallery">
                                    <a href="{{ asset('assets/images/tb1.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Image 1">
                                        <img class="img-fluid" src="{{ asset('assets/images/tb1.png') }}">
                                    </a>
                                    <a href="{{ asset('assets/images/tb2.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Image 2">
                                        <img class="img-fluid" src="{{ asset('assets/images/tb2.png') }}">
                                    </a>
                                    <a href="{{ asset('assets/images/tb3.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Image 3">
                                        <img class="img-fluid" src="{{ asset('assets/images/tb3.png') }}">
                                    </a>
                                    <a href="{{ asset('assets/images/tb4.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Image 4">
                                        <img class="img-fluid" src="{{ asset('assets/images/tb4.png') }}">
                                    </a>
                                    <a href="{{ asset('assets/images/tb2.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Image 5">
                                        <img class="img-fluid" src="{{ asset('assets/images/tb2.png') }}">
                                    </a>
                                    <a href="{{ asset('assets/images/tb1.png') }}" data-gall="portfolioGallery" class="venobox preview-link" title="Image 6">
                                        <img class="img-fluid" src="{{ asset('assets/images/tb1.png') }}">
                                    </a>


                                    
                                </div>
                            </div>
                            <div class="set-img-followup">
                                <div class="followup-inner">
                                    <div class="img-set-avatar">
                                        <img class="img-fluid" src="{{ asset('assets/images/avatar.png') }}">
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0">Olivia R.</h5>
                                        <button class="btn btn-lights"><i class="fa-regular fa-star"></i>Level 2</button>
                                    </div>
                                </div>
                                <a class="btn btn-blue-new">Follow</a>
                            </div>

                            <div class="set-img-followup set-img-followup2">
                                <div class="img-set-poster">
                                    <img class="img-fluid" src="{{ asset('assets/images/tb1.png') }}">
                                </div>
                                <div class="name-rating">
                                    <h6 class="mb-0">Perkings Bistro</h6>
                                    <ul class="ul-set-home mb-0 py-2">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <h5 class="">Comments</h5>
                            <div class="followup-inner2 ">
                                    <div class="img-set-avatar">
                                        <img class="img-fluid" src="{{ asset('assets/images/avatar.png') }}">
                                    </div>
                                    <div class="set-cmt-sec">
                                    <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
                                    <button class="btn btn-blue-new">comment</button>
                                    </div>
                                </div>
                        </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">Submit Review</button>
            </div>
        </div>
      </div>
</div>

<!-- Modal set Appointment -->
<div class="modal fade" id="set-appointment" tabindex="-1" role="dialog" aria-labelledby="set-appointmentLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus" role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="reviewtitlesLabel">Set Appointment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                      
                    <div class="main-appointment">
                        <!-- date -->
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

                       <!-- Time -->
                      <div class="main-date-appointment">
                        <h4 class="">
                          Time
                        </h4>
                        <div class="btn-dates-appointment">
                          <a class="btn  btn-lights-new-rounded">9:00AM</a>
                          <a class="btn  btn-lights-new-rounded">10:00AM</a>
                          <a class="btn  btn-lights-new-rounded">11:00AM</a>
                          <a class="btn  btn-lights-new-rounded">1:00AM</a>
                          <a class="btn  btn-lights-new-rounded" type="time">Time</a>
                        </div>
                      </div>

                      @include('Frontend.User.userComponents.contactDetails')

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">Set Appoinment</button>
            </div>
        </div>
      </div>
</div>

<!-- Modal set Menus -->
<div class="modal fade" id="menusright" tabindex="-1" role="dialog" aria-labelledby="menusrightLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus " role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="reviewtitlesLabel">Menus</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body modal-body-cus-full">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12 px-0">
                      <div class="">
                          @include('Frontend.User.userComponents.pictureReviews')
                          <h4 class="font-22">Reviews</h4>
                          @include('Frontend.User.userComponents.ratingsbar')
                          <div class="btns-rights-review">
                            <a class="btn  btn-lights-new-rounded">
                                Product Reviews
                            </a>
                            <a class="btn  btn-lights-new-rounded">
                                Business Reviews
                            </a>
                          </div>
                          @include('Frontend.User.userComponents.post')
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
</div>

<!-- Modal set whatshot-redeem -->
<div class="modal fade" id="whatshot-redeem" tabindex="-1" role="dialog" aria-labelledby="whatshot-redeemLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus " role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="reviewtitlesLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12 px-0">
                      <div class="reedem-main">

                          @include('Frontend.User.userComponents.fullSingleSlider')

                          <div class="redeem-inner">
                            <p class="color-light-grey">Core by Clare Smyth</p>
                            <h4>Get 50% Off Margarita from 8:00 to 9:00PM</h4>
                            <p>Bibendum condimentum porttitor sagittis ut quis commodo porttitor. Eget gravida mauris amet nibh sit. Adipiscing magna nibh quam nunc quis phasellus.</p>
                          </div>

                          <div class="redeem-inner">
                            <h4>Deal Period and Redemption</h4>
                            <ul class="ul-set-redeem">
                              <li>
                                <a href="" class="">
                                  <img class="img-fluid" src="assets/images/date.png">
                                  <span>December 31, 2022 - March 31, 2022</span>
                                </a>
                              </li>
                              <li>
                                <a href="" class="">
                                  <img class="img-fluid" src="assets/images/clock.png">
                                  <span>8:00 - 9:00 PM</span>
                                </a>
                              </li>
                              <li>
                                <a href="" class="">
                                  <img class="img-fluid" src="assets/images/mappin.png">
                                  <span>12 Smith Street, Chinatown</span>
                                </a>
                              </li>
                            </ul>
                          </div>

                          <div class="redeem-inner">
                            <h4>Terms and Conditions</h4>
                            <p>Bibendum condimentum porttitor sagittis ut quis commodo porttitor. Eget gravida mauris amet nibh sit. Adipiscing magna nibh quam nunc quis phasellus.</p>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">% Redeem Deal</button>
            </div>
        </div>
      </div>
</div>
<!-- Modal set newyear -->
<div class="modal fade" id="newyear" tabindex="-1" role="dialog" aria-labelledby="newyear" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus " role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="reviewtitlesLabel"><a href="#">Booking Options</a></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12 px-0">
                      <div class="reedem-main">

                          <div class="left-newyear-first">
                              <h4 class="mb-0 font-18">Event Details</h4>
                              <ul class="ul-left-newyear">
                                
                                  <li class="">
                                      <a href="">
                                          <p>New Year’s Countdown Party 2022</p>
                                      </a>
                                  </li>
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
                                  
                              </ul>
                          </div>
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

                          <div class="left-newyear-first left-newyear-first2">
                              <h6 class="mb-0 font-14">Children</h6>
                              <div class="plus-minus">
                                  <div id="increment-count" class="increment-count">
                                    <input type="image" id="up-arrow" src="assets/images/plus.png" />
                                  </div>
                                  <div id="total-count" class="total-count">
                                  </div>
                                  <div id="decrement-count" clas>
                                    <input type="image" id="down-arrow" src="assets/images/minus.png" />
                                  </div>
                              </div>
                          </div>
                          <div class="left-newyear-first left-newyear-first2">
                              <h6 class="mb-0 font-14">Adult</h6>
                              <div class="plus-minus">
                                  <div id="increment-count">
                                    <input type="image" id="up-arrow" src="assets/images/plus.png" />
                                  </div>
                                  <div id="total-count">
                                  </div>
                                  <div id="decrement-count">
                                    <input type="image" id="down-arrow" src="assets/images/minus.png" />
                                  </div>
                              </div>
                          </div>
                          <div class="left-newyear-first left-newyear-first2">
                              <h6 class="mb-0 font-14">Couple</h6>
                              <div class="plus-minus">
                                  <div id="increment-count">
                                    <input type="image" id="up-arrow" src="assets/images/plus.png" />
                                  </div>
                                  <div id="total-count">
                                  </div>
                                  <div id="decrement-count">
                                    <input type="image" id="down-arrow" src="assets/images/minus.png" />
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-start">
              <h4 class="font-18 mb-3">$18</h4>
              <button type="button" class="btn btn-blue w-100">Proceed</button>
            </div>
        </div>
      </div>
</div>
<!-- Modal set Select Recipient -->
<div class="modal fade" id="select-recipent" tabindex="-1" role="dialog" aria-labelledby="select-recipent" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus " role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="reviewtitlesLabel"><a href="#">Select Recipient</a></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12 px-0">
                      <div>
                        <a class="" href="#">
                          <div class="flex-between border-pad-gray">
                            <div class="inner-main-profilecata">
                              <img class="img-fluid" src="{{ asset('assets/images/eye.png') }}">
                              <p class="mb-0">Recently Viewed</p>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/images/profile4.png') }}">
                          </div>
                        </a>
                        <a class="" href="#">
                          <div class="flex-between border-pad-gray">
                            <div class="inner-main-profilecata">
                              <img class="img-fluid" src="{{ asset('assets/images/add-one.png') }}">
                              <p class="mb-0">Following</p>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/images/profile4.png') }}">
                          </div>
                        </a>
                        <h4 class="font-14 py-3">Suggested</h4>
                        <a    data-toggle="modal" data-target="#select-recipent-chat">
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
                            
                          </div>
                        </a>
                        
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-start">
              
              <button type="button" data-toggle="modal" data-target="#select-recipent-chat" class="btn btn-blue w-100">Start A Conversation</button>
            </div>
        </div>
      </div>
</div>

<!-- Modal set Select Recipient-Chat -->
<div class="modal fade" id="select-recipent-chat" tabindex="-1" role="dialog" aria-labelledby="select-recipent-chat" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus " role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="reviewtitlesLabel">
                <a href="#">
                  <div class="main-inbox-second-inner pt-3">
                    <div class="left-profile-msg">
                      <div class="imgs-online">
                        <img src="{{ asset('assets/images/avt-img.png') }}" class="img-fluid ">
                        <img src="{{ asset('assets/images/online.png') }}" class="img-fluid ">
                      </div>
                      <div class="flex-column">
                        <h4 class="mb-0 font-16">Olivia Rhye</h4>
                        <p class="mb-0 font-14">online</p>
                      </div>
                    </div>
                    
                  </div>  
                </a>
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body modal-body-cus-msg ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12 px-0">
                      <div class="main-text-screen">
                        <div class="left">
                          <p class="mb-0 ">
                            Arcu ultrices a sollicitudin neque auctor.
                          </p>
                        </div>
                        <div class="right">
                          <p class="mb-0 ">
                            Arcu ultrices a sollicitudin neque auctor.
                          </p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-start">
                <div class="set-send-msg">
                  <input type="text" class="form-control border-0" placeholder="Message">
                  <img src="{{ asset('assets/images/camera.png') }}" type="button" class="img-fluid ">
                  <img src="{{ asset('assets/images/message.png') }}" type="button" class="img-fluid ">
                </div>
            </div>
        </div>
      </div>
</div>

<!-- Modal set Selling -->
<div class="modal fade" id="sellings" tabindex="-1" role="dialog" aria-labelledby="sellings" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus " role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <div class="modal-title set-gaps" >
                <img class="img-fluid" src="{{ asset('assets/images/redselling.png') }}">
                <h4 class="mb-0 font-16 red-color">Selling</h4>
              </div>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body  ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12 px-0">
                      <div class="">
                        <div class=" mt-3 border-pad-gray">
                          <h4 class="mb-0 font-16">Mac Studio</h4>
                          <p class="mb-0 font-11">USD 2500</p>
                        </div>

                        <div class="flex-between border-pad-gray mt-3">
                          <div class="inner-main-profilecata">
                            <h4 class="mb-0 font-16">Agreement Details </h4>
                             
                          </div>
                          <img class="img-fluid" src="{{ asset('assets/images/profile4.png') }}">
                        </div>

                        <div class="main-gray-out mt-3">
                          <div class="set-gaps">
                            <img class="img-fluid" src="{{ asset('assets/images/greytick.png') }}">
                            <div class="">
                              <h4 class="mb-0 font-14">Release Payment</h4>
                              <p class="mb-0 font-11">Inactive</p>
                            </div> 
                          </div>
                          
                        </div>

                        <div class="main-yellow-out mt-3">
                          <div class="firsts">
                            <h4 class="mb-0 font-14">Goods Received</h4>
                            <a href="#"class="mb-0 font-11">Pending</a>

                          </div>

                          <div class="py-3">
                            <h4 class="mb-0 font-16">$1200</h4>
                            <button class=" btn btn-lights-trans my-2 font-11">Olivia Rhye</button>
                            <button type="button" class="btn btn-blue w-100">Confirm</button>
                          </div>

                          <div class="set-send-msg border-top-g">
                            <input type="text" class="form-control border-0" placeholder="Message">
                            <img src="{{ asset('assets/images/camera.png') }}" type="button" class="img-fluid ">
                            <img src="{{ asset('assets/images/message.png') }}" type="button" class="img-fluid ">
                          </div>


                        </div>



                        <div class="main-green-out mt-3">
                          <div class="set-gaps">
                            <img class="img-fluid" src="{{ asset('assets/images/greentick.png') }}">
                            <div class="">
                              <h4 class="mb-0 font-14">Buyer Payment</h4>
                              <p class="mb-0 font-11">December 25, 2022</p>
                            </div> 
                          </div>
                          <div class="">
                            <span class="font-11"><img class="img-fluid" src="{{ asset('assets/images/file.png') }}"> 3</span>
                            <span class="font-11"><img class="img-fluid" src="{{ asset('assets/images/mess.png') }}"> 3</span>
                          </div>
                        </div>

                        <div class="main-green-out mt-3">
                          <div class="set-gaps">
                            <img class="img-fluid" src="{{ asset('assets/images/greentick.png') }}">
                            <div class="">
                              <h4 class="mb-0 font-14">Contract Signed</h4>
                              <p class="mb-0 font-11">1 month ago</p>
                            </div> 
                          </div>
                          <div class="">
                            <span class="font-11"><img class="img-fluid" src="{{ asset('assets/images/file.png') }}"> 3</span>
                            <span class="font-11"><img class="img-fluid" src="{{ asset('assets/images/mess.png') }}"> 3</span>
                          </div>
                        </div>


                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-start">
                <button class="btn btn-lights-new w-100">Miniminize Milestones</button>
            </div>
        </div>
      </div>
</div>


<!-- Modal Add A Catalog Item -->
<div class="modal fade" id="addacatalog" tabindex="-1" role="dialog" aria-labelledby="addacatalogLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus" role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <h5 class="modal-title" id="addabussinessLabel">Add A Catalog Item</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                    <form>
                      <div class="form-group form-group-bussiness">
                        <label for="bus-cate">Product Category</label>
                        <select class="form-control">
                          <option>Select Product Category</option>
                          <option>Select Business Category</option>
                          <option>Select Business Category</option>
                        </select>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Product Name</label>
                        <input type="text" class="form-control" id="busName"  placeholder="Enter Business Name">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="tags">Product Type</label>
                        <input type="text" class="form-control" id="tags" data-role="tagsinput"  placeholder="">
                      </div>
                      
                      <div class="form-group form-group-bussiness">
                        <label for="reviewTitle">Price</label>
                        <input  class="form-control" type="number" placeholder="$1000 USD" name="phone2" /> 
                      </div>

                      
                      
                                  

                      <div class="form-group form-group-bussiness">
                        <label for="businessDescription">Product Description</label>
                        <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="uploadPhoto">Upload Photos</label>
                        <input type="file" class="form-control-file" id="uploadPhoto">
                      </div>
                    </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">Submit Listing</button>
            </div>
        </div>
      </div>
</div>

<!-- Modal Add A Catagory -->
<div class="modal fade" id="addAcatagory" tabindex="-1" role="dialog" aria-labelledby="addAcatagoryLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus" role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <div class="flex-column">
                <h5 class="modal-title" id="addabussinessLabel">Add A Catagory</h5>
                <p class="font-11 mb-0">Categories hold your products and/or services</p>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                    <form>
                      
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Item Category Name</label>
                        <input type="text" class="form-control" id="busName"  placeholder="Item Category Name">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="tags">Tags</label>
                        <input type="text" class="form-control" id="tags" data-role="tagsinput"  placeholder="">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="businessDescription"> Description</label>
                        <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="bus-cate">Associate an Item</label>
                        <select class="form-control">
                          <option>Select a type</option>
                          <option>Select Business Category</option>
                          <option>Select Business Category</option>
                        </select>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">Submit Listing</button>
            </div>
        </div>
      </div>
</div>



<!-- Modal Add A Item -->
<div class="modal fade" id="addAitem" tabindex="-1" role="dialog" aria-labelledby="addAitemLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus" role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <div class="flex-column">
                <h5 class="modal-title" id="addabussinessLabel">Add A Item</h5>
                <p class="font-11 mb-0">Start building your business profile.</p>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                    <form>
                      
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Item Name</label>
                        <input type="text" class="form-control" id="busName"  placeholder="Item Category Name">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="bus-cate">Associated Catalog</label>
                        <select class="form-control">
                          <option>Select Category</option>
                          <option>Select Business Category</option>
                        </select>

                      </div>

                      <div class="form-group form-group-bussiness">
                        <label for="bus-cate">Associated Catagory</label>
                        <select class="form-control">
                          <option>Select Category</option>
                          <option>Select Business Category</option>
                        </select>
                        
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="businessDescription"> Description</label>
                        <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
                      </div>

                      <div class="form-group form-group-bussiness">
                        <label for="reviewTitle">Phone Number</label>
                        <input id="phone2" class="form-control" type="tel" name="phone2" /> 
                      </div>

                      <div class="form-group form-group-bussiness">
                        <label for="tags">Tags</label>
                        <input type="text" class="form-control" id="tags" data-role="tagsinput"  placeholder="">
                      </div>
                      
                      <div class="form-group form-group-bussiness">
                        <label for="bus-cate">Original Price</label>
                        <select class="form-control">
                          <option>$ 1000 USD</option>
                          <option>Select Business Category</option>
                          <option>Select Business Category</option>
                        </select>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="bus-cate">Discounted Price</label>
                        <select class="form-control">
                          <option>$ 1000 USD</option>
                          <option>Select Business Category</option>
                          <option>Select Business Category</option>
                        </select>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="bus-cate">Item Weight</label>
                        <select class="form-control">
                          <option>1000 grams</option>
                          <option>Select Business Category</option>
                          <option>Select Business Category</option>
                        </select>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="uploadPhoto">Upload Photos</label>
                        <input type="file" class="form-control-file" id="uploadPhoto">
                      </div>
                      <div class="left-newyear-first left-newyear-first2">
                              <h6 class="mb-0 font-14">Quantity in Stock</h6>
                              <div class="plus-minus">
                                  <div id="increment-count" class="increment-count">
                                    <input type="image" id="up-arrow" src="assets/images/plus.png">
                                  </div>
                                  <div id="total-count" class="total-count">0</div>
                                  <div id="decrement-count" clas="">
                                    <input type="image" id="down-arrow" src="assets/images/minus.png">
                                  </div>
                              </div>
                      </div>
                    </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">Submit Listing</button>
            </div>
        </div>
      </div>
</div>



<!-- Modal Add An Event -->
<div class="modal fade" id="addAevent" tabindex="-1" role="dialog" aria-labelledby="addAeventLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus" role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <div class="flex-column">
                <h5 class="modal-title" id="addabussinessLabel">Add A Event</h5>
                <p class="font-11 mb-0">Start entering data for your catalog items</p>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                    <form>
                      
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Event Name</label>
                        <input type="text" class="form-control" id="busName"  placeholder="Item Category Name">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Event Date</label>
                        <input type="date" class="form-control" id="" >
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Event Type</label>
                        <div class="d-flex-gap">
                          <button class="btn btn-lights-new">Party</button>
                          <button class="btn btn-lights-new">Workshop</button>
                          <button class="btn btn-lights-new">Charity</button>
                        </div>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Catalog Name</label>
                        <input type="text" class="form-control"   placeholder="Category Name">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Start Time</label>
                        <input type="time" class="form-control" id="" >
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">End Time</label>
                        <input type="time" class="form-control" id="" >
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="bus-cate">Entry Price</label>
                        <select class="form-control">
                          <option>$1000 USD</option>
                        </select>

                      </div>

                      <div class="set-all-filter-backs2 mb-3">
                            <h5 class="font-12">Allow RSVP</h5>
                            <label class="switch-cus">
                            <input type="checkbox" checked="">
                            <span class="slider-switch-cus round"></span>
                            </label>
                      </div>



                      
                      <div class="form-group form-group-bussiness">
                        <label for="businessDescription"> Description</label>
                        <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
                      </div>

                      
                      
                      
                      <div class="left-newyear-first left-newyear-first2">
                              <h6 class="mb-0 font-14">No. of Tickets Available </h6>
                              <div class="plus-minus">
                                  <div id="increment-count" class="increment-count">
                                    <input type="image" id="up-arrow" src="assets/images/plus.png">
                                  </div>
                                  <div id="total-count" class="total-count">0</div>
                                  <div id="decrement-count" clas="">
                                    <input type="image" id="down-arrow" src="assets/images/minus.png">
                                  </div>
                              </div>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="uploadPhoto">Upload Photos</label>
                        <input type="file" class="form-control-file" id="uploadPhoto">
                      </div>
                    </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">Submit Listing</button>
            </div>
        </div>
      </div>
</div>

<!-- Modal Add A Deal/Discount -->
<div class="modal fade" id="addAdd" tabindex="-1" role="dialog" aria-labelledby="addAddLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-cus" role="document">
        <div class="modal-content modal-content-cus">
            <div class="modal-header">
              <div class="flex-column">
                <h5 class="modal-title" id="addabussinessLabel">Add A Deal/Discount</h5>
                <p class="font-11 mb-0">Start entering data for your catalog items</p>
              </div>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                    <form>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Deal Type</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                            Discount
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                            Buy One Get One (BOGO)
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                          <label class="form-check-label" for="flexRadioDefault2">
                            Freebie
                          </label>
                        </div>
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Deal Title</label>
                        <input type="text" class="form-control" id="busName"  placeholder="Enter Deal Title">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="businessDescription"> Deal Description</label>
                        <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
                      </div>
                      <div class="left-newyear-first left-newyear-first2">
                              <h6 class="mb-0 font-14">Deals Available  </h6>
                              <div class="plus-minus">
                                  <div id="increment-count" class="increment-count">
                                    <input type="image" id="up-arrow" src="assets/images/plus.png">
                                  </div>
                                  <div id="total-count" class="total-count">0</div>
                                  <div id="decrement-count" clas="">
                                    <input type="image" id="down-arrow" src="assets/images/minus.png">
                                  </div>
                              </div>
                      </div>

                      <div class="form-group form-group-bussiness">
                        <label for="busName">Deal Start Date</label>
                        <input type="date" class="form-control" id="" >
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Deal End Date</label>
                        <input type="date" class="form-control" id="" >
                      </div>

                      <div class="form-group form-group-bussiness">
                        <label for="busName">Redemption Start Time</label>
                        <input type="time" class="form-control" id="" >
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="busName">Redemption End Time</label>
                        <input type="time" class="form-control" id="" >
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="businessDescription"> Terms and Conditions</label>
                        <textarea class="form-control border" id="businessDescription" rows="3"></textarea>
                      </div>

                      <div class="form-group form-group-bussiness">
                        <label for="uploadPhoto">Primary Image</label>
                        <input type="file" class="form-control-file" id="uploadPhoto">
                      </div>
                      <div class="form-group form-group-bussiness">
                        <label for="uploadPhoto">Gallery Images</label>
                        <input type="file" class="form-control-file" id="uploadPhoto">
                      </div>
                    </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-blue w-100">Submit Listing</button>
            </div>
        </div>
      </div>
</div>