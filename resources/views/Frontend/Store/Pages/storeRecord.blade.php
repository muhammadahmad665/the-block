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
                        <h2 class="text-center pt-5">Store Record</h2>  
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
    					<h2 class="font-22">Store Record</h2>

    					<div class="col-md-12 ">
			  				<div class="">

			  					<div class="d-flex justify-content-between mb-4">
			  						<div class="set-dates-sr">
			  							<a href="" class="">12 months</a>
			  							<a href="" class="">30 days</a>
			  							<a href="" class="">7 days</a>
			  							<a href="" class="">24 hours</a>
			  						</div>
			  						<div class=" bulk-btns ">
				  						<button class="btn btn-white-new" ><img src="assets/images/date.png" class="img-fluid"> Select Dates</button>
				  						<button class="btn btn-white-new ml-3"><img src="assets/images/lines.svg" class="img-fluid"> Apply filter</button>
				  					</div>
			  					</div>
			  					
			  					<div class="row">
			  						<div class="col-md-8">
			  							<div class="">
			  								<div>
											  <canvas id="myChart"></canvas>
											</div>
			  							</div>
			  						</div>
			  						<div class="col-md-4">
			  							<div class="">
			  								
			  								<div class="mb-3">
			  									<h6 class="font-11">Total Revenus</h6>
			  									<span class="d-flex justify-content-between align-items-center">
			  										<h2 class="font-22">$18,880 </h2>
			  										<span class="bg-greenss">7.4%</span>
			  									</span>

			  								</div>
			  								<div class="mb-3">
			  									<h6 class="font-11">Store Following</h6>
			  									<span class="d-flex justify-content-between align-items-center">
			  										<h2 class="font-22">4,862 </h2>
			  										<span class="bg-greenss">7.4%</span>
			  									</span>

			  								</div>
			  								<div class="mb-3">
			  									<h6 class="font-11">Discounts Redeemed</h6>
			  									<span class="d-flex justify-content-between align-items-center">
			  										<h2 class="font-22">2,671 </h2>
			  										<span class="bg-greenss">7.4%</span>
			  									</span>

			  								</div>
			  								<div class="mb-3">
			  									<h6 class="font-11">Flash Sale Redemption Rate</h6>
			  									<span class="d-flex justify-content-between align-items-center">
			  										<h2 class="font-22">82% </h2>
			  										<span class="bg-greenss">7.4%</span>
			  									</span>

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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      datasets: [{
        label: '# of Votes',
        data: [11, 10, 9, 8, 7, 6,5,4,3,2,1,0],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@endsection
