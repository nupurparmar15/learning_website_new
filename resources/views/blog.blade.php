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
								<h1 class="breadcrumb-title">Our Blogs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Our Blogs</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->	
			
		<!-- ========================== Articles Section =============================== -->
        <section class="pt-0">
				<div class="container">
					
					<div class="row">
								
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="{{url('BE-BTech-cse-internship-training-institute-jodhpur')}}"><img src="{{asset('img/b-1.jpg')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>BE-BTech-cse-internship-training-institute-jodhpur</h4>
								</div>
							</div>
						</div>
						
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="{{url('How-To-Find-Internships-In -Jodhpur-A-Step-By-Step-Guide-by-oilablearning')}}"><img src="{{asset('img/b-2.jpg')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>How To Find Internships In Jodhpur: A Step-By-Step Guide by oilablearning</h4>
								</div>
							</div>
						</div>
						
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="{{url('get-the-best-php-training-In-Jodhpur-oilablearning')}}"><img src="{{asset('img/b-3.jpg')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>Get the best php training In Jodhpur oilablearning</h4>
								</div>
							</div>
						</div>
						
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="{{url('Best-Way-to-Learn-Android-app-development-Blog-OilabLearning')}}"><img src="{{asset('img/co-6.jpg')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>Best Way to Learn Android app development | Blog OilabLearning</h4>
								</div>
							</div>
						</div>
						
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="{{url('web-development-training-in-pali')}}"><img src="{{asset('img/web.png')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>Web Development Training In Pali | Blog OilabLearning</h4>
								</div>
							</div>
						</div>
						
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="{{url('top-it-colleges-in-jodhpur-2021')}}"><img src="{{asset('img/college.jpg')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>Top IT Colleges In Jodhpur 2021 | Blog OilabLearning</h4>
								</div>
							</div>
						</div>
					
                        <div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="{{url('android-development-training')}}"><img src="{{asset('img/android.jpg')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>Android App Development Training | Blog OIlab Learning</h4>
								</div>
							</div>
						</div>

					</div>
					
					
							
				</div>
			</section>
			<!-- ========================== Articles Section =============================== -->
			
			<!-- ============================ Footer Start ================================== -->
			@include("layout.footer")
			<!-- ============================ Footer End ================================== -->
			
			@endsection