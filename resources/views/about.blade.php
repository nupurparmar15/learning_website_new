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
								<h1 class="breadcrumb-title">Who We are?</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">About Us</li>
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
					
						<div class="col-lg-8 col-md-8 col-sm-12">
							<div class="list_facts_wrap">
								<div class="sec-heading mb-3">
									<h2>Know about <span class="theme-cl">OIlab </span> learning platform</h2>
								</div>
								<p class="text-justify"><strong>OILab Learning</strong> is one of the oldest job-oriented <strong>Best IT & Software training institutes in Jodhpur</strong> located at <strong>FLno-703 7th Floor Sanskriti Tower, nearby Vishal Mega Mart</strong> founded by <a href="https://openinnovationslab.com/">JTITTLE INNOVATIONS PVT. LTD.</a> We have acquired a distinct reputation for providing high-quality professionals to the industry. On OILab Learning you can get online classes, Specializations, global certificates, and degrees from numerous world-class universities and companies.</p><br>
									<p class="text-justify">
										The Institute offers IT & Software training for graduate and undergraduate students in the areas of Professional Courses like Python, Data Science, Artificial Intelligence, AWS, Salesforce, Cloud Computing, Hadoop, Oracle, Linux, JAVA, Android, DevOps, Machine Learning, IoT, Tally, AngularJS, Web Designing & Development, etc. We are expertise in providing online IT & Software Training as well as Offline Training to our students in Jodhpur. Complete IT & Software Training provided by OILab Learning is designed as per the Industrial Requirement with Live Projects. Every topic covered under our IT & Software Training is most virtually with real-time examples. At OILab Learning, we offer our students with classroom training, corporate training, and online training for IT & Software Programs. We have run both the batches for weekdays and weekends that help our students to choose convenient batches as per their requirements. Ideally located, with the great ambiance and highly motivated staff makes OILab Learning a result-oriented IT & Software Training Institute in Jodhpur</p>
										<div class="sec-heading mb-3">
											<h2>OUR KEY FEATURES</h2>
										</div>
								<div class="list_facts">
									<div class="list_facts_icons"><i class="ti-desktop"></i></div>
									<div class="list_facts_caption">
										<h4>All trainings are provided within rich quality, professionally designed IT suites.</h4>
										<p>Highly qualified and experienced trainers( min 5 years Industry exp).</p>
									</div>
								</div>
								<div class="list_facts">
									<div class="list_facts_icons"><i class="ti-heart"></i></div>
									<div class="list_facts_caption">
										<h4>Both Industrial Training and Professional Trainings are conducted.</h4>
										<p>Extensive practice sessions to have better idea and grip over the course subject .</p>
									</div>
								</div>
								<div class="list_facts">
									<div class="list_facts_icons"><i class="ti-harddrives"></i></div>
									<div class="list_facts_caption">
										<h4><strong>Lab Facility</strong> with <strong>High Speed Internet</strong> and <strong>WiFi Facility.</strong></h4>
										<p><strong>Fully AC Classrooms</strong> with <strong>Smart TV</strong>.</p>
									</div>
								</div>
								<div class="list_facts">
									<div class="list_facts_icons"><i class="ti-harddrives"></i></div>
									<div class="list_facts_caption">
										<h4>Free Counselling & Demo Sessions</h4>
										<p>Weekly Assignments,<strong>Free Backup sessions till 6 months.</strong>,<strong>Complete Study Material</strong></p>
									</div>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:-50%;">
							<div class="list_facts_wrap_img">
							
								<img src="{{asset('/img/edu_2.png')}}" class="img-fluid" alt="">
								
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