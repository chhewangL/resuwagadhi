@extends('frontend.index')
@section('main-content')
	<section id="project-area" class="project-area solid-bg">
			<div class="container">
				<div class="row text-center">
					
					<h3 class="section-sub-title">photos and Gallary</h3>
				</div>
				<!--/ Title row end -->

@foreach($g as $m)
					<!-- <div id="isotope" class="isotope"> -->
						<div class="col-md-4 col-sm-6 col-xs-12 commercial isotope-item" style="margin: 0px;">
							<div class="isotope-img-container">
								<a class="gallery-popup" href="{{asset('backend/g_image/'.$m->image)}}">
									<img class="img-responsive" src="{{asset('backend/g_image/'.$m->image)}}" alt="" >
									<span class="gallery-icon"><i class="fa fa-plus"></i></span>
								</a>
								<div class="project-item-info">
									<div class="project-item-info-content">
										<h3 class="project-item-title">
											<a href="{{asset('backend/g_image/'.$m->description)}}">{{$m->description}}</a>
										</h3>
										<!-- <p class="project-cat">Commercial, Interiors</p> -->
									</div>
								</div>
							</div>
						</div><!-- Isotope item 1 end -->

@endforeach
						<!-- <div class="col-md-4 col-sm-6 col-xs-12 healthcare isotope-item">
							<div class="isotope-img-container">
								<a class="gallery-popup" href="{{('frontend/images/projects/project2.jpg')}}">
									<img class="img-responsive" src="{{('frontend/images/projects/project2.jpg')}}" alt="">
									<span class="gallery-icon"><i class="fa fa-plus"></i></span>
								</a>
								<div class="project-item-info">
									<div class="project-item-info-content">
										<h3 class="project-item-title">
											<a href="projects-single.html">Ghum Touch Hospital</a>
										</h3>
										<p class="project-cat">Healthcare</p>
									</div>
								</div>
							</div>
						</div> --><!-- Isotope item 2 end -->

						<!-- <div class="col-md-4 col-sm-6 col-xs-12 government isotope-item">
							<div class="isotope-img-container">
								<a class="gallery-popup" href="{{('frontend/images/projects/project3.jpg')}}">
									<img class="img-responsive" src="{{('frontend/images/projects/project3.jpg')}}" alt="">
									<span class="gallery-icon"><i class="fa fa-plus"></i></span>
								</a>
								<div class="project-item-info">
									<div class="project-item-info-content">
										<h3 class="project-item-title">
											<a href="projects-single.html">TNT East Facility</a>
										</h3>
										<p class="project-cat">Government</p>
									</div>
								</div>
							</div>
						</div> --><!-- Isotope item 3 end -->

						<!-- <div class="col-md-4 col-sm-6 col-xs-12 education isotope-item">
							<div class="isotope-img-container">
								<a class="gallery-popup" href="{{('frontend/images/projects/project4.jpg')}}">
									<img class="img-responsive" src="{{('frontend/images/projects/project4.jpg')}}" alt="">
									<span class="gallery-icon"><i class="fa fa-plus"></i></span>
								</a>
								<div class="project-item-info">
									<div class="project-item-info-content">
										<h3 class="project-item-title">
											<a href="projects-single.html">Narriot Headquarters</a>
										</h3>
										<p class="project-cat">Infrastructure</p>
									</div>
								</div>
							</div>
						</div> --><!-- Isotope item 4 end -->

						<!-- <div class="col-md-4 col-sm-6 col-xs-12 infrastructure isotope-item">
							<div class="isotope-img-container">
								<a class="gallery-popup" href="{{('frontend/images/projects/project5.jpg')}}">
									<img class="img-responsive" src="{{('frontend/images/projects/project5.jpg')}}" alt="">
									<span class="gallery-icon"><i class="fa fa-plus"></i></span>
								</a>
								<div class="project-item-info">
									<div class="project-item-info-content">
										<h3 class="project-item-title">
											<a href="projects-single.html">Kalas Metrorail</a>
										</h3>
										<p class="project-cat">Infrastructure</p>
									</div>
								</div>
							</div>
						</div> --><!-- Isotope item 5 end -->

						<!-- <div class="col-md-4 col-sm-6 col-xs-12 residential isotope-item">
							<div class="isotope-img-container">
								<a class="gallery-popup" href="{{('frontend/images/projects/project6.jpg')}}">
									<img class="img-responsive" src="{{('frontend/images/projects/project6.jpg')}}" alt="">
									<span class="gallery-icon"><i class="fa fa-plus"></i></span>
								</a>
								<div class="project-item-info">
									<div class="project-item-info-content">
										<h3 class="project-item-title">
											<a href="projects-single.html">Ancraft Avenue House</a>
										</h3>
										<p class="project-cat">Residential</p>
									</div>
								</div>
							</div>
						</div> --><!-- Isotope item 6 end -->
					<!-- </div> --><!-- Isotop end -->

				
				</div><!-- Content row end -->
			</div>
			<!--/ Container end -->
		</section>
@endsection