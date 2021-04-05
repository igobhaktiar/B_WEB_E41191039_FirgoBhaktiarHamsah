@extends ('frontend/layouts.template')
@section ('content')

<nav class="menu-block">
		<div class="container">
			<div class="navbar ow-navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="{{ asset('frontend/assets/images/logo.png')}}" alt="Logo" /></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" title="Home">Home</a></li>
						<li><a href="about.html" title="About">About</a></li>
						<li class="dropdown">
							<a href="services.html" title="Fleet" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="estimation-form.html">Quote</a></li>
								<li><a href="faq.html">FAQ - Default</a></li>
								<li><a href="faq-1.html">FAQ - Accordion</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="fleet.html" title="Fleet" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Fleet</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="fleet.html">Fleet</a></li>
								<li><a href="fleet-grid.html">Fleet Grid</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="blog.html" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="single-blog.html">Single Blog</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" title="Pages" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
							<i class="ddl-switch fa fa-angle-down"></i>
							<ul class="dropdown-menu">
								<li><a href="errorpage.html">404</a></li>
								<li><a href="coming-soon.html">Coming Soon</a></li>
							</ul>
						</li>
						<li><a href="contact-us.html" title="Contact">Contact</a></li>							
					</ul>
					<a href="#" title="Get A Quote" class="btn">get a quote</a>
				</div>
			</div>
		</div>
	</nav><!-- Menu Block /- -->

	<!-- Photo Slider -->
	<div id="photo-slider" class="photo-slider container-fluid no-padding">
		<!-- Main Carousel -->
		<div id="main-carousel" class="carousel slide carousel-fade col-offset-2" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ asset('frontend/assets/images/slider-image/slider-1.jpg')}}" alt="slider-1"/>
					<div class="carousel-caption">
						<h1>Do you want fast delivery</h1>
						<h3>Logistics through innovation, dedication, and technology.</h3>
						<a href="#" class="btn-default">Our Services</a>
						<a href="#" class="btn-default bg">Contact Us</a>
					</div>
				</div>
				<div class="item">
					<img src="{{ asset('frontend/assets/images/slider-image/slider-2.jpg')}}" alt="slider-2"/>
					<div class="carousel-caption">
						<h1>Do you want fast delivery</h1>
						<h3>Logistics through innovation, dedication, and technology.</h3>
						<a href="#" class="btn-default">Our Services</a>
						<a href="#" class="btn-default bg">Contact Us</a>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
				<i class="fa fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
				<i class="fa fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</div><!-- Main Carousel /-  -->
	</div><!-- Photo Slider /- -->

	<!-- Services -->
	<div class="services container-fluid no-padding">
		<!-- Container -->
		<div class="container">
			<div class="services-box">
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-1.jpg')}}" alt="services">
						<h3>Ground Shipping</h3>
						<p>Business model canvas metri essar. Incubator ramen virality product management drect mailing founders gamification Effct Touch.</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-2.jpg')}}" alt="services">
						<h3>Air Delivery</h3>
						<p>Business model canvas metri essar. Incubator ramen virality product management drect mailing founders gamification Effct Touch.</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-3.jpg')}}" alt="services">
						<h3>Sea Delivery</h3>
						<p>Business model canvas metri essar. Incubator ramen virality product management drect mailing founders gamification Effct Touch.</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-3.jpg')}}" alt="services">
						<h3>Sea Delivery</h3>
						<p>Business model canvas metri essar. Incubator ramen virality product management drect mailing founders gamification Effct Touch.</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-3.jpg')}}" alt="services">
						<h3>Sea Delivery</h3>
						<p>Business model canvas metri essar. Incubator ramen virality product management drect mailing founders gamification Effct Touch.</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-3.jpg')}}" alt="services">
						<h3>Sea Delivery</h3>
						<p>Business model canvas metri essar. Incubator ramen virality product management drect mailing founders gamification Effct Touch.</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
			</div>
		</div><!-- Container /- -->
	</div><!-- Services /- -->

	<!-- Offer -->
	<div class="offer container-fluid no-padding">
		<div class="section-padding"></div>
		<!-- Container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header">
				<h3>Service We Offer</h3>
				<p>Buzz analytics business-to-consumer. Partner network ramen social media freemium iteration.</p>
			</div><!-- Section Header -->
			<div class="col-md-4 col-sm-6 no-left-padding">
				<img src="{{ asset('frontend/assets/images/offer-image/offer.jpg')}}" alt="offer-image">
			</div>
			<div class="col-md-8 col-sm-6">
				<div class="row">
					<div class="col-md-6">
						<div class="offers-content">
							<img src="{{ asset('frontend/assets/images/icon/icons-1.png')}}" alt="icons">
							<h3>world wide transport</h3>
							<p>Canvas metri essar. Incubator ramen viral product management drect mailing. such founders gamification Effct.</p>
						</div>
					</div>
					<div class="col-md-6">	
						<div class="offers-content">
							<img src="{{ asset('frontend/assets/images/icon/icons-3.png')}}" alt="icons">
							<h3>world wide transport</h3>
							<p>Canvas metri essar. Incubator ramen viral product management drect mailing. such founders gamification Effct.</p>
						</div>
					</div>
					<div class="col-md-6">	
						<div class="offers-content">
							<img src="{{ asset('frontend/assets/images/icon/icons-2.png')}}" alt="icons">
							<h3>world wide transport</h3>
							<p>Canvas metri essar. Incubator ramen viral product management drect mailing. such founders gamification Effct.</p>
						</div>
					</div>
					<div class="col-md-6">	
						<div class="offers-content">
							<img src="{{ asset('frontend/assets/images/icon/icons-4.png')}}" alt="icons">
							<h3>world wide transport</h3>
							<p>Canvas metri essar. Incubator ramen viral product management drect mailing. such founders gamification Effct.</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Container / -->
		<div class="section-padding"></div>
	</div><!-- Offer / -->

	<!-- Why We Are Section -->
	<div id="why-we-are-section" class="why-we-are-section container-fluid no-padding">		
		<!-- Features Block -->
		<div class="features-block">
			<div class="section-padding"></div>
			<!-- Section Header -->
			<div class="section-header">
				<h3>Why we are best</h3>
				<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain. Completely synergize resource taxing via premier niche markets. Professionally cultivate one-to-one customer .</p>
				<a href="#" class="btn">About More <i><img src="{{ asset('frontend/assets/images/icon/about-ic.png')}}" alt="About Ic" /></i></a>
			</div><!-- Section Header /- -->
			<!-- Features Content -->
			<div class="features-content row">
				<div class="col-md-4 features-box">
					<i><img src="{{ asset('frontend/assets/images/icon/commitment.png')}}" alt="commitment" /><span>1</span></i>
					<div class="features-box-content">
						<h4>Quality Commitment</h4>
						<p>Incubator viral prood management mailin such a founders.</p>
					</div>
				</div>
				<div class="col-md-4 features-box">
					<i><img src="{{ asset('frontend/assets/images/icon/user.png')}}" alt="commitment" /><span>2</span></i>
					<div class="features-box-content">
						<h4>Quality Commitment</h4>
						<p>Incubator viral prood management mailin such a founders.</p>
					</div>
				</div>
				<div class="col-md-4 features-box">
					<i><img src="{{ asset('frontend/assets/images/icon/like.png')}}" alt="commitment" /><span>3</span></i>
					<div class="features-box-content">
						<h4>Quality Commitment</h4>
						<p>Incubator viral prood management mailin such a founders.</p>
					</div>
				</div>
			</div><!-- Features Content /- -->
			<div class="section-padding"></div>
		</div><!-- Features Block -->
		<!-- Request Quote -->
		<div class="request-quote">
			<div class="section-padding"></div>
			<!-- Section Header -->
			<div class="section-header">
				<i><img src="{{ asset('frontend/assets/images/icon/quote-ic.png')}}" alt="quote ic" /></i>
				<h3>Request a quote</h3>
				<p>Fill in the form below and we will get back to you ASAP.</p>
			</div><!-- Section Header /- -->
			<form class="quote-form">
				<div class="form-group col-md-6">
					<input type="text" class="form-control" placeholder="Your Name Here">
				</div>
				<div class="form-group col-md-6">
					<input type="text" class="form-control" placeholder="Subject" required>
				</div>
				<div class="form-group col-md-6">
					<input type="text" class="form-control" placeholder="Email Address">
				</div>
				<div class="form-group col-md-6">
					<select>
						<option>Storage</option>
						<option>100</option>
						<option>2000</option>
						<option>30000</option>
					</select>
				</div>
				<div class="form-group col-md-12">
					<textarea class="form-control" placeholder="Message"></textarea>
				</div>
				<div class="form-group col-md-6 col-sm-6 col-xs-12">
					<label>
						<input type="checkbox"> Get Latest News
					</label>
				</div>
				<div class="form-group col-md-6 col-sm-6 col-xs-12">
					<button class="btn pull-right">Send Request <i><img src="{{ asset('frontend/assets/images/icon/mail-ic.png')}}" alt="About Ic" /></i></button>
				</div>
			</form>
			<div class="section-padding"></div>
		</div><!-- Request Quote /- -->
	</div><!-- Why We Are /- -->
		
	<!-- Blog Section -->
	<div class="blog-section container-fluid no-padding">
		<div class="section-padding"></div>
		<!-- Container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header-1">
				<h3>Latest From Blog</h3>
				<p> Ducimus qui blanditis praesentum voluptaum deleniti atque corrupti quos dolores.</p>
			</div><!-- Section Header -->
			<div class="col-md-6">
				<div class="entry-cover">
					<a href="single-blog.html"><img src="{{ asset('frontend/assets/images/blog/blog-1.png')}}" alt="blog-1"/></a>
				</div>
				<div class="enetry-header">
					<div class="entry-title">
						<h3><a title="Blog Title" href="single-blog.html">best Transports hosts fifth Global Supplier Awards</a></h3>
					</div>
					<div class="entry-meta">
						<div class="post-date">
							<a href="#">Dec 12 2015</a>
						</div>
						<div class="byline"> 
							<a href="#">By Admin</a>
						</div>
						<div class="post-comment">
							<a href="#">4 Comments</a>
						</div>
					</div>
				</div>
				<div class="entry-content">
					<p>Perspiciatis unde omnis iste natus error sit ametsan voluptatem accusantium dolore lauda ntiumol, totam rem aperiam  libero tempore cumuna[...]</p>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="blog-list">
					<div class="col-md-4">
						<div class="entry-cover">
							<a href="single-blog.html"><img src="{{ asset('frontend/assets/images/blog/blog-2.png')}}" alt="blog-2"/></a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="blog-area">
							<div class="enetry-header">
								<div class="entry-title">
									<h3><a title="Blog Title" href="single-blog.html">5 way to Send your Goods by ship</a></h3>
								</div>
								<div class="entry-meta">
									<div class="post-date">
										<a href="#">Dec 12 2015</a>
									</div>
									<div class="byline"> 
										<a href="#">By Admin</a>
									</div>
									<div class="post-comment">
										<a href="#">4 Comments</a>
									</div>
								</div>
							</div>
							<div class="entry-content">
								<p>Perspiciatis unde omnis iste natus error sit ametsan voluptatem accusantium[...] </p>
							</div>
						</div>
					</div>
				</div>
				<div class="blog-list">
					<div class="col-md-4">
						<div class="entry-cover">
							<a href="single-blog.html"><img src="{{ asset('frontend/assets/images/blog/blog-3.png')}}" alt="blog-3"/></a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="blog-area">
							<div class="enetry-header">
								<div class="entry-title">
									<h3><a title="Blog Title" href="single-blog.html">Transatlantic Healthcare Service</a></h3>
								</div>
								<div class="entry-meta">
									<div class="post-date">
										<a href="#">Dec 12 2015</a>
									</div>
									<div class="byline"> 
										<a href="#">By Admin</a>
									</div>
									<div class="post-comment">
										<a href="#">4 Comments</a>
									</div>
								</div>
							</div>
							<div class="entry-content">
								<p>Perspiciatis unde omnis iste natus error sit ametsan voluptatem accusantium[...] </p>
							</div>
						</div>
					</div>
				</div>
				<div class="blog-list">
					<div class="col-md-4">
						<div class="entry-cover">
							<a href="single-blog.html"><img src="{{ asset('frontend/assets/images/blog/blog-4.png')}}" alt="blog-4"/></a>
						</div>
					</div>
					<div class="col-md-8">
						<div class="blog-area">
							<div class="enetry-header">
								<div class="entry-title">
									<h3><a title="Blog Title" href="single-blog.html">Wins Logistics Company of the Year - 2014</a></h3>
								</div>
								<div class="entry-meta">
									<div class="post-date">
										<a href="#">Dec 12 2015</a>
									</div>
									<div class="byline"> 
										<a href="#">By Admin</a>
									</div>
									<div class="post-comment">
										<a href="#">4 Comments</a>
									</div>
								</div>
							</div>
							<div class="entry-content">
								<p>Perspiciatis unde omnis iste natus error sit ametsan voluptatem accusantium[...] </p>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
			<div class="section-padding"></div>
				<a href="#" class="">Go To Our Blog</a>
			</div>
		</div><!-- Container / -->
		<div class="section-padding"></div>
	</div><!-- Blog Section / -->
	
	<!-- Testimonials Section -->
	<div class="testimonials-section container-fluid no-padding">
		<div class="section-padding"></div>
		<!-- Container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header-1">
				<p>Testimonials</p>
				<h3>What Our Clients Say</h3>
			</div><!-- Section Header -->
			<div class="testimonials-box">
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-1.jpg')}}" alt="testimonials-1" /></i>
						<p>Cum sociis natoque penatibus et magnis dis parturient salos montes ascetur ridiculus. mus. Nultl dui. Fusce feugiat male suada odio. Morbi nunc odio gravida at cursus. service with robust ideas. </p>
						<h3>William Smith <span>(Ceo Of The Boston Group)</span></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-2.jpg')}}" alt="testimonials-1" /></i>
						<p>Cum sociis natoque penatibus et magnis dis parturient salos montes ascetur ridiculus. mus. Nultl dui. Fusce feugiat male suada odio. Morbi nunc odio gravida at cursus. service with robust ideas. </p>
						<h3>William Smith <span>(Ceo Of The SAS Institute)</span></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-2.jpg')}}" alt="testimonials-1" /></i>
						<p>Cum sociis natoque penatibus et magnis dis parturient salos montes ascetur ridiculus. mus. Nultl dui. Fusce feugiat male suada odio. Morbi nunc odio gravida at cursus. service with robust ideas. </p>
						<h3>William Smith <span>(Ceo Of The SAS Institute)</span></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-2.jpg')}}" alt="testimonials-1" /></i>
						<p>Cum sociis natoque penatibus et magnis dis parturient salos montes ascetur ridiculus. mus. Nultl dui. Fusce feugiat male suada odio. Morbi nunc odio gravida at cursus. service with robust ideas. </p>
						<h3>William Smith <span>(Ceo Of The SAS Institute)</span></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-2.jpg')}}" alt="testimonials-1" /></i>
						<p>Cum sociis natoque penatibus et magnis dis parturient salos montes ascetur ridiculus. mus. Nultl dui. Fusce feugiat male suada odio. Morbi nunc odio gravida at cursus. service with robust ideas. </p>
						<h3>William Smith <span>(Ceo Of The SAS Institute)</span></h3>
					</div>
				</div>
			</div>
		</div><!-- Container / -->
	</div><!-- Testimonials Section / -->
	
	<!-- Partners Section -->
	<div class="partners-section container-fluid no-padding">
		<!-- Container -->
		<div class="container">
			<div class="section-padding"></div>
			<div class="partners-logos">
				<div class="item"><a href="#" title="Logo"><img src="{{ asset('frontend/assets/images/logos/logo-1.jpg')}}" alt="Logo 1" /></a></div>
				<div class="item"><a href="#" title="Logo"><img src="{{ asset('frontend/assets/images/logos/logo-2.jpg')}}" alt="Logo 2" /></a></div>
				<div class="item"><a href="#" title="Logo"><img src="{{ asset('frontend/assets/images/logos/logo-3.jpg')}}" alt="Logo 3" /></a></div>
				<div class="item"><a href="#" title="Logo"><img src="{{ asset('frontend/assets/images/logos/logo-4.jpg')}}" alt="Logo 4" /></a></div>
				<div class="item"><a href="#" title="Logo"><img src="{{ asset('frontend/assets/images/logos/logo-5.jpg')}}" alt="Logo 5" /></a></div>
			</div>
			<div class="section-padding"></div>
		</div><!-- Container / -->
	</div><!-- PartnersSection / -->

		
	<!-- Call Out -->
	<div id="call-out" class="call-out container-fluid no-padding">
		<div class="container">
			<div class="col-md-6 col-sm-6 call">
				<i><img src="{{ asset('frontend/assets/images/icon/phone-ic-26x26.png')}}" alt="phone ic 26x26" /></i>
				<h3><span>Have any questions or want a free estimate? </span><b>(01) 800 433 633</b></h3>
			</div>
			<div class="col-md-6 col-sm-6">
				<i><img src="{{ asset('frontend/assets/images/icon/truck-ic.png')}}" alt="truck ic" /></i>
				<h3><span>Our Service Provided Areas</span> Scotla, Mastra, Lomosta, Twista</h3>
			</div>
		</div>
	</div><!-- Call Out /- -->
