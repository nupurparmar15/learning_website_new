@extends('layout.app')

@section('content')
		
            <!-- ============================================================== -->
            <!-- Top header  -->
			@include("layout.header")
            <!-- ============================================================== -->
           
			
			<!-- ============================ Page Title Start================================== -->
			<section class="page-title" >
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap" >
								<h1 class="breadcrumb-title">Refund Policy</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Refund Policy</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->	
			
			<!-- ========================== About Facts List Section =============================== -->
			<section class="pt-0">
				<div class="container">
					
					<div class="row align-items-center">
					
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="list_facts_wrap">
								<div class="sec-heading mb-3">
									<h2>Refund Policy for OILab Learning</h2>
								</div>
								<p class="text-justify">Thanks for subscribing our learning courses at OILab Learning operated by Jtittle Innovations Pvt Ltd.</p>	
                                <br>
                                <p class="text-justify">We offer a full money-back guarantee for all subscription made on our website. If you are not satisfied with the service that you have subscribed from us, you can get your money back no questions asked. You are eligible for a full reimbursement within 07 calendar days of your subscription.</p>	
                                <br>
                                <p class="text-justify">After the 07-day period you will no longer be eligible and won't be able to receive a refund. We encourage our users to try the courses module in the first one week after their subscription to ensure it fits your needs.</p>
                                <br>
                                <p class="text-justify">If you have any additional questions or would like to request a refund, feel free to contact us.</p>
                                <br>
                                <p class="text-justify"><b>Learning@oilab.in</b><br/>
                                <b>https://learning.oilab.in</b><br/>
                                <b>+919352642634 </b> <br><b> +91 96642-98875</b></p>					
							</div>
						</div>
						
					
					</div>
					
				</div>
			</section>
			<!-- ========================== About Facts List Section =============================== -->
			
			
			
			<!-- ============================ Footer Start ================================== -->
			@include("layout.footer")
			<!-- ============================ Footer End ================================== -->
			
			@endsection