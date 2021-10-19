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
								<h1 class="breadcrumb-title">Enroll For Internship</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Enroll For Internship</li>
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
									<h2>What we have got for you </h2>
								</div>
                                <h3><span class="theme-cl">What is OILab’s Internship Program?</span></h3>
								<p class="text-justify">An opportunity for students participating in a variety of OILab’s led Projects to add an additional dimension to their experience. The program provides students the opportunity the need to more deeply understand the startup ecosystem and technical development on trending technologies as React, Android, Python etc.</p><br>
                                <p class="text-justify">
                                This internship will be based out of our Jodhpur office. You will get hands-on, focused job experience on how we are re-shaping how people connect with businesses, under the mentorship of our team.</p>
                                    <div class="sec-heading mb-3">
                                        <h2>OUR KEY FEATURES</h2>
                                    </div>
                                    <p class="text-justify">If you are a student, consider internship certification as a degree-enrichment opportunity that provides you with a core understanding of how technology impacts business. If you’re looking to develop or enhance your IT skills, This training and certification can give you the fundamental IT knowledge you need to contribute to business and technology decisions in a more meaningful way.</p>
                                    <p class="text-justify">With a startup, your ideas are values and your work counts. You will get immediate feedback and have the satisfaction of having worked on a product or service that is may be used directly by the customers. That is a huge win. An experience of working on a product that has direct consumers is something you will never get in a big company as an intern.</p>
                                    <p class="text-justify">Moreover, if you love working at the startup and can identify with their products, and in turn they love your work - there's a lot of chance that they've hire you as a full-time employee in the future.</p>
                                    <p class="text-justify">With the changing scene of startups in India, the big employers have identified the potential of the talent coming from startup companies. There's a fair chance that the MNCs recognize your work experience at a startup as a valuable asset.</p>
                                    <p class="text-justify">So, if you are looking for a serious internship, you must definitely look at deriving a great work/learning experience out of your 2-3 month internship time.</p>
                                    <p class="text-justify">We provide you specialized training/internship in your own chosen field by experts and the other perks at a very minimal fee.</p>
							</div>
						</div>
						
						

					</div>
					
				</div>
			</section>
			<!-- ========================== About Facts List Section =============================== -->
			
				<!-- ========================== About Facts List Section =============================== -->
                <section class="pt-0">
				<div class="container">
					
					<div class="row align-items-center">
					
					<div class="col-lg-8 col-md-8 col-sm-8" >
							<div class="list_facts_wrap_img">
                                <div class="sec-heading mb-3">
									<h2>Benefits of this Training program</h2>
								</div>
                                <p class="text-justify">
                                    <ul>
                                        <li>Students who attend this Training program will be certified as Technical Associate which will be of higher value for their placements. Students who are active and enthusiastic will be provided stipend which may lead to recruitment or direct placement opportunity in associated companies. This training will ensure that students will gain practical knowledge required for their bright future.</li>
                                        <li>Certification contributes an additional role in establishing your credibility. Certificates validate your Knowledge, skills and expertise in the Chosen field.</li>
                                        <li>All participants will get following Certification on the successful completion of The Training Program Associated companies training Certificate.</li>
                                        <li>Internship Letter which will certify they have worked on real projects during the training</li>

                                    </ul>
                                </p>
                                <a href="#" data-toggle="modal" data-target="#login"class="btn btn-modern">Enroll<span><i class="ti-arrow-right"></i></span></a>
							</div>
						</div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
							<div class="list_facts_wrap_img">
							
								<img src="{{asset('/img/about.jpg')}}" class="img-fluid" alt="">
								
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