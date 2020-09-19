@extends('frontend.index')
@section('main-content')
<!-- Carousel -->
		<div class="body-inner">
<div id="main-slide" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators visible-lg visible-md">
				<li data-target="#main-slide" data-slide-to="0" class="active"></li>
				<li data-target="#main-slide" data-slide-to="1"></li>
				<li data-target="#main-slide" data-slide-to="2"></li>
			</ol>
			<!--/ Indicators end-->

			<!-- Carousel inner -->
			<div class="carousel-inner">

				<div class="item active" style="background-image:url({{asset('backend/sliderimage/'.$s[0]->image)}}); background-size:100% 500px;background-repeat: no-repeat;">
					<div class="slider-content">
						<div class="col-md-12 text-center">
							<!-- <h2 class="slide-title animated4"></h2> -->
							<h3 class="slide-sub-title animated5">{{$s[0]->description}}</h3>
							<!-- <p>
								<a href="services.html" class="slider btn btn-primary">Our Services</a>
								<a href="contact.html" class="slider btn btn-primary border">Contact Now</a>
							</p> -->
						</div>
					</div>
				</div>
				<!--/ Carousel item 1 end -->

				<div class="item" style="background-image:url({{asset('backend/sliderimage/'.$s[1]->image)}}); background-size:100% 500px;background-repeat: no-repeat;">
					<div class="slider-content text-left">
						<div class="col-md-12">
							<!-- <h2 class="slide-title-box animated2">World Class Service</h2> -->
							<!-- <h3 class="slide-title animated3">When Service Matters</h3> -->
							<h3 class="slide-sub-title animated3">{{$s[1]->description}}</h3>
							<!-- <p class="animated3">
								<a href="services.html" class="slider btn btn-primary border">Our Services</a>
							</p> -->
						</div>
					</div>
				</div>
				<!--/ Carousel item 2 end -->

				<div class="item" style="background-image:url({{asset('backend/sliderimage/'.$s[2]->image)}}); background-size:100% 500px;background-repeat: no-repeat;">
					<div class="slider-content text-right">
						<div class="col-md-12">
							<!-- <h2 class="slide-title animated6">Meet Our Engineers</h2> -->
							<h3 class="slide-sub-title animated7">{{$s[2]->description}}</h3>
							<!-- <p class="slider-description lead animated7">We will deal with your failure that determines how you
								achieve success.</p> -->
							<!-- <p>
								<a href="contact.html" class="slider btn btn-primary">Get Free Quote</a>
								<a href="about.html" class="slider btn btn-primary border">Learn More</a>
							</p> -->
						</div>
					</div>
				</div>
				<!--/ Carousel item 3 end -->

			</div><!-- Carousel inner end-->

			<!-- Controllers -->
			<a class="left carousel-control" href="#main-slide" data-slide="prev">
				<span><i class="fa fa-angle-left"></i></span>
			</a>
			<a class="right carousel-control" href="#main-slide" data-slide="next">
				<span><i class="fa fa-angle-right"></i></span>
			</a>
		</div>
		<!--/ Carousel end -->

		<section id="ts-features" class="ts-features">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="ts-intro">
							<!-- <h3 class="into-title">Our Company</h3> -->
							<h3 class="into-sub-title">Our Company</h3>
							<p>Rasuwagadhi Hydropower Company Limited (RGHPCL) is a subsidiary of Chilime Hydropower Company Limited (CHPCL) and was incorporated in August 2011 as a public limited company. It is developing Rasuwagadhi Hydroelectric Project (RGHEP) having capacity of 111MW in Rasuwa district of Central Development Region.
							The financing of the project has been managed with 50:50 debt-equity ratio. The debt requirement of the project will be fulfilled by the long term loan from the Employees Provident Fund (EPF) for which tri-partite loan arrangement has been signed between EPF, CHCPL and RGHPCL on 2068/08/22. The equity investment will be made through 51% promoter share and 49% public share.</p>
						</div><!-- Intro box end -->
					</div>

						

							

					<div class="col-md-6 col-xs-12">
						<h3 class="into-sub-title">Welcome to our website</h3>
						<p>The company has the equity structure of 51% promoter shares and 49% public shares. Among the promoters, Chilime holds majority of the shares with 32.79%, NEA holds 18% shares and Local authorities of Rasuwa District holds 0.21% shares. The details of the shareholders have been illustrated in the chart.</p>
						
						<div class="latest-post">
							<div class="latest-post-media">
								<a href="news-single.html" class="latest-post-img">
									<img class="img-responsive" src="{{asset('frontend/images/news/chart.png')}}" alt="img">
								</a>
							</div>

					</div><!-- Col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</section><!-- Feature are end -->

			



			<section id="ts-features" class="ts-features">
				<div class="container">
					<div class="col-lg-7 col-md-4 col-sm-12 col-xs-12">
						<h3 class="column-title">Testimonials</h3>

						<div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
							<div class="item">
								<div class="quote-item">
									<span class="quote-text">
										{{$t[0]->sayings}}
									</span>

									<div class="quote-item-footer">
										<img class="testimonial-thumb" src="{{asset('backend/testi_img/'.$t[0]->image)}}" alt="testimonial">
										<div class="quote-item-info">
											<h3 class="quote-author">{{$t[0]->name}}</h3>
											<span class="quote-subtext">{{$t[0]->position}}</span>
										</div>
									</div>
								</div><!-- Quote item end -->
							</div>
							<!--/ Item 1 end -->

							<div class="item">
								<div class="quote-item">
									<span class="quote-text">
										{{$t[1]->sayings}}
									</span>

									<div class="quote-item-footer">
										<img class="testimonial-thumb" src="{{asset('backend/testi_img/'.$t[1]->image)}}" alt="testimonial">
										<div class="quote-item-info">
											<h3 class="quote-author">{{$t[1]->name}}</h3>
											<span class="quote-subtext">{{$t[1]->position}}</span>
										</div>
									</div>
								</div><!-- Quote item end -->
							</div>
							<!--/ Item 2 end -->

							<div class="item">
								<div class="quote-item">
									<span class="quote-text">
										{{$t[2]->sayings}}
									</span>

									<div class="quote-item-footer">
										<img class="testimonial-thumb" src="{{asset('backend/testi_img/'.$t[2]->image)}}" alt="testimonial">
										<div class="quote-item-info">
											<h3 class="quote-author">{{$t[2]->name}}</h3>
											<span class="quote-subtext">{{$t[2]->position}}</span>
										</div>
									</div>
								</div><!-- Quote item end -->
							</div>
						</div>
					</div>
							


					<div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">

						<div class="sidebar sidebar-right">


						<div class="widget recent-posts">
							<h3 class="column-title">Recent Notice</h3>
							<ul class="unstyled clearfix">
								@foreach($n as $a)
		               	<li>
		                    
		                    <div class="post-info">
		                        <h4 class="entry-title">
		                        	<a href="{{asset('backend/newsfile/'.$a->document)}}" download>{{$a->heading}}</a>
		                        </h4>
		                        <p style="font-size: 15px;">{{$a->published_date}}</p>
		                    </div>
		                    <div class="clearfix"></div>
		                  </li><!-- 1st post end-->
		                  @endforeach

		                  
							
						
							<div class="post-footer">
								<a href="{{url('/news')}}" class="btn btn-primary">Read More</a>
							</div>

						

					
							</div>
			   			</div>
			 		</div>

			  	<!--/ Item 3 end -->

					



			  </div>
				</div><!-- Container end -->
			</section>
			
	</div>


@endsection