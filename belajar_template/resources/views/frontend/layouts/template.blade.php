<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Express</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="images//favicon.ico" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/assets/images//apple-touch-icon-114x114-precomposed.png')}}">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/assets/images//apple-touch-icon-72x72-precomposed.png')}}">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/assets/images//apple-touch-icon-57x57-precomposed.pn')}}g">	
	
	<!-- Library - Loader CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/libraries/loader/loaders.min.css')}}">

	<!-- Library - Google Font Familys -->
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,600,300,200,100' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	
	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/libraries/bootstrap/bootstrap.min.css')}}">
	
	<!-- Font Icons -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/libraries/fonts/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/libraries/fonts/elegant-icons.css')}}">

	<!-- Library - OWL Carousel V.2.0 beta -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/libraries/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/libraries/owl-carousel/owl.theme.css')}}">

	<!-- Library - FlexSlider v2.5.0 -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/libraries/flexslider/flexslider.css')}}">

	<!-- Library - Animate CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/libraries/animate/animate.min.css')}}">

	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/navigation-menu.css')}}">

	<!-- Custom - Theme CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/shortcodes.css')}}">

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- LOADER -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-clip-rotate">
				<div></div>
		   </div>
		</div>
	</div><!-- Loader /- -->
	
	<a id="top"></a>	
	<!-- Header -->
@include('frontend/layouts.navbar')	
	<!-- Menu Block -->
@yield('content')	
	<!-- Footer Main -->
	<footer class="footer-main">
		<!-- Container -->
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="detail-box">
						<i><img src="{{ asset('frontend/assets/images/footer-logo.png')}}" alt="Footer Logo" /></i>
						<p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quasoa molestias excepturi sintal  occaecati cupiditate non provident similique sunt.</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<aside class="widget widget-links">
						<h3 class="widget-title">Quick Links</h3>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About Company</a></li>
							<li><a href="#">Our Services</a></li>
							<li><a href="#">Service Location</a></li>
							<li><a href="#">Recent News</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-md-3 col-sm-6">
					<aside class="widget widget-services">
						<h3 class="widget-title">Service Provided</h3>
						<ul>
							<li><a href="#">Ground Transport</a></li>
							<li><a href="#">Logistic Services</a></li>
							<li><a href="#">Trucking Services</a></li>
							<li><a href="#">Warehousing</a></li>
							<li><a href="#">Air-Freight-forwarding</a></li>
							<li><a href="#">Ocean Cargo Roundable</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-md-3 col-sm-6">
					<aside class="widget widget-contacts">
						<h3 class="widget-title">Contact Info</h3>
						<ul>
							<li><img src="{{ asset('frontend/assets/images/icon/address-ic.png')}}" alt="Address" /> Address : 44 New Design Street, Melbourne 005</li>
							<li><img src="{{ asset('frontend/assets/images/icon/phone-ic.png')}}" alt="Phone" /> Phone : (01) 800 433 633</li>
							<li><img src="{{ asset('frontend/assets/images/icon/mail-ic.png')}}" alt="Mail" /><a href="mailto:info@example.com"> Email : info@example.com</a></li>
							<li><img src="{{ asset('frontend/assets/images/icon/fax-ic.png')}}" alt="Fax" />Fax : (01) 800 433 777</li>
							<li><img src="{{ asset('frontend/assets/images/icon/watch-ic.png')}}" alt="Watch" />Opening Hours: Mon - Sat 9am to 6pm</li>
						</ul>
					</aside>
				</div>
			</div>
		</div><!-- Container /- -->
		<div class="bottom-footer container-fluid no-padding">
			<p class="copyright">&copy; 2016 Express Logitics. All Rights Reserved.</p>
		</div>
	</footer><!-- Footer Main -->
	
	<!-- JQuery v1.11.3 -->
	<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>

	<!-- Library - Modernizer -->
	<script src="{{ asset('frontend/assets/libraries/modernizr/modernizr.js')}}"></script>
	
	<!-- Library - Bootstrap v3.3.5 -->
	<script src="{{ asset('frontend/assets/libraries/bootstrap/bootstrap.min.js')}}"></script><!-- Bootstrap JS File v3.3.5 -->

	<!-- jQuery Easing v1.3 -->
	<script src="{{ asset('frontend/assets/js/jquery.easing.min.js')}}"></script>

	<!-- Library - jQuery.appear -->
	<script src="{{ asset('frontend/assets/libraries/appear/jquery.appear.js')}}"></script>
	
	<!-- Library - OWL Carousel V.2.0 beta -->
	<script src="{{ asset('frontend/assets/libraries/owl-carousel/owl.carousel.min.js')}}"></script>
	
	<!-- Library - FlexSlider v2.5.0 -->	
	<script defer src="{{ asset('frontend/assets/libraries/flexslider/jquery.flexslider.js')}}"></script>
	
	<!-- Library - Magnific Popup - v1.0.0 -->
	<script src="{{ asset('frontend/assets/libraries/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

	<!-- Library - Theme JS -->
	<script src="{{ asset('frontend/assets/js/functions.js')}}"></script>
</body>
</html>