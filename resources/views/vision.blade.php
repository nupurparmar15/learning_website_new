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
								<h1 class="breadcrumb-title">Vision & Mission</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Vision & Mission</li>
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
									<h2>Our<span class="theme-cl"> Vision </span></h2>
								</div>
								<p class="text-justify"><strong>OILab Learning</strong> is one of the oldest job-oriented <strong>Best IT & Software training institutes in Jodhpur</strong> located at <strong>FLno-703 7th Floor Sanskriti Tower, nearby Vishal Mega Mart</strong> founded by <a href="https://openinnovationslab.com/">JTITTLE INNOVATIONS PVT. LTD.</a> We have acquired a distinct reputation for providing high-quality professionals to the industry. On OILab Learning you can get online classes, Specializations, global certificates, and degrees from numerous world-class universities and companies.</p><br>
								
								
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12" >
							<div class="list_facts_wrap_img">
							
								<img src="{{asset('/img/edu_2.png')}}" class="img-fluid" alt="">
								
							</div>
						</div>

					</div>
					
				</div>
			</section>
			<!-- ========================== About Facts List Section =============================== -->
			
			<section class="pt-0">
				<div class="container">
					
					<div class="row align-items-center">
					
                        <div class="col-lg-4 col-md-4 col-sm-12" >
							<div class="list_facts_wrap_img">
								<img src="{{asset('/img/edu_2.png')}}" class="img-fluid" alt="">
							</div>
						</div>

						<div class="col-lg-8 col-md-8 col-sm-12">
							<div class="list_facts_wrap">
								<div class="sec-heading mb-3">
									<h2>Our<span class="theme-cl"> Mission </span></h2>
								</div>
								<p class="text-justify"><strong>OILab Learning</strong> is one of the oldest job-oriented <strong>Best IT & Software training institutes in Jodhpur</strong> located at <strong>FLno-703 7th Floor Sanskriti Tower, nearby Vishal Mega Mart</strong> founded by <a href="https://openinnovationslab.com/">JTITTLE INNOVATIONS PVT. LTD.</a> We have acquired a distinct reputation for providing high-quality professionals to the industry. On OILab Learning you can get online classes, Specializations, global certificates, and degrees from numerous world-class universities and companies.</p><br>
								
								
							</div>
						</div>
						
						

					</div>
					
				</div>
			</section>
			
			<!-- ============================ Footer Start ================================== -->
			@include("layout.footer")
			<!-- ============================ Footer End ================================== -->
			
			@endsection