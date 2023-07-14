@section('links')
@endsection
@extends('welcome')
@section('contentarea')

<header class="">
    <div class="for-stick">
        @include('Frontend.Navs.Header.managerheader')
    </div> 
</header>
<section class="inner-content back-new">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 overflow-hidden">
                    <div class="set-hero-top " data-aos="fade-right">
                        <h2 class="text-center pt-5">Bulk Upload</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			<div class="col-md-4 pt-3">
    				@include('Frontend.store.Components.leftSideProfile2')
    			</div>

    			<div class="col-md-8 pt-3 ">
    				<div class="">
    					<h2 class="font-22">Bulk Upload</h2>

    					<div class="col-md-12 ">
			  				<div class="">
			  					<div class="d-flex justify-content-end mb-4 bulk-btns">
			  						<button class="btn btn-white-new" ><img src="assets/images/date.png" class="img-fluid"> Upload CSV</button>
			  						<button class="btn btn-white-new ml-3"><img src="assets/images/lines.svg" class="img-fluid"> Apply filter</button>
			  					</div>
			  					<table class="table set-table border">
								  <thead class="thead-assets">
								    <tr class="color-light-greys">
								      <th scope="col">Product Category</th>
								      <th scope="col">Product</th>
								      <th scope="col">Tags</th>
								      <th scope="col">Price</th>
								      <th scope="col">Description</th>
								      <th scope="col">Photo</th>
								      <th scope="col"></th>
								    </tr>
								  </thead>
								  <tbody class="tbody-assets">
								    <tr>
								      <td ><span class="green-color-back">Active</span></td>
								      <td>Spotify</td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>

								      <td>$15.5</td>
								      <td>In quam non vulputate purus interdum consequat ut. Photo</td>
								      
								      <td class="">
								      	<img src="assets/images/mastercard.png" class="img-fluid">
								      </td>
								      
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    
								   
								  </tbody>
								</table>
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
