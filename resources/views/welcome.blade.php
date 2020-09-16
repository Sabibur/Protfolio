<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

	<!--- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Sabibur Rahman</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	 ================================================== -->
	<link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets/owl-carousel/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets/owl-carousel/owl.theme.css') }}">
  

	<!-- Script
	================================================== -->
	<script src="js/modernizr.js"></script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" >

</head>

<body>

  {{-- <!-- Preloader -->
	 <div id="preloader">
		<div class="loader"></div>
	 </div><!--preloader end--> --}}

	<!-- Header
	================================================== -->
	<header id="home">

		<nav id="m-nav">

			<a class="mobile-btn" href="#m-nav" title="Show navigation">Show navigation</a>
			<a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

			<ul id="nav" class="nav">
				<li class="current"><a class="smoothscroll" href="#home">Home</a></li>
				<li><a class="smoothscroll" href="#about">About Me</a></li>
				<li><a class="smoothscroll" href="#resume">Resume</a></li>
				<li><a class="smoothscroll" href="#portfolio">Portfolio</a></li>
				<!-- <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li> -->
				<li><a class="smoothscroll" href="#contact">Contact</a></li>
			</ul> <!-- end #nav -->

		</nav> <!-- end #nav-wrap -->

		<div class="row banner">
			<div class="banner-text">
				<h1 class="responsive-headline wow zoomIn"><span>{{ $headerinfo->section1 }}</span></h1>
				<h3 class="wow fadeInUp">
				  @php
				  echo $headerinfo->section2;
				  @endphp
				<br>
				@php
				echo $headerinfo->section3;
				@endphp
				<br>{{ $headerinfo->section4 }}<a class="smoothscroll" href="#about"> about me</a>.</h3>
				<hr />
			</div>
		</div>

		<p class="scrolldown">
			<a class="smoothscroll" href="#about"><i class="fa fa-angle-double-down"></i></a>
		</p>

		<div class="header-overlay"></div>

	<!-- Social Section
	================================================== -->
	<div id="social">
		<div class="row social-container">
				<ul class="social">
					  @foreach ($socials as $social)
			
					  <li><a href="{{ $social->link }}" target="_blank"><i class="{{ $social->icon }}"></i></a></li>
					  @endforeach
					  
				</ul>
		</div>

	</div> <!-- Social End -->

	</header> <!-- Header End -->

	<!-- About Section
	================================================== -->
	<section id="about">

		<div class="row bio-container">
		  <div class="twelve columns bio-inner">
			<div class="six columns bio-left">
			<div class="pp-container">

				<img class="profile-pic wow zoomIn"  src="{{ asset('assets/images/avatar.jpg') }}" alt="" />
				  <h2>{{ $aboutinfo->name }}</h2>
				  <h3>{{ $aboutinfo->title }}</h3>
				</div> <!-- Profile Picture -->
			</div>


			<div class="six columns main-col wow fadeIn">
			 <div class="arrow-left"></div>

				<p>{{ $aboutinfo->msg }}
				</p>

			 <div class="row">
				<div class="six columns download">
					 <p>
						<a href="#contact" class="button"><i class="fa fa-paper-plane"></i>Hire Me</a>

					 </p>
				</div> <!-- Download Buttons -->
		</div>

			</div> <!-- end .main-col -->
		</div>
		</div>


	</section> <!-- About Section End-->


	<!-- Resume Section
	================================================== -->
	<section id="resume">
	 <h1 class="section-title icon_icon wow fadeInDown">Resume</h1>
		<!-- Education
		=============================================== -->
		<div class="row education">

			<div class="three columns header-col">
				<h2><span>Education</span></h2>
			</div>

		<div class="nine columns main-col">
			<div class="education-timeline">
				<ul class="timeline wow fadeInUp">
				  @foreach ($eduinfos as $eduinfo)
					 <li class="timeline-event">
					 <label class="timeline-event-icon"></label>
					 <div class="timeline-event-copy">
						<p class="timeline-event-thumbnail">{{ $eduinfo->year }}</p>
						<h3>{{ $eduinfo->institute }}</h3>
						<h4>{{ $eduinfo->subject }}</h4>
						<p><strong>{{ $eduinfo->grade }}</strong><br>
							{{ $eduinfo->description }}</p>
					 </div>
				  </li>
				@endforeach

				</ul>
			</div> <!-- Education Timeline End -->
		</div> <!-- main-col end -->

		</div> <!-- End Education -->


		<!-- Work
		========================================= -->
		<div class="row work">

			<div class="three columns header-col">
				<h2><span>Employment</span></h2>
			</div>

			<div class="nine columns main-col">

			<div class="work-timeline">
				<ul class="timeline">
				  @foreach ($empinfos as $empinfo)
					 <li class="timeline-event">
					 <label class="timeline-event-icon"></label>
					 <div class="timeline-event-copy">
						<p class="timeline-event-thumbnail">{{ $empinfo->year }}</p>
						<h3>{{ $empinfo->title }}</h3>
						<h4>{{ $empinfo->position }}</h4>
						<p>{{ $empinfo->description }}</p>
					 </div>
				  </li>
				  @endforeach
				</ul>
			</div> <!-- Work Timeline End -->
			</div> <!-- main-col end -->

		</div> <!-- End Work -->

		<div class="row work">

			<div class="three columns header-col">
				<h2><span>training</span></h2>
			</div>

			<div class="nine columns main-col">

			<div class="work-timeline">
				<ul class="timeline">
					 <li class="timeline-event">
					 <label class="timeline-event-icon"></label>
					 <div class="timeline-event-copy">
						<p class="timeline-event-thumbnail">February 2019-May 2019</p>
						<h3>Web Developmnet</h3>
						<h4>Creative IT institute</h4>
						<p>some text heare. some text heare. some text heare. some text heare. some text heare. some text heare. </p>
					 </div>
				  </li>
				</ul>
			</div> <!-- Work Timeline End -->
			</div> <!-- main-col end -->

		</div> <!-- End Work -->


		<!-- Skills
		=============================================== -->
		<div class="row skill">

			<div class="three columns header-col">
				<h2><span>Skills</span></h2>
			</div>

			<div class="nine columns main-col">

				<h3>
				  My Development Progress
				</h3>
				@foreach ($skills as $skill)

				  <div class="col-12" style=" background-color:#BDC3C7;   border-radius: 3px; margin:30px; margin-left:0px;">

					  <h1 class="wow fadeInLeft"style="color:white;  background-color:#{{ $skill->bg_color }}; width:{{ $skill->width }}%; border-radius: 3px 0px 0px 3px;">
						 <span style="margin-left:30px; font-size:20px;">{{ $skill->name }}</span>

					  </h1>

				  </div><!-- end skill-bars -->
				@endforeach

		  {{-- <div class="bars">

			  <ul class="skills">
				<li><span class="bar-expand photoshop wow fadeInLeft"></span><em>Laravel</em></li>
				<li><span class="bar-expand css wow fadeInLeft"></span><em>PHP</em></li>
				<li><span class="bar-expand illustrator wow fadeInLeft"></span><em>Mysql</em></li>
				<li><span class="bar-expand wordpress wow fadeInLeft"></span><em>Wordpress</em></li>
				<li><span class="bar-expand html5 wow fadeInLeft"></span><em>HTML5</em></li>
				<li><span class="bar-expand jquery wow fadeInLeft"></span><em>Css</em></li>
			 </ul>

		  </div><!-- end skill-bars --> --}}

		</div> <!-- main-col end -->

		</div> <!-- End skills -->

		<!-- Awards
		=============================================== -->
	  <!--  <div class="row awards">

			<div class="three columns header-col">
				<h2><span>Recognition</span></h2>
			</div>

			<div class="nine columns main-col">

				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
				eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
				</p>

				<div class="award-list">

					<ul>
				 <li class="wow fadeIn">
					 <span><i class="fa fa-trophy fa-5x pull-left fa-fw"></i></span>
					 <h3>App Development Contest</h3>
					 <h5>Winner</h5>
					 <h4>Dhaka, Bangladesh</h4>
				 </li>
				 <li class="wow fadeIn">
					 <span><i class="fa fa-trophy fa-5x pull-left fa-fw"></i></span>
					 <h3>Best Front-End Developers Award</h3>
					 <h5>Top Front-End Developer</h5>
					 <h4>San Fransisco, USA</h4>
				 </li>
				 <li class="wow fadeIn">
					 <span><i class="fa fa-trophy fa-5x pull-left fa-fw"></i></span>
					 <h3>Awesome UI/UX Designers Award</h3>
					 <h5>Best UI/UX Designer</h5>
					 <h4>New York, USA</h4>
				 </li>
						<li class="wow fadeIn">
					 <span><i class="fa fa-microphone fa-5x pull-left fa-fw"></i></span>
					 <h3>UX Conference</h3>
					 <h5>Speaker</h5>
					 <h4>Dhaka, Bangladesh</h4>
				 </li>

					</ul>

				</div>

			</div>

		</div> -->

	</section> <!-- Resume Section End-->


	<!-- Portfolio Section
	================================================== -->
	<section id="portfolio">

		<div class="row">

			<div class="twelve columns collapsed">

				<h1 class="section-title wow fadeInDown">Some of My Works</h1>


				<!-- portfolio-wrapper -->
				<div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf wow fadeIn">

				  @foreach ($protfolios as $protfolio)
					<div class="columns portfolio-item">
						<div class="item-wrap">


							<a href="#modal-{{ $protfolio->id }}" title="">
								<img alt="" src="{{ asset('protfolio/')}}/{{ $protfolio->image }} ">
								<div class="overlay">
									<div class="portfolio-item-meta">
			 							<h5>{{ $protfolio->title }}</h5>
										<p>{{ $protfolio->name }}</p>
			 						</div>
								</div>
								<div class="link-icon"><i class="fa fa-plus fa-2x"></i></div>
							</a>

						</div>
			 		</div>  <!-- item end -->

				  @endforeach
				</div> <!-- portfolio-wrapper end -->

			</div> <!-- twelve columns end -->


			<!-- Modal Popup
			=============================================== -->
		  @foreach ($protfolios as $protfolio)
			<div id="modal-{{ $protfolio->id }}" class="popup-modal mfp-hide">

				<img class="scale-with-grid" src="{{ asset('protfolio/')}}/{{ $protfolio->image }} " alt="" />

				<div class="description-box">
					<h4>{{ $protfolio->title }}</h4>
					<p>{{ $protfolio->description }}</p>
					<span class="categories"><i class="fa fa-tag"></i>{{ $protfolio->subject }}</span>
				</div>

				<div class="link-box">
					<a href="{{ $protfolio->link }}" target="_blank" class="button">Live Demo</a>
					<a class="popup-modal-dismiss button btn-close">Close</a>
				</div>

			</div><!-- modal-01 End -->
				@endforeach
		</div> <!-- row End -->

	</section> <!-- Portfolio Section End-->


	<!-- Call-To-Action Section
	================================================== -->
	<section id="call-to-action">

		<div class="row">

			<div class="two columns header-col">
				<h1 class="wow fadeInLeft">
				  <span><i class="fa fa-paper-plane fa-5x pull-left fa-fw"></i></span>
				</h1>
			</div>

			<div class="seven columns">
				<h2 class="wow zoomIn">Hire me for your awesome project</h2>
				<p>I am available for Freelance projects that depends on your project value. Hire me and get your project done!</p>

			</div>

			<div class="three columns action wow fadeIn">

				<a href="#contact" class="button">Hire me Now</a>

			</div>

		</div>

	</section> <!-- Call-To-Action Section End-->


	<!-- Testimonials Section
	================================================== -->
	<!-- <section id="testimonials">
		<div class="text-container">
			<div class="row">
			 <div class="twelve columns flex-container">
				<h1 class="section-title wow fadeInDown">Client Testimonials</h1>

				<div id="testimonial-slides" class="owl-carousel">
				  <div>
					 <blockquote><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
					  <cite> Jonathan Doe</cite>
				  </blockquote>
				  </div>

				  <div>
					 <blockquote><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
					  <cite> Jane Doe</cite>
				  </blockquote>
				  </div>

				  <div>
					 <blockquote><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
					  <cite> John Doe</cite>
				  </blockquote>
				  </div>

				</div>

			 </div>

			</div>

		 </div>
	</section> -->


	<!-- Contact Section
	================================================== -->
	<section id="contact">

		<div class="row section-head">
			 <div class="twelve columns">
				  <h1 class="section-title wow fadeInDown">Get In Touch</h1>
				  <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, voluptatem quia voluptas sit aspernatur aut odit aut fugit. </p>
			 </div>
		</div> <!-- Section head -->

		<div class="row">
			 <div class="five columns">
				 <div class="form-container wow fadeIn">
					<!-- form -->

					<form action="{{ url('message/post') }}" method="post" id="contactForm" name="contactForm">
					  @csrf
						  	<fieldset>

								<div>
									 @if ($errors->has('name'))
										<span style="font-size:15px; background-color:#FF0000;
											border-radius:5px; padding: 5px; margin-left: 20px; color: white;  text-align:center;">
															{{ $errors->first('name') }}
											</span>
										@endif
									<input type="text" placeholder="Name" value="" size="35" id="contactName" name="name">
									
								</div>

								<div>
									@if ($errors->has('email'))
										<span style="font-size:15px; background-color:#FF0000;
											border-radius:5px; padding: 5px; margin-left: 20px; color: white;  text-align:center;">
															{{ $errors->first('email') }}
											</span>
										@endif
									<input type="text" placeholder="Email" value="" size="35" id="contactEmail" name="email">
								</div>

								<div>
									@if ($errors->has('subject'))
										<span style="font-size:15px; background-color:#FF0000;
											border-radius:5px; padding: 5px; margin-left: 20px; color: white;  text-align:center;">
															{{ $errors->first('subject') }}
											</span>
										@endif
									<input type="text" placeholder="Subject" value="" size="35" id="contactSubject" name="subject">
								</div>

								<div>
									@if ($errors->has('message'))
										<span style="font-size:15px; background-color:#FF0000;
											border-radius:5px; padding: 5px; margin-left: 20px; color: white;  text-align:center;">
															{{ $errors->first('message') }}
											</span>
										@endif
									<textarea cols="5" rows="5" placeholder="Message" id="contactMessage" name="message"></textarea>
								</div>

								<div>
								 <!-- contact-warning -->

									<button type="submit" id="submit_button" style="width:200px; margin-left: 70px; background-color: black; border: 1px solid white;">Submit</button>


							 </fieldset>
						  </form> <!-- Form End -->
								 <!-- contact-success -->
							 
								 @if (session('status'))
									<div style="font-size:20px; margin:10px; background-color:#FFA500;
									border-radius:5px; padding: 5px; color: white;  text-align:center;">
									  {{ session('status') }}
									</div>
								 @endif
				</div>  <!-- Form Container End -->

			 </div>

		<div class="seven columns">
<!--         <h1><span>Find me on Google Map</span></h1> -->
			<!-- Start Google Map -->
			<div >
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8813680450667!2d90.38436561498138!3d23.751609484588847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a528bdda35%3A0x997ae754ff9a4c7!2s72+Bir+Uttam+Kazi+Nuruzzaman+Rd%2C+Dhaka+1215!5e0!3m2!1sen!2sbd!4v1555710235139!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<!-- End -->
		</div> <!-- Row ends-->


		</div> <!-- Row ends-->



	</section> <!-- Contact Section End-->


	<!-- footer
	================================================== -->
	<footer>

		<div class="row">

			<div class="twelve columns">

				<ul class="social-links">
					 @foreach ($socials as $social)
			
					  <li><a href="{{ $social->link }}" target="_blank"><i class="{{ $social->icon }}"></i></a></li>
					  @endforeach
				</ul>

				<ul class="copyright">
					<li>Sabibur Rahman &copy; Copyright 2020, All Rights Reserved</li>

				</ul>

			</div>

			<div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="fa fa-chevron-up"></i></a></div>

		</div>

	</footer> <!-- Footer End-->

	<!-- Java Script
	================================================== -->


	<script src="{{ asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;AMP;sensor=false"></script>
	<script src="{{ asset('assets/js/gmaps.js')}}"></script>
	<script src="{{ asset('assets/assets/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('assets/js/waypoints.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.fittext.js')}}"></script>
	<script src="{{ asset('assets/js/magnific-popup.js')}}"></script>
	<script src="{{ asset('assets/js/wow.min.js')}}"></script>
	<script src="{{ asset('assets/js/jquery.nicescroll.min.js')}}"></script>
	<script src="{{ asset('assets/js/script.js')}}"></script>
	

</body>


</html>
