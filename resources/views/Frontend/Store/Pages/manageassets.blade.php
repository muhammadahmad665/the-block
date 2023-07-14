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
                        <h2 class="text-center pt-5">Manage Assets</h2>  
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="py-5 bg-lights overflow-hidden">
    	<div class="container" data-aos="fade-up">
    		<div class="row">
    			
    			<div class="col-md-12 ">
    				<ul class="nav nav-tabs nav-tabs-new col-md-4 " id="myTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Catalog</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Categories</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Items</a>
					  </li>
					</ul>
					<div class="tab-content mt-5" id="myTabContent">
					  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  	<div class="col-md-12 ">
			  				<div class="">
			  					<div class="d-flex justify-content-end mb-4">
			  						<button class="btn btn-blue-new" data-toggle="modal" data-target="#addAcatagory">+ Add</button>
			  						<button class="btn btn-white-new ml-3"><i class="fa fa-trash"></i> Delete</button>
			  					</div>
			  					<table class="table set-table border">
								  <thead class="thead-assets">
								    <tr class="color-light-greys">
								      <th scope="col">Catalogs</th>
								      <th scope="col">Type</th>
								      <th scope="col">Description</th>
								      <th scope="col">Status</th>
								      <th scope="col">Category</th>
								      <th scope="col">Tags</th>
								      <th scope="col"></th>
								    </tr>
								  </thead>
								  <tbody class="tbody-assets">
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="green-color-back">Active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="red-color-back">In-active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="green-color-back">Active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="red-color-back">In-active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="green-color-back">Active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="red-color-back">In-active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="green-color-back">Active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="red-color-back">In-active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="green-color-back">Active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="red-color-back">In-active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="green-color-back">Active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="red-color-back">In-active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    
								  </tbody>
								</table>
			  				</div>
			    		</div>
					  </div>
					  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  	<div class="col-md-12 ">
			  				<div class="">
			  					<div class="d-flex justify-content-end mb-4">
			  						<button class="btn btn-blue-new" data-toggle="modal" data-target="#addAcatagory">+ Add</button>
			  						<button class="btn btn-white-new ml-3"><i class="fa fa-trash"></i> Delete</button>
			  					</div>
			  					<table class="table set-table border">
								  <thead class="thead-assets">
								    <tr class="color-light-greys">
								      <th scope="col">Catalogs</th>
								      <th scope="col">Type</th>
								      <th scope="col">Description</th>
								      <th scope="col">Status</th>
								      <th scope="col">Category</th>
								      <th scope="col">Tags</th>
								      <th scope="col"></th>
								    </tr>
								  </thead>
								  <tbody class="tbody-assets">
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="green-color-back">Active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>Catalog</td>
								      <td>Product</td>
								      <td>Catalog Description</td>
								      <td ><span class="red-color-back">In-active</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								   
								  </tbody>
								</table>
			  				</div>
			    		</div>
					  </div>
					  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					  	<div class="col-md-12 ">
			  				<div class="">
			  					<div class="d-flex justify-content-end mb-4">
			  						<button class="btn btn-blue-new" data-toggle="modal" data-target="#addAitem">+ Add</button>
			  						<button class="btn btn-white-new ml-3"><i class="fa fa-trash"></i> Delete</button>
			  					</div>
			  					<table class="table set-table border">
								  <thead class="thead-assets">
								    <tr class="color-light-greys">
								      <th scope="col">Item Name</th>
								      <th scope="col">Description</th>
								      <th scope="col">Status</th>
								      <th scope="col">Catalog</th>
								      <th scope="col">Category</th>
								      <th scope="col">Original Price</th>
								      <th scope="col">Final Price</th>
								      <th scope="col">Tags</th>
								      <th scope="col">Weight</th>
								      <th scope="col"></th>
								    </tr>
								  </thead>
								  <tbody class="tbody-assets">
								    <tr>
								      <td>
								      	<div class=" d-flex align-items-center">
								      		
								    			<img src="/assets/images/avt-img.png " class="img-fluid ">
								    			<p class="mb-0 font-11">Olivia Rhye</p>
								    		
								    	</div>
								      </td>
								      <td>Item Description</td>
								      <td ><span class="green-color-back">Active</span></td>
								      <td><span class="grey-color-back">Main</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td>$12</td>
								      <td>$12</td>

								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td>100 grams</td>
								      <td class="set-btns-table">
								      	<a href="#"><i class="fa fa-trash"></i></a>
								      	<a href="#"><i class="fa-light fa-pen"></i></a>
								      </td>
								    </tr>
								    <tr>
								      <td>
								      	<div class=" d-flex align-items-center">
								      		
								    			<img src="/assets/images/avt-img.png " class="img-fluid ">
								    			<p class="mb-0 font-11">Olivia Rhye</p>
								    		
								    	</div>
								      </td>
								      <td>Item Description</td>
								      <td ><span class="red-color-back">In-active</span></td>
								      <td><span class="grey-color-back">Main</span></td>
								      <td><span class="grey-color-back">Vegan</span></td>
								      <td>$12</td>
								      <td>$12</td>

								      <td class=""> 
								      	<span class="grey-color-back">Vegan</span>
								      	<span class="grey-color-back">Hypoallergenic</span>
								      </td>
								      <td>100 grams</td>
								      <td class="">
								      	<div class="set-btns-table">
								      		<a href="#"><i class="fa fa-trash"></i></a>
								      		<a href="#"><i class="fa-light fa-pen"></i></a>
								      	</div>
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
    	</div>
</section>
<!-- footer -->
@include('Frontend.Navs.Footer.footerscribe')

@endsection
@section('script')
@endsection
