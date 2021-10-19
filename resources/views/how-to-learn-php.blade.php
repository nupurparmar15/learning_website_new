@extends('layout.app')

@section('content')
		
            <!-- ============================================================== -->
            <!-- Top header  -->
			@include("layout.header")
            <!-- ============================================================== -->
			
			<!-- ============================ Course Header Info Start================================== -->
			<div class="image-cover ed_detail_head lg theme-ov" style="background:#f4f4f4 url(assets/img/banner-4.jpg);" data-overlay="9">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-9 col-md-9">
							<div class="ed_detail_wrap light">
								<div class="ed_header_caption" style="margin-top:10%;">
									<h2 class="ed_title">Learn PHP Online</h2>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Course Header Info End ================================== -->
			
			<!-- ============================ Course Detail ================================== -->
			<section class="bg-light pt-0">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-12 col-md-12 pt-5">
						
							<div class="inline_edu_wrap">
								<div class="inline_edu_first">
									<h4>Learn PHP Online</h4>
								</div>	
							</div>
							
							<div class="property_video xl">
								<div class="thumb">
									<img class="pro_img img-fluid w100" src="{{asset('img/banner-5.jpg')}}" alt="7.jpg">
									<div class="overlay_icon">
										<div class="bb-video-box">
											<div class="bb-video-box-inner">
												<div class="bb-video-box-innerup">
													<a href="../../watch.html?v=A8EI6JaFbv4" data-toggle="modal" data-target="#popup-video" class="theme-cl"><i class="ti-control-play"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- All Info Show in Tab -->
							<div class="tab_box_info mt-4">
								<ul class="nav nav-pills mb-3 light" id="pills-tab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="overview-tab" data-toggle="pill" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="curriculum-tab" data-toggle="pill" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="instructor-tab" data-toggle="pill" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">Modules</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="reviews-tab" data-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Frameworks</a>
									</li>
								</ul>
							
								<div class="tab-content" id="pills-tabContent">
									
									<!-- Overview Detail -->
									<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
										<!-- Overview -->
										<div class="edu_wraper">
											<h4 class="edu_title">Course Overview</h4>
											<p class="text-justify">
											There are many websites that use <a href="https://en.m.wikipedia.org/wiki/PHP" target="_blank"> PHP programming </a> language, from Yahoo to Tumblr and Wikipedia. <a href="/" target="_blank" rel="noopener noreferrer">Learn PHP online</a> is one of the most widely used programming languages. According to the PYPL Popularity of Programming Language Index PHP ranks fifth on Google. This shows how widely used PHP is on the internet. It's possible you are asking, "How can I learn PHP code?" Although you might feel overwhelmed by the idea of learning to code, it's not necessary to panic. Everyone has to start somewhere. This guide will provide some top tips for learning PHP code. We will help you get started on your PHP journey.</p>

											<p class="text-justify"><strong>What is PHP?</strong><br>
											PHP stands for Hypertext Processor and is a server-side programming language that allows you develop full stack web apps. PHP runs on a website's backend because it is server-side technology. This is the section of a website that a visitor does not see. Learning PHP online can be used to execute server-side scripts such as data processing and database management.<br> There are many possible uses for PHP. These include:<br> A PHP script can add content to a website. This allows you load data from a database onto a website.<br> PHP can be used to access files stored on a server<br> PHP can process and collect form data <br>PHP makes it possible to create login and registration pages for a website. These are just a few examples of the many tasks PHP can be used for. It's easy to see why so many people are interested in learning PHP Online.</p>	


											<h6>What's PHP used for?</h6>
											<p class="text-justify">Server-side scripting is done with PHP. PHP is used to create the back-end or hidden parts of a website. PHP applications can handle user management, authentication, payments and any other "dynamic" aspect of a website. PHP is often backed up by a database. Because PHP is adept at processing and handling form data, this is why a database is often used to back up PHP. You'll often find web applications that use PHP to process data and then use a tool such as MySQL to store that data.</p>
										</div>
										
									</div>
									
									<!-- Curriculum Detail -->
									<div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
										<div class="edu_wraper">
											<h4 class="edu_title">Course Circullum</h4>
											<div id="accordionExample" class="accordion shadow circullum">
												<p class="text-justify">PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites. It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.</p>
											</div>
										</div>
									</div>
									
									<!-- Instructor Detail -->
									<div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
									<div class="edu_wraper">
											<div id="accordionExample" class="accordion shadow circullum">
												<p class="text-justify">We at OILAB make you learn the following:</p>
												<h4 class="edu_title">Module I</h4>
												<ul style="list-style-type:disc;">
												<li>HTML</li>
												<li>CSS</li>
												<li>Bootstrap</li>
												<li>Javascript</li>
												<li>Jquery</li>
												<li>MySQL</li>
												</ul><br/>
												<h4 class="edu_title">Module II</h4>
												<ul style="list-style-type:disc;">
												<li>PHP</li>
												<li>APIs</li>
												<li>Hosting</li>
												</ul>
											</div>
										</div>
									</div>
									
									<!-- Reviews Detail -->
									<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
										
										<!-- Overall Reviews -->
										<div class="rating-overview">
										<div class="edu_wraper">
											<div id="accordionExample" class="accordion shadow circullum">
												<ul style="list-style-type:disc;">
												<li>LARAVEL</li>
												<li>CODEIGNITER</li>
												<li>SYMFONY</li>
												<li>CAKEPHP</li>
												<li>YII</li>
												<li>ZEND</li>
												<li>PHALCON</li>
												<li>FUELPHP</li>
												</ul>
											</div>
										</div>
										</div>
							
									</div>
									
								</div>
							</div>
							
							<!-- Submit Reviews -->
							<div class="edu_wraper">
								<h4 class="edu_title">Submit Reviews</h4>
								<div class="review-form-box form-submit">
									<form>
										<div class="row">
											
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<input class="form-control" type="text" placeholder="Your Name" id="name">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<input class="form-control" type="email" placeholder="Your Email" id="email">
												</div>
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
													<input type="number" class="form-control" placeholder="Mobile Number" id="mobile_no">
												</div>
											</div>
											
											<div class="col-lg-6 col-md-6 col-sm-12">
												<div class="form-group">
												<select id="select_course_sl" class="form-control">
													<option value="0"> Select Training Course *</option>
													<option value="Web Development"> Web Development Training </option>
													<option value="Website Designing Training"> Website Designing Training </option>
													<option value="PHP Training"> PHP Training </option>
													<option value="Advance PHP Training"> Advance PHP Training </option>
													<option value="Cake PHP Training"> Cake PHP Training </option>
													<option value="WordPress Training"> WordPress Training </option>
													<option value="Magento Training"> Magento Training </option>
													<option value="Android Training"> Android Training </option>
													<option value="iPhone Development"> iPhone Training </option>
													<option value="SEO Training"> SEO Training </option>
													<option value="Java Training">Java Training </option>
													<option value="C Training"> C Training </option>
													<option value="C++ Training"> C++ Training </option>
													<option value="Advance Php Training">Advance Php Training</option>
													<option value="Android Training">Android Training</option>
													<option value="Angular">Angular</option>
													<option value="C Training">C Training</option>
													<option value="C++ Training">C++ Training</option>
													<option value="Cake Php (Framework) Training">Cake Php (Framework) Training</option>
													<option value="Coreldraw">Coreldraw</option>
													<option value="Data Structure Algorithm (Dsa)">Data Structure Algorithm (Dsa)</option>
													<option value="Digital Marketing Training">Digital Marketing Training</option>
													<option value="Google Adwords /ppc/sem">Google Adwords /ppc/sem</option>
													<option value="Graphic Designing">Graphic Designing</option>
													<option value="HTML And CSS">HTML And CSS</option>
													<option value="Illustrator">Illustrator</option>
													<option value="Iphone Training">Iphone Training</option>
													<option value="Java Training">Java Training</option>
													<option value="Laravel Training">Laravel Training</option>
													<option value="Machine Learning">Machine Learning</option>
													<option value="Magento Training">Magento Training</option>
													<option value="MERN Stack web development">MERN Stack web development</option>
													<option value="Node Js">Node Js</option>
													<option value="Photoshop">Photoshop</option>
													<option value="Php Training">Php Training</option>
													<option value="Python Framework (Django)">Python Framework (Django)</option>
													<option value="Python Training">Python Training</option>
													<option value="React Js">React Js</option>
													<option value="SEO Training">SEO Training</option>
													<option value="UI And UX Designing">UI And UX Designing</option>
													<option value="Web Development Training">Web Development Training</option>
													<option value="Website Designing Training">Website Designing Training</option>
													<option value="Wordpress Training">Wordpress Training</option>
													</select>
												</div>
											</div>

											
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="form-group">
													<button type="submit" class="btn btn-theme">Submit Review</button>
												</div>
											</div>
											
										</div>
									</form>
								</div>
							</div>
							
						</div>
						
						
					
					</div>
				
				</div>
			</section>
			<!-- ============================ Course Detail ================================== -->
			
			<!-- ============================ Footer Start ================================== -->
			@include("layout.footer")
			<!-- ============================ Footer End ================================== -->
			
			@endsection