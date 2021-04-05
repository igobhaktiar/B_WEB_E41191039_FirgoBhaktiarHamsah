	@extends('frontend/layouts.template')
    @section('content')
    	<!-- Photo Slider -->
	<div id="photo-slider" class="photo-slider container-fluid no-padding">
		<!-- Main Carousel -->
		<div id="main-carousel" class="carousel slide carousel-fade col-offset-2" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ asset('frontend/assets/images/slider-image/slider-1.jpg')}}" alt="slider-1"/>
					<div class="carousel-caption">
						<h1>Jasa Angkut</h1>
						<h3>dan Pindah Barang</h3>
						<a href="#" class="btn-default">Our Services</a>
						<a href="#" class="btn-default bg">Contact Us</a>
					</div>
				</div>
				<div class="item">
					<img src="{{ asset('frontend/assets/images/slider-image/slider-2.jpg')}}" alt="slider-2"/>
					<div class="carousel-caption">
						<h1>Aman</h1>
						<h3>dan Terpercaya</h3>
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
						<h3>Pikap</h3>
						<p>Mobil pikap adalah kendaraan truk ringan yang memiliki kabin tertutup dan bak terbuka di belakang untuk membawa barang bawaan atau kargo. Kendaraan ini biasanya digunakan untuk keperluan komersial atau niaga dan biasa digunakan untuk pekerjaan-pekerjaan yang memerlukan antar jemput barang atau muatan..</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-2.jpg')}}" alt="services">
						<h3>Mobil Box</h3>
						<p>Mobil box adalah kendaraan angkutan barang antaran yang biasanya digunakan untuk mengangkut barang antaran (delivery van) yang dimasukkan dalam suatu box yang terbuat dari baja ataupun dari aluminium.</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-3.jpg')}}" alt="services">
						<h3>kendaraan roda 3</h3>
						<p>Kendaraan ini juga bisa untuk mengangkut barang namun dalam jumlah kecil atau sedikit.</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-4.jpg')}}" alt="services">
						<h3>Truk</h3>
						<p>Truk adalah sebuah kendaraan beroda empat atau lebih untuk mengangkut barang, disebut juga sebagai mobil barang..</p>
						<a href="#">Learn More<i class="fa fa-caret-right"></i></a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="services-content">
						<img src="{{ asset('frontend/assets/images/services-image/service-5.jpg')}}" alt="services">
						<h3>Lorry</h3>
						<p>Sama dengan truk tetapi memiliki ukuran yang lebih besar.</p>
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
				<h3>Mengapa memilih jasa angkut kami ? </h3>
				<p>Banyak pilihan layanan kami</p>
			</div><!-- Section Header -->
			<div class="col-md-4 col-sm-6 no-left-padding">
				<img src="{{ asset('frontend/assets/images/offer-image/offer.jpg')}}" alt="offer-image">
			</div>
			<div class="col-md-8 col-sm-6">
				<div class="row">
					<div class="col-md-6">
						<div class="offers-content">
							<img src="{{ asset('frontend/assets/images/icon/icons-1.png')}}" alt="icons">
							<h3>Wilayah</h3>
							<p>Melayani jasa angkut di seluruh wilayah Jember, meski pelosok sekalipunn.</p>
						</div>
					</div>
					<div class="col-md-6">	
						<div class="offers-content">
							<img src="{{ asset('frontend/assets/images/icon/icons-3.png')}}" alt="icons">
							<h3>Keamanan</h3>
							<p>Dijamin keamanannya, barang aman sampai tujuan..</p>
						</div>
					</div>
					<div class="col-md-6">	
						<div class="offers-content">
							<img src="{{ asset('frontend/assets/images/icon/icons-2.png')}}" alt="icons">
							<h3>Kendaraan</h3>
							<p>Banyak pilihan kendaraan sesuai jumlah barang yang akan diangkut.</p>
						</div>
					</div>
					<div class="col-md-6">	
						<div class="offers-content">
							<img src="{{ asset('frontend/assets/images/icon/icons-4.png')}}" alt="icons">
							<h3>Waktu</h3>
							<p>Kami siap melayani kapan saja 24 jam</p>
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
				<h3>JasaAngkut</h3>
				<p>JasaAngkut adalah jasa penyewaan kendaraan berupa van, pickup dan truk on demand cepat dan mudah. Tersedia untuk pindahan rumah, kantor dan jasa angkut barang UKM.
					Kami bekerja sama dengan mitra pengemudi yang berpengalaman dan terbaik untuk menjamin pengiriman barang Anda sampai tujuan dengan aman.
					Pesan sekarang untuk merasakan pengalaman baru dalam melakukan pemesanan transportasi untuk pemindahan barang di Jember!.</p>
				
			</div><!-- Section Header /- -->
			<!-- Features Content -->
			<div class="features-content row">
				<div class="col-md-4 features-box">
					<i><img src="{{ asset('frontend/assets/images/icon/commitment.png')}}" alt="commitment" /><span>1</span></i>
					<div class="features-box-content">
						<h4>Daftar</h4>
						<p>Daftar dan rasakan kenyamanan dan kepuasan yang akan anda dapat</p>
					</div>
				</div>
				<div class="col-md-4 features-box">
					<i><img src="{{ asset('frontend/assets/images/icon/user.png')}}" alt="commitment" /><span>2</span></i>
					<div class="features-box-content">
						<h4>Pesan</h4>
						<p>Jangan ragu untuk pesan jasa pelayanan kami</p>
					</div>
				</div>
				<div class="col-md-4 features-box">
					<i><img src="{{ asset('frontend/assets/images/icon/like.png')}}" alt="commitment" /><span>3</span></i>
					<div class="features-box-content">
						<h4>Selesai</h4>
						<p>Berikan kritik dan saranmu untuk memperbaiki jasa kami</p>
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
				<h3>Ayo Daftar</h3>
				<p>Gunakan Aplikasi ini untuk pindahan rumah, kos, kantor dan lain-lain.</p>
			</div><!-- Section Header /- -->
			<form class="quote-form">
				<div class="form-group col-md-6">
					<input type="text" class="form-control" placeholder="Nama">
				</div>
				<div class="form-group col-md-6">
					<input type="text" class="form-control" placeholder="Username" required>
				</div>
				<div class="form-group col-md-6">
					<input type="password" class="form-control" placeholder="Password">
				</div>
				<div class="form-group col-md-6">
					<input type="password" class="form-control" placeholder="e-mail">
				</div>
				<div class="form-group col-md-6">
					<input type="password" class="form-control" placeholder="Re-Password">
				</div>
			
				<div class="form-group col-md-12">
					<textarea class="form-control" placeholder="Alamat"></textarea>
				</div>
				<div class="form-group col-md-6 col-sm-6 col-xs-12">
					<label>
						<input type="checkbox"> Menyetujui kebijakan kami
					</label>
				</div>
				<div class="form-group col-md-6 col-sm-6 col-xs-12">
					<button class="btn pull-right">Daftar<i><img src="{{ asset('frontend/assets/images/icon/mail-ic.png')}}" alt="About Ic" /></i></button>
				</div>
			</form>
			<div class="section-padding"></div>
		</div><!-- Request Quote /- -->
	</div><!-- Why We Are /- -->
		
<!-- Testimonials Section -->
<div class="testimonials-section container-fluid no-padding">
		<div class="section-padding"></div>
		<!-- Container -->
		<div class="container">
			<!-- Section Header -->
			<div class="section-header-1">
				<p>Testimoni</p>
				<h3>What Our Clients Say</h3>
			</div><!-- Section Header -->
			<div class="testimonials-box">
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-1.jpg')}}" alt="testimonials-1" /></i>
						<p>Sangat bagus, efisien dan tiba lebih cepat dari yang diharapkan. Kalian luar biasa dan kalian semua bekerja dengan sangat baik. </p>
						<h3>Aqin <span>(Ceo Of The Boston Group)</span></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-2.jpg')}}" alt="testimonials-1" /></i>
						<p>Pengemudi yang sangat membantu dan bertanggung jawab. Selalu menghubungi saya untuk konfirmasi waktu kedatangan. Saya akan merekomendasikan pada semua orang untuk menggunakan jasa ini. </p>
						<h3>Lutfi<span>(Ceo Of The SAS Institute)</span></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-3.jpg')}}" alt="testimonials-1" /></i>
						<p>Pengemudi datang tepat waktu. Barang - barang dikirim ke alamat tujuan dengan aman. Saya acungkan jempol untuk jasa yang sangat bagus.</p>
						<h3>Yulinar<span>(Ceo Of The SAS Institute)</span></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-4.jpg')}}" alt="testimonials-1" /></i>
						<p>Mantappp. </p>
						<h3>Igo <span>(Ceo Of The SAS Institute)</span></h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="testimonials-content">
						<i><img src="{{ asset('frontend/assets/images/testimonials/testimonials-5.jpg')}}" alt="testimonials-1" /></i>
						<p>Recommended. </p>
						<h3>Alex <span>(Ceo Of The SAS Institute)</span></h3>
					</div>
				</div>
			</div>
		</div><!-- Container / -->
	</div><!-- Testimonials Section / -->
	
	<!-- Call Out -->
	<div id="call-out" class="call-out container-fluid no-padding">
		<div class="container">
			<div class="col-md-6 col-sm-6 call">
				<i><img src="{{ asset('frontend/assets/images/icon/phone-ic-26x26.png')}}" alt="phone ic 26x26" /></i>
				<h3><span>Jika ada pertanyaan, Hubungi Kami </span><b>082 800 433 633</b></h3>
			</div>
			<div class="col-md-6 col-sm-6">
				<i><img src="{{ asset('frontend/assets/images/icon/truck-ic.png')}}" alt="truck ic" /></i>
				<h3><span>Our Service Provided Areas</span> Jember, Jawatimur</h3>
			</div>
		</div>
	</div><!-- Call Out /- -->
	
	
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
    @endsection