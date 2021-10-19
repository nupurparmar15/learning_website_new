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
								<h1 class="breadcrumb-title">Get in Touch</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Contact</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->	
			
			<!-- ============================ Agency List Start ================================== -->
			<section class="bg-light">
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row">
					
						<div class="col-lg-8 col-md-7">
							<div class="prc_wrap">
								
								<form action="{{url('contact')}}" method="post">
									@csrf
									<div class="prc_wrap_header">
										<h4 class="property_block_title">Fillup The Form</h4>
									</div>
									
									<div class="prc_wrap-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label>Name</label>
													<input type="text" name="name" class="form-control simple" required>
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label>Email</label>
													<input type="email"  name="email" class="form-control simple" required>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label>Contact Number</label>
													<input type="number" name="contact" class="form-control simple">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label>Subject</label>
													<input type="text" name="subject" class="form-control simple">
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label>Message</label>
											<textarea class="form-control simple" name="message"></textarea>
										</div>
										
										<div class="form-group">
											<button class="btn btn-theme" name="s1" type="submit">Submit </button>
										</div>
									</div>
								</form>
							</div>
											
						</div>
						
						<div class="col-lg-4 col-md-5">
						
							<div class="prc_wrap">
								
								<div class="prc_wrap_header">
									<h4 class="property_block_title">Reach Us</h4>
								</div>
								
								<div class="prc_wrap-body">
									<div class="contact-info">
								
										<h2>Get In Touch</h2>
										
										<div class="cn-info-detail">
											<div class="cn-info-icon">
												<i class="ti-home"></i>
											</div>
											<div class="cn-info-content">
												<h4 class="cn-info-title">Reach Us</h4>
												703 7th floor, Sanskriti Tower,<br>Devendra Singhvi Marg, Baldev Nagar,<br>Jodhpur, Rajasthan 342003
											</div>
										</div>
										
										<div class="cn-info-detail">
											<div class="cn-info-icon" >
												<i class="ti-email" style="margin-left:-240%;"></i>
											</div>
											<div class="cn-info-content">
												<h4 class="cn-info-title"  style="margin-left:-105%;" >Drop A Mail</h4>
												<p style="margin-left:-101%;">learning@oilab.in</p>
											</div>
										</div>
										
										<div class="cn-info-detail">
											<div class="cn-info-icon">
												<i class="ti-mobile" style="margin-left:-220%;"></i>
											</div>
											<div class="cn-info-content">
												<h4 class="cn-info-title" style="margin-left:-85%;">Call Us</h4>
												<p style="margin-left:-90%;">(+91) 93526-42634</p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
					<!-- /row -->		
					
				</div>
						
			</section>
			<!-- ============================ Footer Start ================================== -->
			@include("layout.footer")
			<!-- ============================ Footer End ================================== -->
			
			@endsection