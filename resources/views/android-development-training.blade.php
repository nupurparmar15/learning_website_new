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
								<h1 class="breadcrumb-title">Blog Details</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Blog Details</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->	
			
			<!-- ============================ Agency List Start ================================== -->
			<section class="gray">
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row">
					
						<!-- Blog Detail -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="article_detail_wrapss single_article_wrap format-standard">
								<div class="article_body_wrap">
								
									<div class="article_featured_image">
										<img class="img-fluid" src="{{asset('img/banner-4.jpg')}}" alt="">
									</div>
									</div>
									
									<p class="text-justify">
                                    Android software development is the process by which applications are created for devices running the Android operating system. Google states that "Android apps can be written using Kotlin, Java, and C++ languages" using the Android software development kit, while using other languages is also possible.</p>
                                    We at OILAB make you learn the following:
                                        </p>
                                        <ul class="requirements-list">
                                            <li>Introduction to Android</li>
                                            <li>Android Architecture</li>
                                            <li>Development Environment</li>
                                            <li>Application Fundamentals</li>
                                            <li>Basic GUI Programming</li>
                                            <li>Intents and Intent Filters</li>
                                            <li>Content Provider</li>
                                            <li>Broadcast Receiver</li>
                                            <li>Network Programming</li>
                                            <li>Multimedia Programming</li>
                                            <li>Location Based Services</li>
                                            <li>Android Telephony API</li>
                                            <li>Bluetooth</li>
                                            <li>Sensors</li>
                                            <li>WiFi</li>
                                            <li>Android Animation Effects</li>
                                            <li>Using Gesture & Sliding</li>
                                            <li>Google Map</li>
                                            <li>Custom Layout</li>
                                            </ul>
                                        <p>
								</div>
							</div>
						
							
						</div>
						
					
					</div>
					<!-- /row -->					
					
				</div>
						
			</section>
			<!-- ============================ Agency List End ================================== -->
			<!-- ============================ Footer Start ================================== -->
			@include("layout.footer")
			<!-- ============================ Footer End ================================== -->
			
			@endsection