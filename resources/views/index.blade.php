        @extends('layout.app')

        @section('content')
            <!-- ============================================================== -->
            <!-- Top header  -->
            @include("layout.header")
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="image-cover hero_banner hero-inner-2 shadow rlt" style="background:url({{asset('img/banner-2.jpg')}}) no-repeat;" data-overlay="7">
				<div class="elix_img_box">
					<img src="{{asset('img/preet-o.png')}}" class="img-fluid" alt="">
				</div>
				<div class="container">
					
					<div class="hero-caption small_wd mb-5">
						<h1 class="big-header-capt cl_2 mb-0">Learn on your schedule</h1>
						<p>Study any topic, anytime. Explore thousands of courses for the lowest price ever!</p>
					</div>
					<!-- Type -->
					<div class="row">
						<div class="col-lg-8 col-md-12 col-sm-12">
							<div class="banner-search shadow_high">
								<div class="search_hero_wrapping">
									<div class="row">
									
										<div class="col-lg-5 col-md-5 col-sm-12 br-right">
											<div class="form-group">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Keyword">
													<img src="{{asset('img/search.svg')}}" class="search-icon" alt="">
												</div>
											</div>
										</div>
										
										<div class="col-lg-5 col-md-4 col-sm-12 small-pad">
											<div class="form-group">
												<div class="input-with-icon">
													<select id="c-category" class="form-control">
														<option value="">&nbsp;</option>
														<option value="1">Web Designing</option>
														<option value="2">Business</option>
														<option value="3">Accounting</option>
														<option value="3">Development</option>
														<option value="3">Art & Culture</option>
													</select>
													<img src="{{asset('img/pin.svg')}}" class="search-icon" alt="">
												</div>
											</div>
										</div>
										
										<div class="col-lg-2 col-md-3 col-sm-12 pl-0">
											<div class="form-group none">
												<a href="#" class="btn search-btn full-width">Search</a>
											</div>
										</div>
										
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Trips Facts Start ================================== -->
			<div class="trips_wrap full colored">
				<div class="container">
					<div class="row m-0">
					
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="trips">
								<div class="trips_icons">
									<i class="ti-video-camera"></i>
								</div>
								<div class="trips_detail">
									<h4>100,000 online courses</h4>
									<p>Nor again is there anyone who loves or pursues or desires</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="trips">
								<div class="trips_icons">
									<i class="ti-medall"></i>
								</div>
								<div class="trips_detail">
									<h4>Expert instruction</h4>
									<p>Nam libero tempore, cum soluta and nobis est eligendi optio</p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="trips none">
								<div class="trips_icons">
									<i class="ti-infinite"></i>
								</div>
								<div class="trips_detail">
									<h4>Lifetime access</h4>
									<p>These cases are perfectly simple and easy to distinguish</p>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- ============================ Trips Facts Start ================================== -->
			
			<!-- ========================== Featured Category Section =============================== -->
			<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Popular Category</p>
								<h2><span class="theme-cl">Latest </span> Category For Learn</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-1">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="{{asset('img/content.png')}}" class="img-fluid" alt=""></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Mobile App Development</a></h4>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-2">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="{{asset('img/briefcase.png')}}" class="img-fluid" alt=""></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">PHP Training</a></h4>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-3">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="{{asset('img/career.png')}}" class="img-fluid" alt=""></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Python Training </a></h4>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-4">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="{{asset('img/python.png')}}" class="img-fluid" alt=""></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Web Development Training</a></h4>
									
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-10">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="{{asset('img/designer.png')}}" class="img-fluid" alt=""></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Android Training </a></h4>
									
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-6">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="{{asset('img/speaker.png')}}" class="img-fluid" alt=""></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">MERN Stack </a></h4>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-7">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="{{asset('img/photo.png')}}" class="img-fluid" alt=""></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">MEAN Stack</a></h4>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-8">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="{{asset('img/yoga.png')}}" class="img-fluid" alt=""></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Digital Marketing</a></h4>
								</div>
							</div>							
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="edu_cat_2 cat-9">
								<div class="edu_cat_icons">
									<a class="pic-main" href="#"><img src="{{asset('img/health.png')}}" class="img-fluid" alt=""></a>
								</div>
								<div class="edu_cat_data">
									<h4 class="title"><a href="#">Lifestyle</a></h4>
									
								</div>
							</div>							
						</div>
					</div>
					
				</div>
			</section>
			<!-- ========================== Featured Category Section =============================== -->
			
			<!-- ============================ Featured Courses Start ================================== -->
			<section class="gray min-sec">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Latest &amp; Trending</p>
								<h2><span class="theme-cl">Recent</span> Courses by professional Instructor</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="{{asset('img/co-1.jpg')}}" class="img-fluid" alt=""></a>
									<div class="cources_price"></div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">Web Development Training </a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-star text-warning mr-2"></i>4 Reviews</li>
									</ul>
								</div>
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="{{asset('img/co-2.jpg')}}" class="img-fluid" alt=""></a>
									<div class="cources_price"></div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">Mobile App Development</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-star text-warning mr-2"></i>5 Reviews</li>
									</ul>
								</div>
								
								
								
							</div>	
						</div>
						
						<!-- Cource Grid 1 -->
						<div class="col-lg-4 col-md-6">
							<div class="education_block_grid style_2">
								
								<div class="education_block_thumb n-shadow">
									<a href="course-detail.html"><img src="{{asset('img/co-3.jpg')}}" class="img-fluid" alt=""></a>
									<div class="cources_price"></div>
								</div>
								
								<div class="education_block_body">
									<h4 class="bl-title"><a href="course-detail.html">Digital Marketing Training</a></h4>
								</div>
								
								<div class="cources_info_style3">
									<ul>
										<li><i class="ti-star text-warning mr-2"></i>4.3 Reviews</li>
									</ul>
								</div>
								
								
								
							</div>	
						</div>
						
						
						
					</div>
					
				</div>
			</section>
			<!-- ============================ Featured Courses End ================================== -->
			
			<!-- ========================== About Facts List Section =============================== -->
			<section>
				<div class="container">
					
					<div class="row align-items-center">
					
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="about-short">
								<div class="sec-heading mb-3">
									<h2>Know about <span class="theme-cl">Oilab</span> learning platform</h2>
								</div>
								<p class="text-justify">OILAB Learning is one of the foremost training Institutes which provides learning web design online, PHP training in jodhpur, etc. and offering these various courses along with guaranteed job placement. We believe in providing standard education to ensure a vivid future for our trainees.</p>
                                <div class="list_facts">
									<div class="list_facts_icons"><i class="ti-desktop"></i></div>
									<div class="list_facts_caption">
										<h4>Provide ONE-ON-ONE Session.</h4>
									</div>
								</div>
								<div class="list_facts">
									<div class="list_facts_icons"><i class="ti-heart"></i></div>
									<div class="list_facts_caption">
										<h4>Train the Students from scratch to expert.</h4>
									</div>
								</div>
								<div class="list_facts">
									<div class="list_facts_icons"><i class="ti-harddrives"></i></div>
									<div class="list_facts_caption">
										<h4>Expert Trainers.</h4>
									</div>
								</div>
								<div class="cource_facts">
									<ul>
										<li><span class="theme-cl">7m</span>Active Cources</li>
										<li><span class="theme-cl">77k</span>Student Learning</li>
										<li><span class="theme-cl">84+</span>Free Cources</li>
									</ul>
								</div>
								<a href="#" class="btn btn-modern">Know More<span><i class="ti-arrow-right"></i></span></a>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="list_facts_wrap_img">
							
								<img src="{{asset('/img/edu_2.png')}}" class="img-fluid" alt="">
								
							</div>
						</div>

					</div>
					
				</div>
			</section>
			<!-- ========================== About Facts List Section =============================== -->
			
			<!-- ============================ Featured Instructor Start ================================== -->
			<!--<section class="pt-0">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Meet Instructors</p>
								<h2><span class="theme-cl">Top & Famous</span> Instructor in Your City</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
						
							<div class="four_slide-dots articles arrow_middle">
								
								<!-- Single Slide -->
								<!--<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-1.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Daniel Diwansker</a></h4>
											<span>Web Designer</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<!--<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-2.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Shilpa Singh</a></h4>
											<span>Team Manager</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<!--<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-3.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Adam Wistom</a></h4>
											<span>Sales Manager</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<!--<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-4.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Ragini Singh</a></h4>
											<span>Business Executing</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<!--<div class="singles_items">
									<div class="instructor_wrap">
										<div class="instructor_thumb">
											<a href="instructor-detail.html"><img src="assets/img/user-5.jpg" class="img-fluid" alt=""></a>
										</div>
										<div class="instructor_caption">
											<h4><a href="instructor-detail.html">Daniel Wilson</a></h4>
											<span>HR Manager</span>
											<ul>
												<li><a href="#" class="cl-fb"><i class="ti-facebook"></i></a></li>
												<li><a href="#" class="cl-twitter"><i class="ti-twitter"></i></a></li>
												<li><a href="#" class="cl-linked"><i class="ti-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							
							</div>
						
						</div>
					</div>
					
				</div>
			</section>
			 ============================ Featured Instructor End ================================== -->
			
			<!-- ========================== Articles Section =============================== -->
			<section class="bg-light min-sec">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>Our Blogs</p>
								<h2><span class="theme-cl">Recent</span> Articles to You</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
								
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="top-it-colleges-in-jodhpur-2021"><img src="{{asset('img/co-5.jpg')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>Top IT Colleges In Jodhpur 2021 | Blog OIlabLearning</h4>
									<div class="articles_grid_author">
										<p class="text-justify">India is regarded as the centre of IT education, with institutes and colleges offering various courses at undergraduate, postgraduate, doctoral and certificate level. India is also known as the top global IT companies have a sizeable number of Indian IT graduates working in various capacities. In fact, USA accounts for more than 60% of Indian IT professionals. </p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="web-development-training-in-pali"><img src="{{asset('img/co-3.jpg')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>Web Development Training In Pali | Blog OIlabLearning</h4>
									<div class="articles_grid_author">
										<p class="text-justify">“Learning is a lifelong process of keeping abreast of change. And the
											most pressing task is to teach people how to learn.”
											<strong>Oilab</strong> offers the best Web development , Android development and
											digital marketing course in Pali. These courses are specially designed
											and assist by professional developers. These certification courses helps individual to show his/her competency and build expertise in their professional subjective area. </p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Single Article -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="articles_grid_style">
								<div class="articles_grid_thumb">
									<a href="Best-Way-to-Learn-Android-app-development-Blog-OilabLearning"><img src="{{asset('/img/co-4.jpg')}}" class="img-fluid" alt=""></a>
								</div>
								
								<div class="articles_grid_caption">
									<h4>Best Way to Learn Android app development | Blog OIlabLearning</h4>
									<div class="articles_grid_author">
									<p class="text-justify">Let us discuss a technology that's set the world ablaze. A smartphoneright? From the minute we wake until the minute we go to sleep, the 1 thing which does not part from us is that our smart phone. While our smart phones make life simple for us, the programs on these make it simpler. More than 80 percent of the smartphone market share is of Android. </p>
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</section>
			<!-- ========================== Articles Section =============================== -->
			
			<!-- ============================ Testimonial Start ================================== -->
			<section style="background:url(assets/img/testimonial.png)">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="sec-heading center">
								<p>What People Say?</p>
								<h2><span class="theme-cl">Reviews</span> By Our Success & Top Students</h2>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div id="testimonials_style" class="slick-carousel-3 arrow_middle">
								<div class="testimonial-detail">
									<div class="client-detail-box">
										<div class="pic">
											<img src="{{asset('img/user.png')}}" alt="">
										</div>
										<div class="client-detail">
											<h3 class="testimonial-title">Pawan Gaur</h3>
											<!--<span class="post">Web Developer</span>-->
										</div>
									</div>
									<p class="description">
										" Great place to work to build your career and an excellent workplace culture. learn new things every day and a lot of opportunities for growth. Very friendly and comfortable working environment. "
									</p>
								</div>

								<div class="testimonial-detail">
									<div class="client-detail-box">
										<div class="pic">
											<img src="{{asset('img/user.png')}}" alt="">
										</div>
										<div class="client-detail">
											<h3 class="testimonial-title">Manoj Suthar </h3>
											<!--<span class="post">Senior Software Engineer</span>-->
										</div>
									</div>
									<p class="description">
										" Very good institute for better training. They always keep motivating the students. They have  Professional trainer who is very good and experienced and completely clearing problems."
									</p>
								</div>
								
								<div class="testimonial-detail">
									<div class="client-detail-box">
										<div class="pic">
											<img src="{{asset('img/user.png')}}" alt="">
										</div>
										<div class="client-detail">
											<h3 class="testimonial-title">Dhirendra Solanki</h3>
											<!--<span class="post">Web Designer</span>-->
										</div>
									</div>
									<p class="description">
										" Cool place to learn programming languages like python, MERN and MEAN stack from experienced tutors."
									</p>
								</div>
								
								<div class="testimonial-detail">
									<div class="client-detail-box">
										<div class="pic">
											<img src="{{asset('img/user.png')}}" alt="">
										</div>
										<div class="client-detail">
											<h3 class="testimonial-title">Pragya Lunia</h3>
											<!--<span class="post">Web Developer</span>-->
									</div>
									<p class="description">
										" Thank you so much OILAB Learning for your guidance. I really had an amazing experience with you. And I really thank Rahul Sir for always supporting and guiding me. "
									</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>	
			<!-- ============================ Testimonial End ================================== -->
			
			
			<!-- ============================== Start Newsletter ================================== -->
			<section class="newsletter theme-bg inverse-theme">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8 col-sm-12">
							<div class="text-center">
								<h2>Join Thousand of Happy Students!</h2>
								<p>Subscribe our newsletter & get latest news and updation!</p>
								<form class="sup-form">
									<input type="email" class="form-control sigmup-me" placeholder="Your Email Address" required="required">
									<input type="submit" class="btn btn-theme" value="Get Started">
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ================================= End Newsletter =============================== -->
			
			<!-- ============================ Footer Start ================================== -->
			@include("layout.footer")
			<!-- ============================ Footer End ================================== -->
			
			@endsection