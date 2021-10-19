@extends('layout.app')

@section('content')
		
            <!-- ============================================================== -->
            <!-- Top header  -->
			@include("layout.header")
            <!-- ============================================================== -->
			
			<!-- ============================ Page Title Start================================== -->
			<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">FAQs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">FAQs</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->	
			
			<!-- =================================== FAQS =================================== -->
			<section class="pt-0">
				<div class="container">
					
					<div class="row">
						
						<div class="col-lg-10 col-md-12 col-sm-12">
														
							<div class="tab-content tabs_content_creative" id="myTabContent">
								
								<!-- general Query -->
								<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
									
									<div class="accordion" id="generalac">
										<div class="card">
											<div class="card-header" id="headingOne">
											  <h2 class="mb-0">
												<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What types of program & courses we offer?
												</button>
											  </h2>
											</div>

											<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">OILAB Learning is recognized for its forward thinking attitude in the IT industry. What gives us edge over competition is our wide range of services. With On the Floor training sessions from active team members, the student will acquire knowledge and gain expertise in handling the on-floor work challenges, a sure shot advantage in your budding career.</p>
											  </div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingTwo">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How do I pay the fees to the institute?
												</button>
											  </h2>
											</div>
											<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">You can pay the fees either by cash, cheque,  online fund transfer. </p>
											  </div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingThree">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                What is the batch size for any course?
												</button>
											  </h2>
											</div>
											<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">Typically, we have small batch sizes not exceeding 10 students. </p>
											  </div>
											</div>
										</div>

                                        <div class="card">
											<div class="card-header" id="headingFour">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Does the institute provide any assignment or practice tests?
												</button>
											  </h2>
											</div>
											<div id="collapseFour" class="collapse" aria-labelledby="headingFlour" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">Yes we provide regular assignments & practice tests. They are a part of our course offer.</p>
											  </div>
											</div>
										</div>

                                        <div class="card">
											<div class="card-header" id="headingFive">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    Whar are the requirements to attend the online classes?
												</button>
											  </h2>
											</div>
											<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">A Laptop/Desktop/Computer/Tablet/Mobile an internet connection.</p>
											  </div>
											</div>
										</div>

                                        <div class="card">
											<div class="card-header" id="headingFive">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                What is the fee refund policy?
												</button>
											  </h2>
											</div>
											<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">Fees once paid for any of the course will neither transferred nor will be refunded under any circumstances.</p>
											  </div>
											</div>
										</div>

                                        <div class="card">
											<div class="card-header" id="headingSix">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    How many Students will be there in live classes?
												</button>
											  </h2>
											</div>
											<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">In personalized/individual one to one classes, there will be only one student in the class. In group classes, the batch size will smallest in the Industry with maximum 9 Students in a batch. </p>
											  </div>
											</div>
										</div>

                                        <div class="card">
											<div class="card-header" id="headingSeven">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Can I get certificate after completion of training ? 
												</button>
											  </h2>
											</div>
											<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">Yes training certificate will be issued by OILab. </p>
											  </div>
											</div>
										</div>

                                        <div class="card">
											<div class="card-header" id="headingEight">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                Shall I get to work on live industrial project during my training period?
												</button>
											  </h2>
											</div>
											<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">Yes, All the trainees get to work on live project.</p>
											  </div>
											</div>
										</div>

                                        <div class="card">
											<div class="card-header" id="headingNine">
											  <h2 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                What is the duration of the course?
												</button>
											  </h2>
											</div>
											<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#generalac">
											  <div class="card-body">
												<p class="ac-para text-justify">There are two types of course we offer, a 3 month course and a internship program for 6 months.</p>
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
			<!-- ====================================== FAQS =================================== -->
			
			
			<!-- ============================ Footer Start ================================== -->
			@include("layout.footer")
			<!-- ============================ Footer End ================================== -->
			
			@endsection