<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>OnNext - One Page Parallax Template Bootstrap 4</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="./frontendassets/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./frontendassets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./frontendassets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="./frontendassets/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="./frontendassets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./frontendassets/css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
<<<<<<< HEAD
			<img class="img-fluid" src="..\assets\img\logo\brainstarlogo-removebg-preview (1).png" alt="" width="300px" height="500" />
=======
			<img class="img-fluid" src="./frontendassets/images/logo.png" alt="" />
>>>>>>> remoterepo/main
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
<<<<<<< HEAD
						@auth('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard')}}">{{ __('Dashboard') }}</a>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('admin.logout') }}"
               onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('admin.register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@endauth

			<li class="nav-item">
=======
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
						<li class="nav-item">
>>>>>>> remoterepo/main
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#blog">Blog</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Our Team</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#pricing">Pricing</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contect Us</a>
            </li>
                    </ul>
        </div>
      </div>
    </nav>
	
	<section id="home" class="main-banner parallaxie" style="background: url('./frontendassets/uploads/banner-01.jpg')">
		<div class="heading">
<<<<<<< HEAD
			<h1>Welcome to Brain Star Technologies</h1>			
			<h3 class="cd-headline clip is-full-width">
				<span>Brain star Technologies Deals  with </span>
=======
			<h1>Welcome to OnNext</h1>			
			<h3 class="cd-headline clip is-full-width">
				<span>Lorem Ipsum Dolor Sit Amet </span>
>>>>>>> remoterepo/main
				<span class="cd-words-wrapper">
					<b class="is-visible">Web Developer</b>
					<b>Web Design</b>
					<b>Creative Design</b>
					<b>Graphic Design</b>
				</span>
				<div class="btn-ber">
<<<<<<< HEAD
					<a class="get_btn hvr-bounce-to-top" href="https://brainstartechnologies.com/">Get started</a>
=======
					<a class="get_btn hvr-bounce-to-top" href="#">Get started</a>
>>>>>>> remoterepo/main
					<a class="learn_btn hvr-bounce-to-top" href="#">Learn More</a>
				</div>
			</h3>
		</div>
	</section>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
<<<<<<< HEAD
                        <h2>Welcome to BrainStar</h2>
=======
                        <h2>Welcome to OnNext</h2>
>>>>>>> remoterepo/main
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>
						<p>Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.</p>

                        <a href="#" class="sim-btn hvr-bounce-to-top"><span>Contact Us</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="./frontendassets/./frontendassets/uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Services</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-seo"></i>
						</div>
						<h2>Web Development</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-development"></i>
						</div>
						<h2>Responsive Design</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-process"></i>
						</div>
						<h2>Creative Design</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-discuss-issue"></i>
						</div>
						<h2>Support</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea"></i>
						</div>
						<h2>Web Idea</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
				<div class="col-md-4">
                    <div class="services-inner-box">
						<div class="ser-icon">
							<i class="flaticon-idea-1"></i>
						</div>
						<h2>Graphic Design</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	<div id="portfolio" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Portfolio</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->
			
			<div class="gallery-menu row">
				<div class="col-md-12">
					<div class="button-group filter-button-group text-center">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".gal_a">Web Development</button>
						<button data-filter=".gal_b">Creative Design</button>
						<button data-filter=".gal_c">Graphic Design</button>
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="/./frontendassets/uploads/gallery_img-01.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="/./frontendassets/uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="./frontendassets/uploads/gallery_img-02.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="./frontendassets/uploads/gallery_img-02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="./frontendassets/uploads/gallery_img-03.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="./frontendassets/uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="./frontendassets/uploads/gallery_img-04.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="./frontendassets/uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
					<div class="gallery-single fix">
						<img src="./frontendassets/uploads/gallery_img-05.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="./frontendassets/uploads/gallery_img-05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_a">
					<div class="gallery-single fix">
						<img src="./frontendassets/uploads/gallery_img-06.jpg" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<a href="./frontendassets/uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	
	<div id="blog" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Blog</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->
			
			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="./frontendassets/uploads/blog-01.jpg" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="./frontendassets/uploads/blog-02.jpg" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="./frontendassets/uploads/blog-03.jpg" class="img-fluid" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Quisque auctor lectus interdum nisl accumsan venenatis.</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div id="team" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<h3>Our Team</h3>
				<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
			</div><!-- end title -->
		
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="./frontendassets/uploads/img-2.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Kristiana</h3>
							<span class="post">Web Designer</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="./frontendassets/uploads/img-4.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Miranda joy</h3>
							<span class="post">Web Designer</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="./frontendassets/uploads/img-1.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Williamson</h3>
							<span class="post">Web Developer</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6">
					<div class="our-team">
						<div class="pic">
							<img src="./frontendassets/uploads/img-3.jpg">
						</div>
						<div class="team-content">
							<h3 class="title">Steve Thomas</h3>
							<span class="post">Web Developer</span>
							<ul class="social">
								<li><a href="#" class="fa fa-facebook"></a></li>
								<li><a href="#" class="fa fa-twitter"></a></li>
								<li><a href="#" class="fa fa-google-plus"></a></li>
								<li><a href="#" class="fa fa-skype"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="pricing" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Pricing</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->
			
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$10</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Standard</h3>
                            <ul class="pricing-content">
                                <li><b>50GB</b> Disk Space</li>
                                <li><b>50</b> Email Accounts</li>
                                <li><b>50GB</b> Bandwidth</li>
                                <li><b>10</b> Subdomains</li>
                                <li><b>15</b> Domains</li>
                            </ul>
                            <a href="#" class="sim-btn hvr-bounce-to-top pricingTable-signup">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable blue">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$20</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Business</h3>
                            <ul class="pricing-content">
                                <li><b>60GB</b> Disk Space</li>
                                <li><b>60</b> Email Accounts</li>
                                <li><b>60GB</b> Bandwidth</li>
                                <li><b>15</b> Subdomains</li>
                                <li><b>20</b> Domains</li>
                            </ul>
                            <a href="#" class="sim-btn hvr-bounce-to-top pricingTable-signup">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable red">
                        <svg x="0" y="0" viewBox="0 0 360 220">
                            <g>
                                <path fill="#28a9e2" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                    c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                    s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                    L0.732,193.75z"></path>
                            </g>
                            <text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="78.4489">$30</text>
                            <text transform="matrix(0.9566 0 0 1 197.3096 83.9121)" fill="#fff" font-size="29.0829">.99</text>
                            <text transform="matrix(1 0 0 1 233.9629 115.5303)" fill="#fff" font-size="15.4128">/Month</text>
                        </svg>
                        <div class="pricing-content">
                            <h3 class="title">Premium</h3>
                            <ul class="pricing-content">
                                <li><b>70GB</b> Disk Space</li>
                                <li><b>70</b> Email Accounts</li>
                                <li><b>70GB</b> Bandwidth</li>
                                <li><b>20</b> Subdomains</li>
                                <li><b>25</b> Domains</li>
                            </ul>
                            <a href="#" class="sim-btn hvr-bounce-to-top pricingTable-signup">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>

    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" type="tel" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit">Send Message</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
				<a href="#"><img src="./frontendassets/images/logo.png" alt="" /></a>
                <div class="footer-center">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">OnNext</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="./frontendassets/js/all.js"></script>
	<!-- Camera Slider -->
	<script src="./frontendassets/js/jquery.mobile.customized.min.js"></script>
	<script src="./frontendassets/js/jquery.easing.1.3.js"></script> 
	<script src="./frontendassets/js/parallaxie.js"></script>
	<script src="./frontendassets/js/headline.js"></script>
	<!-- Contact form JavaScript -->
    <script src="./frontendassets/js/jqBootstrapValidation.js"></script>
    <script src="./frontendassets/js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="./frontendassets/js/custom.js"></script>
    <script src="./frontendassets/js/jquery.vide.js"></script>

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> remoterepo/main
