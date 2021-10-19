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
									<h2 class="ed_title">MERN STACK DEVELOPMENT TRAINING</h2>
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
									<h4>MERN STACK DEVELOPMENT TRAINING</h4>
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
								</ul>
							
								<div class="tab-content" id="pills-tabContent">
									
									<!-- Overview Detail -->
									<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
										<!-- Overview -->
										<div class="edu_wraper">
											<h4 class="edu_title">Course Overview</h4>
											<p class="text-justify">MERN is one of several variations of the MEAN stack (MongoDB Express Angular Node), where the traditional Angular.js frontend framework is replaced with React.js. Other variants include MEVN (MongoDB, Express, Vue, Node), and really any frontend JavaScript framework can work.</p>
                                            <h6>What is the MERN Stack?</h6>
											<p class="text-justify">MERN stands for MongoDB, Express, React, Node, after the four key technologies that make up the stack.	
                                            <ul style="list-style-type:disc;">
                                                <li>MongoDB - document database</li>
                                                <li>Express(.js) - Node.js web framework</li>
                                                <li>React(.js) - a client-side JavaScript framework</li>
                                                <li>Node(.js) - the premier JavaScript web server</li>
                                            </ul>
                                            </p>
                                            <p class="text-justify">Express and Node make up the middle (application) tier. Express.js is a server-side web framework, and Node.js the popular and powerful JavaScript server platform. Regardless of which variant you choose, ME(RVA)N is the ideal approach to working with JavaScript and JSON, all the way through.</p>
										</div>
										
									</div>
									
									<!-- Curriculum Detail -->
									<div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab">
										<div class="edu_wraper">
											<h4 class="edu_title">Course Circullum</h4>
											<div id="accordionExample" class="accordion shadow circullum">
                                                <p class="text-justify">MERN Stack development refers to the development process that falls within these particular set of technologies MongoDB, Expressjs, AngularJs, NodeJS. In simple words, MERN Stack Developers are like JS- based application developers.</p>
                                                <h6>Course Details</h6>
                                                <ol style="list-style-type:disc;">
                                                    <li>MongoDB: A cross-platform document database</li>
                                                    <li>ExpressJS: A back-end web application framework</li>
                                                    <li>React JS: A JavaScript library for building user interfaces </li>
                                                    <li>Node.js: A cross-platform JavaScript runtime environment</li>
                                                </ol>
											</div>
										</div>
									</div>
									
									<!-- Instructor Detail -->
									<div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab">
									<div class="edu_wraper">
											<div id="accordionExample" class="accordion shadow circullum">
												<h4 class="edu_title">MongoDB</h4>
												<ul style="list-style-type:disc;">
                                                    <li> Introduction</li>
                                                    <li> Basic and CRUD Operation</li>
                                                    <li> Schema and Relations</li>
                                                    <li> Shell and The Server</li>
                                                    <li> MongoDB Compass to Explore Data Visually</li>
                                                    <li> Create Different Types of Operations</li>
                                                    <li> Update Different Types of Operations</li>
                                                    <li> Delete Different Types of Operations</li>
                                                    <li> Working with Indexes</li>
                                                    <li> Working with Geospatial Data</li>
                                                    <li> MongoDB Aggregation Framework</li>
                                                    <li> Working with Numeric Data</li>
                                                    <li> MongoDB Security</li>
                                                    <li> Deployment, Fault Tolerancy and Performance</li>
                                                    <li> Working with Transaction</li>
                                                    <li> Shell to Driver</li>
                                                    <li> Stitch</li>
                                                </ul><br/>
                                                <h6>ExpressJs</h4>
                                                <ul style="list-style-type:disc;">
                                                    <li>ExpressJs Introduction</li>
                                                    <li>Node(Express) Development Environment</li>
                                                    <li>Express Methods</li>
                                                    <li>Application Properties, Events and Methods</li>
                                                    <li>Request Properties and Methods</li>
                                                    <li>Response Properties and Methods</li>
                                                    <li>Router Methods</li>
                                                    <li>Transferring Files to Client</li>
                                                    <li>Working With Static Files and Form data</li>
                                                    <li> Working With Database</li>
                                                    <li> Working With Middleware</li>
                                                    <li> Working With User Session</li>
                                                    <li> Working with cookies and cookie-based sessions</li>
                                                    <li>Authentication</li>
                                                    <li>Error Handling</li>
                                                    <li> Introduce ejs</li>
												</ul>
                                                <h6>React JS</h4>
                                                <ul style="list-style-type:disc;">
                                                    <li> React Js Introduction</li>
                                                    <li> React Components</li>
                                                    <li> React Props</li>
                                                    <li> React State</li>
                                                    <li> React LifeCycle</li>
                                                    <li> React Events</li>
                                                    <li> React Forms</li>
												</ul>
                                                <h6>Node.js</h4>
                                                <ul style="list-style-type:disc;">
                                                    <li> Node.js Introduction</li>
                                                    <li>Node.js Processing Model</li>
                                                    <li> Node.js Setup Development Environment</li>
                                                    <li> Node.js Console and REPL</li>
                                                    <li> Node.js Basic and Module</li>
                                                    <li> Explain About NPM</li>
                                                    <li> Node.js Web Server</li>
                                                    <li> Node.js File System</li>
                                                    <li> Node.js Event Emitter</li>
                                                    <li>. Node.js Buffers</li>
                                                    <li> Node.js Streams</li>
                                                    <li> Node.js Buffers</li>
                                                    <li> Node.js Data Access</li>
                                                    <li> Node.js Template Engine</li>
												</ul>
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