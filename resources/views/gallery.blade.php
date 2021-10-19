@extends('layout.app')

@section('content')
		
            <!-- ============================================================== -->
            <!-- Top header  -->
			@include("layout.header")
            <!-- ============================================================== -->
           
			
			<!-- ============================ Page Title Start================================== -->
			<section class="page-title" style="margin-top:3%;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Photo Gallery</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="/">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Photo Gallery</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->			

			
			<!-- ============================ Full Width Courses  ================================== -->
			<section class="pt-0">
				<div class="container">
					
					<!-- Row -->
					<div class="row">	
						
						<div class="col-lg-12 col-md-12 col-sm-12">
						
							<div class="row">
						
								<!-- Cource Grid 1 -->
								<div class="col-lg-4 col-md-6 popup-gallery ">
									<div class="education_block_grid style_2 ">
										
										<div class="education_block_thumb n-shadow" >
											<a href="{{asset('img/gallery/1.jpg')}}" data-lightbox="roadtrip" ><img id="myImg" src="{{asset('img/gallery/1.jpg')}}" class="img-fluid" alt="" style="background: #000; height: 270px; width: 100%"></a>
										</div>
										
									</div>	
								</div>

                                <div class="col-lg-4 col-md-6 popup-gallery ">
									<div class="education_block_grid style_2 ">
										
										<div class="education_block_thumb n-shadow" >
											<a href="{{asset('img/gallery/2.jpg')}}" data-lightbox="roadtrip" ><img id="myImg" src="{{asset('img/gallery/2.jpg')}}" class="img-fluid" alt="" style="background: #000; height: 270px; width: 100%"></a>
										</div>
										
									</div>	
								</div>
							
                                <div class="col-lg-4 col-md-6 popup-gallery ">
									<div class="education_block_grid style_2 ">
										
										<div class="education_block_thumb n-shadow" >
											<a href="{{asset('img/gallery/2.jpg')}}" data-lightbox="roadtrip" ><img id="myImg" src="{{asset('img/gallery/2.jpg')}}" class="img-fluid" alt="" style="background: #000; height: 270px; width: 100%"></a>
										</div>
										
									</div>	
								</div>

                                <div class="col-lg-4 col-md-6 popup-gallery ">
									<div class="education_block_grid style_2 ">
										
										<div class="education_block_thumb n-shadow" >
											<a href="{{asset('img/gallery/3.jpg')}}" data-lightbox="roadtrip" ><img id="myImg" src="{{asset('img/gallery/3.jpg')}}" class="img-fluid" alt="" style="background: #000; height: 270px; width: 100%"></a>
										</div>
										
									</div>	
								</div>

                                <div class="col-lg-4 col-md-6 popup-gallery ">
									<div class="education_block_grid style_2 ">
										
										<div class="education_block_thumb n-shadow" >
											<a href="{{asset('img/gallery/4.jpg')}}" data-lightbox="roadtrip" ><img id="myImg" src="{{asset('img/gallery/4.jpg')}}" class="img-fluid" alt="" style="background: #000; height: 270px; width: 100%"></a>
										</div>
										
									</div>	
								</div>

                                <div class="col-lg-4 col-md-6 popup-gallery ">
									<div class="education_block_grid style_2 ">
										
										<div class="education_block_thumb n-shadow" >
											<a href="{{asset('img/gallery/5.jpg')}}" data-lightbox="roadtrip" ><img id="myImg" src="{{asset('img/gallery/5.jpg')}}" class="img-fluid" alt="" style="background: #000; height: 270px; width: 100%"></a>
										</div>
										
									</div>	
								</div>

                                <div class="col-lg-4 col-md-6 popup-gallery ">
									<div class="education_block_grid style_2 ">
										
										<div class="education_block_thumb n-shadow" >
											<a href="{{asset('img/gallery/6.jpg')}}" data-lightbox="roadtrip" ><img id="myImg" src="{{asset('img/gallery/6.jpg')}}" class="img-fluid" alt="" style="background: #000; height: 270px; width: 100%"></a>
										</div>
										
									</div>	
								</div>
							</div>
							
							
						</div>
					
					</div>
					<!-- Row -->
					
				</div>
			</section>
			<!-- ============================ Full Width Courses End ================================== -->
			
	<!-- ============================ Footer Start ================================== -->
    @include("layout.footer")
			<!-- ============================ Footer End ================================== -->
			
			@endsection