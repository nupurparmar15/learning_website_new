<!DOCTYPE html>
<html lang="en">
	<head>
	@section('head')
<meta charset="utf-8">
<meta name="author" content="www.frebsite.nl">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<title> Welcome To Oilab Learning</title>
@endsection
		 
        <!-- Custom CSS -->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="{{asset('css/colors.css')}}" rel="stylesheet">
		
    </head>
	
    <body class="red-skin">
	
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
         
        
        @yield('content')

        <!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="registermodal">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Apply Now</h4>
							<p>Two Months / Six Months Industrial Training / Internship in Jodhpur for B.Tech, MCA, M.Tech, B.E., Polytechnic Students with live projects and 100% Job Assistance with top most companies</p>
							<div class="login-form">
								<form action="{{url('internship')}}" method="post"> 
								@csrf
									<div class="form-group">
										<input type="text" type="text" class="form-control" placeholder="Name" name="name" id="name" >
									</div>
									
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email ID" name="email" id="email">
									</div>

									<div class="form-group">
										<input type="number" class="form-control" placeholder="Mobile Number" id="mobile_no" name="mobile_no">
									</div>

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Interested Area" id="interested_area" name="interested_area">
									</div>


									<div class="form-group">
										<select id="course" class="form-control" name="course">
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
									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Submit</button>
									</div>
								
								</form>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Sign Up Modal -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="sign-up">
						<span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
						<div class="modal-body">
							<h4 class="modal-header-title">Sign Up</h4>
							<div class="login-form">
								<form>
								
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Full Name">
									</div>
									
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email">
									</div>
									
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Username">
									</div>
									
									<div class="form-group">
										<input type="password" class="form-control" placeholder="*******">
									</div>

									
									<div class="form-group">
										<button type="submit" class="btn btn-md full-width pop-login">Sign Up</button>
									</div>
								
								</form>
							</div>
							
							<div class="modal-divider"><span>Or Signup via</span></div>
							<div class="social-login ntr mb-3">
								<ul>
									<li><a href="#" class="btn connect-fb"><i class="ti-facebook"></i>Facebook</a></li>
									<li><a href="#" class="btn connect-google"><i class="ti-google"></i>Google</a></li>
								</ul>
							</div>
							
							<div class="text-center">
								<p class="mt-3"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/popper.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/select2.min.js')}}"></script>
		<script src="{{asset('js/slick.js')}}"></script>
		<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('js/counterup.min.js')}}"></script>
		<script src="{{asset('js/custom.js')}} "></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script>
		<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<!-- Magnific Popup core JS file -->
		<script src="{{asset('magnific-popup/jquery.magnific-popup.js')}}"></script>
		<link href="{{asset('lightbox/dist/css/lightbox.css')}}" rel="stylesheet" />
		<script src="{{asset('lightbox/dist/js/lightbox.js')}}"></script>
		$('.popup-gallery').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image'
		// other options
		});
		</script>
		<link rel="stylesheet" href="magnific-popup/magnific-popup.css">


		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>