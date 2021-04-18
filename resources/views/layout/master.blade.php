<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@yield('title'){{ config('app.name') }}</title>

		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,400i,600,700' rel='stylesheet'>

		<!-- Css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">
		<link rel="stylesheet" href="{{ asset('css/sliders.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	</head>
	<body class="relative">
		<!-- Preloader -->
		<div class="loader-mask">
			<div class="loader">
				<div></div>
				<div></div>
			</div>
		</div>
		<main class="main-wrapper">

			<header class="nav-type-1">
	
				<!-- Fullscreen search -->
				<div class="search-wrap">
					<div class="search-inner">
						<div class="search-cell">
							<form method="get">
								<div class="search-field-holder">
									<input type="search" class="form-control main-search-input" placeholder="Search for">
									<i class="ui-close search-close" id="search-close"></i>
								</div>            
							</form>
						</div>
					</div>        
				</div> <!-- end fullscreen search -->
	
				<!-- Top Bar -->
				<div class="top-bar hidden-xs">
					<div class="container">
						<div class="top-bar-links flex-parent">
							<ul class="top-bar-currency-language">
								<li>
									Currency: <a href="#">BRL<i class="fa fa-angle-down"></i></a>
									<div class="currency-dropdown">
										<ul>
											<li><a href="#">BRL</a></li>
											<li><a href="#">USD</a></li>
											<li><a href="#">EUR</a></li>
										</ul>
									</div>
								</li>
								<li class="language">
									Language: <a href="#">PT-BR<i class="fa fa-angle-down"></i></a>
									<div class="language-dropdown">
										<ul>
											<li><a href="#">Portuguese</a></li>
											<li><a href="#">English</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">German</a></li>
											<li><a href="#">Chinese</a></li>
										</ul>
									</div>
								</li>
							</ul>
	
							<ul class="top-bar-acc">
								<li class="top-bar-link"><a href="#">Meus Pedidos</a></li>
								<li class="top-bar-link"><a href="#">Newsletter</a></li>
								<li class="top-bar-link"><a href="#">Login</a></li>                 
							</ul>
	
						</div>
					</div>
				</div> <!-- end top bar -->
	
				<nav class="navbar navbar-static-top">
					<div class="navigation" id="sticky-nav">
						<div class="container relative">
	
							<div class="row flex-parent">
	
								<div class="navbar-header flex-child">
									<!-- Logo -->
									<div class="logo-container">
										<div class="logo-wrap">
											<a href="index.html">
												<img class="logo-dark" src="{{ asset('img/logo_dark.png') }}" alt="logo">
											</a>
										</div>
									</div>
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<!-- Mobile cart -->
									<div class="nav-cart mobile-cart hidden-lg hidden-md">
										<div class="nav-cart-outer">
											<div class="nav-cart-inner">
												<a href="#" class="nav-cart-icon">
													<span class="nav-cart-badge">2</span>
												</a>
											</div>
										</div>
									</div>
								</div> <!-- end navbar-header -->
	
								<div class="nav-wrap flex-child">
									<div class="collapse navbar-collapse text-center" id="navbar-collapse">
										
										<ul class="nav navbar-nav">
	
											<li>
												<a href="{{ url('/') }}">Home</a>
											</li>
	
											<li class="dropdown">
												<a href="#">Sobre-Nós</a>
												<i class="fa fa-angle-down dropdown-trigger"></i>
												<ul class="dropdown-menu">
													<li><a href="faq.html">F.A.Q</a></li>
													<li><a href="faq.html">F.A.Q</a></li>
												</ul>
											</li>

											<li class="dropdown">
												<a href="#">Pages</a>
												<i class="fa fa-angle-down dropdown-trigger"></i>
												<ul class="dropdown-menu">
													<li><a href="about-us.html">About Us</a></li>
													<li><a href="contact.html">Contact</a></li>
													<li><a href="faq.html">F.A.Q</a></li>
													<li><a href="404.html">404</a></li>
												</ul>
											</li>
	
											<li class="dropdown">
												<a href="#">Blog</a>
												<i class="fa fa-angle-down dropdown-trigger"></i>
												<ul class="dropdown-menu">
													<li><a href="{{ route('blog.index') }}">Veja nossos postes</a></li>
													<li><a href="blog-standard.html">Standard</a></li>
													<li><a href="blog-single.html">Single Post</a></li>
												</ul>
											</li>
	
											<li class="dropdown">
												<a href="#">Shop</a>
												<i class="fa fa-angle-down dropdown-trigger"></i>
												<ul class="dropdown-menu megamenu-wide">
													<li>
														<div class="megamenu-wrap container">
															<div class="row">
	
																<div class="col-md-3 megamenu-item">
																	<ul class="menu-list">
																		<li>
																			<span>Shop Pages</span>
																		</li>
																		<li><a href="shop-catalog.html">Catalog no Sidebar</a></li>
																		<li><a href="shop-catalog-sidebar.html">Catalog With Sidebar</a></li>
																		<li><a href="shop-single.html">Single Product</a></li>
																		<li><a href="shop-cart.html">Cart</a></li>
																		<li><a href="shop-checkout.html">Checkout</a></li>
																	</ul>
																</div>
	
																<div class="col-md-3 megamenu-item">
																	<ul class="menu-list">
																		<li>
																			<span>For Her</span>
																		</li>
																		<li><a href="catalog.html">Dresses</a></li>
																		<li><a href="catalog.html">Watches</a></li>
																		<li><a href="catalog.html">Belts</a></li>
																		<li><a href="catalog.html">Jackets</a></li>
																		<li><a href="catalog.html">Scarfs</a></li>
																	</ul>
																</div>
	
																<div class="col-md-3 megamenu-item">
																	<ul class="menu-list">
																		<li>
																			<span>Accessories</span>
																		</li>
																		<li><a href="catalog.html">Wallets</a></li>
																		<li><a href="catalog.html">Watches</a></li>
																		<li><a href="catalog.html">Belts</a></li>
																		<li><a href="catalog.html">Shoes</a></li>
																		<li><a href="catalog.html">Scarfs</a></li>
																	</ul>
																</div>
	
																<div class="col-md-3 megamenu-item">
																	<ul class="menu-list">
																		<li>
																			<span>For Him</span>
																		</li>
																		<li><a href="catalog.html">T-shirts</a></li>
																		<li><a href="catalog.html">Watches</a></li>
																		<li><a href="catalog.html">Belts</a></li>
																		<li><a href="catalog.html">Jeans</a></li>
																		<li><a href="catalog.html">Scarfs</a></li>
																	</ul>
																</div>
	
															</div> 
														</div>
													</li>
												</ul>
											</li>
	
											<li class="dropdown">
												<a href="#">Elements</a>
												<i class="fa fa-angle-down dropdown-trigger"></i>
												<ul class="dropdown-menu">
													<li><a href="shortcodes.html">Shortcodes</a></li>
													<li><a href="typography.html">Typography</a></li>
												</ul>
											</li> <!-- end elements -->
	
											<li class="mobile-links hidden-lg hidden-md">
												<a href="#">My Account</a>
											</li>
				
											<!-- Mobile search -->
											<li id="mobile-search" class="hidden-lg hidden-md">
												<form method="get" class="mobile-search">
													<input type="search" class="form-control" placeholder="Search...">
													<button type="submit" class="search-button">
														<i class="fa fa-search"></i>
													</button>
												</form>
											</li>
	
										</ul> <!-- end menu -->
									</div> <!-- end collapse -->
								</div> <!-- end col -->
	
								<div class="flex-child flex-right nav-right hidden-sm hidden-xs">
									<ul>
										<li class="nav-register">
											<a href="#">My Account</a>
										</li>
										<li class="nav-search-wrap style-2 hidden-sm hidden-xs">
											<a href="#" class="nav-search search-trigger">
												<i class="fa fa-search"></i>
											</a>
										</li>
										<li class="nav-cart">
											<div class="nav-cart-outer">
												<div class="nav-cart-inner">
													<a href="#" class="nav-cart-icon">
														0
													</a>
												</div>
											</div>
											<div class="nav-cart-container">
												<div class="nav-cart-items">
	
													<div class="nav-cart-item clearfix">
														<div class="nav-cart-img">
															<a href="#">
																<img src="img/shop/shop_item_1.jpg" alt="">
															</a>
														</div>
														<div class="nav-cart-title">
															<a href="#">
																Ladies Bag
															</a>
															<div class="nav-cart-price">
																<span>1 x</span>
																<span>1250.00</span>
															</div>
														</div>
														<div class="nav-cart-remove">
															<a href="#" class="remove"><i class="ui-close"></i></a>
														</div>
													</div>
	
													<div class="nav-cart-item clearfix">
														<div class="nav-cart-img">
															<a href="#">
																<img src="img/shop/shop_item_2.jpg" alt="">
															</a>
														</div>
														<div class="nav-cart-title">
															<a href="#">
																Sequin Suit longer title
															</a>
															<div class="nav-cart-price">
																<span>1 x</span>
																<span>1250.00</span>
															</div>
														</div>
														<div class="nav-cart-remove">
															<a href="#" class="remove"><i class="ui-close"></i></a>
														</div>
													</div>
	
												</div> <!-- end cart items -->
	
												<div class="nav-cart-summary">
													<span>Cart Subtotal</span>
													<span class="total-price">$1799.00</span>
												</div>
	
												<div class="nav-cart-actions mt-20">
													<a href="shop-cart.html" class="btn btn-md btn-dark"><span>View Cart</span></a>
													<a href="shop-checkout.html" class="btn btn-md btn-color mt-10"><span>Proceed to Checkout</span></a>
												</div>
											</div>
										</li>
									</ul>
								</div>
						
							</div> <!-- end row -->
						</div> <!-- end container -->
					</div> <!-- end navigation -->
				</nav> <!-- end navbar -->
			</header>

			@yield('page-title')			
	
			<div class="content-wrapper oh">

				@section('content-page')
				
				<!-- Hero Slider -->
				<section class="hero-wrap text-center relative">
					<div id="owl-hero" class="owl-carousel owl-theme light-arrows slider-animated">
						<div class="hero-slide overlay" style="background-image:url(img/hero/1.jpg)">
							<div class="container">
								<div class="hero-holder">
									<div class="hero-message">
										<h1 class="hero-title nocaps">Great Fashion 2017</h1>
										<h2 class="hero-subtitle lines">New Arrivals Collection</h2>
										<div class="buttons-holder">
											<a href="#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="hero-slide overlay" style="background-image:url(img/hero/2.jpg)">
							<div class="container">
								<div class="hero-holder">
									<div class="hero-message">
										<h1 class="hero-title nocaps">Exclusive Products</h1>
										<h2 class="hero-subtitle lines">Get awesome items only in Zenna online shop</h2>
										<div class="buttons-holder">
											<a href="#" class="btn btn-lg btn-color"><span>Buy it Now</span></a>
											<a href="#" class="btn btn-lg btn-transparent"><span>Learn More</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="hero-slide overlay" style="background-image:url(img/hero/3.jpg)">
							<div class="container">
								<div class="hero-holder">
									<div class="hero-message">
										<h1 class="hero-title nocaps">Enjoy Online Shopping</h1>
										<h2 class="hero-subtitle lines">Zenna is perfectly responsive theme</h2>
										<div class="buttons-holder">
											<a href="#" class="btn btn-lg btn-transparent"><span>Shop Now</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> <!-- end hero slider -->
	
				<!-- Promo Banners -->
				<section class="section-wrap promo-banners pb-30">
					<div class="container">
						<div class="row">
	
							<div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
								<a href="#">
									<img src="img/shop/collection_1.jpg" alt="">
									<div class="overlay"></div>
									<div class="promo-inner valign">
										<h2>for her</h2>
										<span>Best Selling Deals</span>
									</div>
								</a>                        
							</div>
	
							<div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
								<a href="#">
									<img src="img/shop/collection_2.jpg" alt="">
									<div class="overlay"></div>
									<div class="promo-inner valign">
										<h2>accessories</h2>
										<span>Hot Trends</span>
									</div>
								</a>                        
							</div>
	
							<div class="col-xs-4 col-xxs-12 mb-30 promo-banner">
								<a href="#">
									<img src="img/shop/collection_3.jpg" alt="">
									<div class="overlay"></div>
									<div class="promo-inner valign">
										<h2>for him</h2>
										<span>New Collection</span>
									</div>
								</a>                        
							</div>
							
						</div>
					</div>
				</section> <!-- end promo banners -->
	
	
				<!-- Trendy Products -->
				<section class="section-wrap-sm new-arrivals pb-50">
					<div class="container">
	
						<div class="row heading-row">
							<div class="col-md-12 text-center">
								<span class="subheading">Hot items of this year</span>
								<h2 class="heading bottom-line">
									trendy products
								</h2>
							</div>
						</div>
	
						<div class="row items-grid">              
	
							<div class="col-md-3 col-xs-6">
								<div class="product-item hover-trigger">
									<div class="product-img">
										<a href="shop-single.html">
											<img src="img/shop/shop_item_1.jpg" alt="">
										</a>
										<div class="product-label">
											<span class="sale">sale</span>
										</div>
										<div class="hover-overlay">                    
											<div class="product-actions">
												<a href="#" class="product-add-to-wishlist">
													<i class="fa fa-heart"></i>
												</a>
											</div>
											<div class="product-details valign">
												<span class="category">
													<a href="catalogue-grid.html">Women</a>
												</span>
												<h3 class="product-title">
													<a href="shop-single.html">Drawstring Dress</a>
												</h3>
												<span class="price">
													<del>
														<span>$730.00</span>
													</del>
													<ins>
														<span class="amount">$399.99</span>
													</ins>
												</span>
												<div class="btn-quickview">
													<a href="#" class="btn btn-md btn-color">
													<span>Quickview</span>
												</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="product-item hover-trigger">
									<div class="product-img">
										<a href="shop-single.html">
											<img src="img/shop/shop_item_2.jpg" alt="">
										</a>
										<div class="hover-overlay">                    
											<div class="product-actions">
												<a href="#" class="product-add-to-wishlist">
													<i class="fa fa-heart"></i>
												</a>
											</div>
											<div class="product-details valign">
												<span class="category">
													<a href="catalogue-grid.html">Accessories</a>
												</span>
												<h3 class="product-title">
													<a href="shop-single.html">Mesh Sandal</a>
												</h3>
												<span class="price">
													<ins>
														<span class="amount">$190.00</span>
													</ins>
												</span>
												<div class="btn-quickview">
													<a href="#" class="btn btn-md btn-color">
													<span>Quickview</span>
												</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="product-item hover-trigger">
									<div class="product-img">
										<a href="shop-single.html">
											<img src="img/shop/shop_item_3.jpg" alt="">
										</a>
										<div class="hover-overlay">                    
											<div class="product-actions">
												<a href="#" class="product-add-to-wishlist">
													<i class="fa fa-heart"></i>
												</a>
											</div>
											<div class="product-details valign">
												<span class="category">
													<a href="catalogue-grid.html">Women</a>
												</span>
												<h3 class="product-title">
													<a href="shop-single.html">Tribal Grey Blazer</a>
												</h3>
												<span class="price">
													<ins>
														<span class="amount">$330.00</span>
													</ins>
												</span>
												<div class="btn-quickview">
													<a href="#" class="btn btn-md btn-color">
													<span>Quickview</span>
												</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="product-item hover-trigger">
									<div class="product-img">
										<a href="shop-single.html">
											<img src="img/shop/shop_item_4.jpg" alt="">
										</a>
										<div class="hover-overlay">                    
											<div class="product-actions">
												<a href="#" class="product-add-to-wishlist">
													<i class="fa fa-heart"></i>
												</a>
											</div>
											<div class="product-details valign">
												<span class="category">
													<a href="catalogue-grid.html">Men</a>
												</span>
												<h3 class="product-title">
													<a href="shop-single.html">Sweater w/ Colar</a>
												</h3>
												<span class="price">
													<ins>
														<span class="amount">$299.00</span>
													</ins>
												</span>
												<div class="btn-quickview">
													<a href="#" class="btn btn-md btn-color">
													<span>Quickview</span>
												</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="product-item hover-trigger">
									<div class="product-img">
										<a href="shop-single.html">
											<img src="img/shop/shop_item_5.jpg" alt="">
										</a>
										<div class="hover-overlay">                    
											<div class="product-actions">
												<a href="#" class="product-add-to-wishlist">
													<i class="fa fa-heart"></i>
												</a>
											</div>
											<div class="product-details valign">
												<span class="category">
													<a href="catalogue-grid.html">Women</a>
												</span>
												<h3 class="product-title">
													<a href="shop-single.html">Lola May Crop Blazer</a>
												</h3>
												<span class="price">
													<ins>
														<span class="amount">$42.00</span>
													</ins>
												</span>
												<div class="btn-quickview">
													<a href="#" class="btn btn-md btn-color">
													<span>Quickview</span>
												</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="product-item hover-trigger">
									<div class="product-img">
										<a href="shop-single.html">
											<img src="img/shop/shop_item_6.jpg" alt="">
										</a>
										<div class="product-label">
											<span class="sale">sale</span>
										</div>
										<div class="hover-overlay">                    
											<div class="product-actions">
												<a href="#" class="product-add-to-wishlist">
													<i class="fa fa-heart"></i>
												</a>
											</div>
											<div class="product-details valign">
												<span class="category">
													<a href="catalogue-grid.html">Men</a>
												</span>
												<h3 class="product-title">
													<a href="shop-single.html">Faux Suits</a>
												</h3>
												<span class="price">
													<del>
														<span>$500.00</span>
													</del>
													<ins>
														<span class="amount">$233.00</span>
													</ins>
												</span>
												<div class="btn-quickview">
													<a href="#" class="btn btn-md btn-color">
													<span>Quickview</span>
												</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="product-item hover-trigger">
									<div class="product-img">
										<a href="shop-single.html">
											<img src="img/shop/shop_item_7.jpg" alt="">
										</a>
										<div class="hover-overlay">                    
											<div class="product-actions">
												<a href="#" class="product-add-to-wishlist">
													<i class="fa fa-heart"></i>
												</a>
											</div>
											<div class="product-details valign">
												<span class="category">
													<a href="catalogue-grid.html">Accessories</a>
												</span>
												<h3 class="product-title">
													<a href="shop-single.html">Crew Watch</a>
												</h3>
												<span class="price">
													<ins>
														<span class="amount">$280.00</span>
													</ins>
												</span>
												<div class="btn-quickview">
													<a href="#" class="btn btn-md btn-color">
													<span>Quickview</span>
												</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
	
							<div class="col-md-3 col-xs-6">
								<div class="product-item hover-trigger">
									<div class="product-img">
										<a href="shop-single.html">
											<img src="img/shop/shop_item_8.jpg" alt="">
										</a>
										<div class="hover-overlay">                    
											<div class="product-actions">
												<a href="#" class="product-add-to-wishlist">
													<i class="fa fa-heart"></i>
												</a>
											</div>
											<div class="product-details valign">
												<span class="category">
													<a href="catalogue-grid.html">Women</a>
												</span>
												<h3 class="product-title">
													<a href="shop-single.html">Jersey Stylish</a>
												</h3>
												<span class="price">
													<ins>
														<span class="amount">$289.00</span>
													</ins>
												</span>
												<div class="btn-quickview">
													<a href="#" class="btn btn-md btn-color">
													<span>Quickview</span>
												</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- end row -->
					</div>
				</section> <!-- end trendy products -->
	
				<!-- Testimonials -->
				<section class="section-wrap relative testimonials bg-parallax overlay" style="background-image:url(img/testimonials/testimonial_bg.jpg);">
					<div class="container relative">
	
						<div class="row heading-row mb-20">
							<div class="col-md-6 col-md-offset-3 text-center">
								<h2 class="heading white bottom-line">Happy Clients</h2>
							</div>
						</div>
	
						<div id="owl-testimonials" class="owl-carousel owl-theme text-center">
	
							<div class="item">
								<div class="testimonial">
									<p class="testimonial-text">I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented! I will work only with this agency.</p>
									<span>Donald Trump / CEO of Trump organization</span>
								</div>
							</div>
	
							<div class="item">
								<div class="testimonial">
									<p class="testimonial-text">This is the excellent theme. It has many useful features that can be use for any kind of business. The support is just amazing and design</p>
									<span>John C. Marshall / Art Director</span>
								</div>
							</div>
	
							<div class="item">
								<div class="testimonial">
									<p class="testimonial-text">Needless to say, beautifully designed theme that serves many purpose. Even more sutomers support is the best! Highly recommend this theme to anyone who enjoys a fine product.</p>
									<span>Matthew Whilson / PR Agent</span>
								</div>
							</div>
						</div>
					</div>
	
				</section> <!-- end testimonials -->
	
	
				<!-- Product Widgets List -->
				<section class="section-wrap products-list">
					<div class="container">
						<div class="row">
	
							<div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
								<h3 class="widget-title bottom-line full-grey">Special Offer</h3>
								<ul class="product-list-widget">
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_1.jpg" alt="">
											<span class="product-title">Skinny Dress</span>
										</a>
										<span class="price">
											<del>
												<span>$388.00</span>
											</del>
											<ins>
												<span class="amount">$159.99</span>
											</ins>
										</span>
									</li>
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_2.jpg" alt="">
											<span class="product-title">Mesh Brown Sandal</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$190.00</span>
											</ins>
										</span>
									</li>
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_3.jpg" alt="">
											<span class="product-title">Tribal Grey Blazer</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$330.00</span>
											</ins>
										</span>
									</li>               
								</ul>
							</div> <!-- end special offer -->
	
							<div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
								<h3 class="widget-title bottom-line full-grey">Bestsellers</h3>
								<ul class="product-list-widget">
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_9.jpg" alt="">
											<span class="product-title">Camo Belt</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$33.00</span>
											</ins>
										</span>
									</li>
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_10.jpg" alt="">
											<span class="product-title">Heathered Scarf</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$180.00</span>
											</ins>
										</span>
									</li>
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_11.jpg" alt="">
											<span class="product-title">Mattle Brown Bag</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$150.00</span>
											</ins>
										</span>
									</li>               
								</ul>
							</div> <!-- end bestsellers -->
	
							<div class="col-md-3 col-sm-6 col-xs-12 mb-40 products-widget">
								<h3 class="widget-title bottom-line full-grey">Accessories</h3>
								<ul class="product-list-widget">
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_5.jpg" alt="">
											<span class="product-title">Lola May Crop Blazer</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$42.00</span>
											</ins>
										</span>
									</li>
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_7.jpg" alt="">
											<span class="product-title">Watch</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$280.00</span>
											</ins>
										</span>
									</li>
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_8.jpg" alt="">
											<span class="product-title">Jersey Stylish</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$289.00</span>
											</ins>
										</span>
									</li>               
								</ul>
							</div> <!-- end top rated -->
	
							<div class="col-md-3 col-sm-6 col-xs-12 products-widget last">
								<h3 class="widget-title bottom-line full-grey">top rated</h3>
								<ul class="product-list-widget">
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_4.jpg" alt="">
											<span class="product-title">Sweater w/ Colar</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$299.00</span>
											</ins>
										</span>
									</li>
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_6.jpg" alt="">
											<span class="product-title">Faux Suits</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$233.00</span>
											</ins>
										</span>
									</li>
									<li class="clearfix">
										<a href="shop-single-product.html">
											<img src="img/shop/shop_item_12.jpg" alt="">
											<span class="product-title">Sport T-Shirt</span>
										</a>
										<span class="price">
											<ins>
												<span class="amount">$230.00</span>
											</ins>
										</span>
									</li>               
								</ul>
							</div> <!-- end sales -->
	
						</div> <!-- end row -->
					</div>
				</section> <!-- end product widgets -->

				@show
	
				<!-- Newsletter -->
				<section class="newsletter" id="subscribe">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<h4>Get the latest updates</h4>
								<form class="relative newsletter-form">
									<input type="email" class="newsletter-input" placeholder="Enter your email">
									<input type="submit" class="btn btn-lg btn-dark newsletter-submit" value="Subscribe">
								</form>
							</div>
						</div>
					</div>       
				</section>
	
				<!-- Footer Type-1 -->
				<footer class="footer footer-type-1">
					<div class="container">
						<div class="footer-widgets">
							<div class="row">
	
								<div class="col-md-3 col-sm-12 col-xs-12">
									<div class="widget footer-about-us">
										<img src="img/logo_dark.png" alt="" class="logo">
										<p class="mb-30">Zenna Shop is a very slick and clean eCommerce template.</p>
										<div class="footer-socials">
											<div class="social-icons nobase">
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-google-plus"></i></a>
											</div>
										</div>
									</div>
								</div> <!-- end about us -->
	
								<div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
									<div class="widget footer-links">
										<h5 class="widget-title bottom-line left-align grey">Information</h5>
										<ul class="list-no-dividers">
											<li><a href="#">Our stores</a></li>
											<li><a href="#">About us</a></li>
											<li><a href="#">Business with us</a></li>
											<li><a href="#">Delivery information</a></li>
										</ul>
									</div>
								</div>
	
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="widget footer-links">
										<h5 class="widget-title bottom-line left-align grey">Account</h5>
										<ul class="list-no-dividers">                  
											<li><a href="#">My account</a></li>
											<li><a href="#">Wishlist</a></li>
											<li><a href="#">Order history</a></li>
											<li><a href="#">Specials</a></li>
										</ul>
									</div>
								</div>
	
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="widget footer-links">
										<h5 class="widget-title bottom-line left-align grey">Useful Links</h5>
										<ul class="list-no-dividers">
											<li><a href="#">Shipping Policy</a></li>
											<li><a href="#">Stores</a></li>
											<li><a href="#">Returns</a></li>
											<li><a href="#">Terms &amp; Conditions</a></li>
										</ul>
									</div>
								</div>
	
								<div class="col-md-2 col-sm-6 col-xs-12">
									<div class="widget footer-links">
										<h5 class="widget-title bottom-line left-align grey">Service</h5>
										<ul class="list-no-dividers">
											<li><a href="#">Support</a></li>
											<li><a href="#">Warranty</a></li>
											<li><a href="#">FAQ</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>
								</div>
	
							</div>
						</div>    
					</div> <!-- end container -->
	
					<div class="bottom-footer">
						<div class="container">
							<div class="row">
	
								<div class="col-sm-6 copyright sm-text-center">
									<span>
										&copy; 2017 Zenna Theme, Made by <a href="http://deothemes.com">DeoThemes</a>
									</span>
								</div>
	
								<div class="col-sm-6 col-xs-12 footer-payment-systems text-right sm-text-center mt-sml-10">
									<i class="fa fa-cc-paypal"></i>
									<i class="fa fa-cc-visa"></i>
									<i class="fa fa-cc-mastercard"></i>
									<i class="fa fa-cc-discover"></i>
									<i class="fa fa-cc-amex"></i>
								</div>
	
							</div>
						</div>
					</div> <!-- end bottom footer -->
				</footer> <!-- end footer -->
	
				<div id="back-to-top">
					<a href="#top"><i class="fa fa-angle-up"></i></a>
				</div>
	
			</div> <!-- end content wrapper -->
		</main> <!-- end main wrapper -->
		<!-- jQuery Scripts -->
		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/twitterFetcher_min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
		@yield('js')
	</body>
</html>
