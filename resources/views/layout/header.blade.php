<div class="header header-transparent change-logo">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand static-logo" href="#"><img src="{{asset('img/oilab.png')}}" style="height:50px; "class="logo" alt=""></a>
							<a class="nav-brand fixed-logo" href="#"><img src="{{asset('img/oilab.png')}}" style="height:50px; class="logo" alt=""></a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li><a style="color:#27D193;" href="/">Home</a></li>
								<li class=""><a style="color:#27D193;" href="#">About Us<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="{{url('about')}}">Our Profile</a></li>
										<li><a href="{{url('vision')}}">Vision & Mission</a></li>
									</ul>
								</li>
                                <li class=""><a style="color:#27D193;" href="#">Gallery<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="{{url('gallery')}}">Photo Gallery</a></li>
									</ul>
								</li>
                                <li class=""><a style="color:#27D193;" href="{{url('blog')}}">Blogs</a></li>
                                <li class=""><a style="color:#27D193;" href="#">Training<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="{{url('how-to-learn-php')}}">PHP Training</a></li>
										<li><a href="{{url('python-training')}}">Python Training </a></li>
                                        <li><a href="{{url('mern-stack-training')}}">MERN Stack Training</a></li>
                                        <li><a href="{{url('mean-stack-training')}}">MEAN Stack Training</a></li>
										<li><a href="{{url('digital-marketing-training-in-jodhpur')}}">Digital Marketing</a></li>
									</ul>
								</li>
								<li class=""><a style="color:#27D193;" href="#">Services<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
                                        <li><a href="{{url('web-development-training')}}">Web Development Training</a></li>
                                        <li><a href="{{url('mobile-app-development-training')}}">Mobile App Development Training</a></li>
									</ul>
								</li>
                                <li class=""><a style="color:#27D193;" href="{{url('contact')}}">Contact Us</a></li>
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
								<li class="login_click light">
									<a href="{{url('internship')}}" >Enroll Internship</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!--data-toggle="modal" data-target="#login"-->