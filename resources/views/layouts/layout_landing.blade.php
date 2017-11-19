<!DOCTYPE html>
<html>

<head>
	<title>
    @yield('title')
  </title>

  @yield('link')

</head>

<body>
	<!-- header-section-starts-here -->
	<div class="header">
		<div class="header-top">
			<div class="wrap">
				<div class="top-menu">
					<ul>
						<li><a href="{{ route('landing') }}">Beranda</a></li>
						<li><a href="#">Tentang Kami</a></li>
						<li><a href="#">Kontak Kami</a></li>
						@if (Auth::guard()->check())
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="text-transform: none;">{{ Auth::user()->username }}<b class="caret"></b></a>
								<ul class="dropdown-menu" style="background-color: #000;">
									<li>
										<a href="{{ route('user.dashboard') }}">Dashboard</a>
									</li>
									<li class="divider"></li>
									<li><a href="{{ route('logout') }}">Keluar</a></li>
								</ul>
							</li>
							@elseif (Auth::guard('admin')->check())
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="text-transform: none;">{{ Auth::guard('admin')->user()->username }}<b class="caret"></b></a>
									<ul class="dropdown-menu" style="background-color: #000;">
										<li>
												<a href="{{ route('admin.news') }}">Dashboard</a>
										</li>
										<li class="divider"></li>
										<li><a href="{{ route('logout') }}">Keluar</a></li>
									</ul>
								</li>
							@else
								<li><a href="{{ route('login') }}">Masuk</a></li>
						@endif


					</ul>
				</div>
				<div class="num">
					<p> Hubungi kami : 032 2352 782</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="logo text-center">
				<a href="/"><img src="{{ asset('images/ua-logo.png') }}" alt="" /></a>
			</div>
			<div class="navigation">
				<nav class="navbar navbar-default" role="navigation">
					<div class="wrap">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

						</div>
						<!--/.navbar-header-->

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="{{ route('landing') }}">Beranda</a></li>
								<li><a href="#">Olah Raga</a></li>
								<li><a href="#">Hiburan</a></li>
								<li><a href="#">Kesehatan</a></li>
								<li><a href="#">Bisnis</a></li>
								<div class="clearfix"></div>
							</ul>
							<div class="search">
								<!-- start search-->
								<div class="search-box">
									<div id="sb-search" class="sb-search">
										<form>
											<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
											<input class="sb-search-submit" type="submit" value="">
											<span class="sb-icon-search"> </span>
										</form>
									</div>
								</div>
								<!-- search-scripts -->
								<script src="{{ asset('js/classie.js') }}"></script>
								<script src="{{ asset('js/uisearch.js') }}"></script>
								<script>
									new UISearch(document.getElementById('sb-search'));
								</script>
								<!-- //search-scripts -->
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
			</div>
			</nav>
		</div>
	</div>
	<!-- header-section-ends-here -->
	@yield('content')
	<!-- footer-section-starts-here -->
	<div class="footer">
		<div class="footer-top">
			<div class="wrap">
				<div class="col-md-3 col-xs-6 col-sm-4 footer-grid">
					<h4 class="footer-head">About Us</h4>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
				</div>
				<div class="col-md-2 col-xs-6 col-sm-2 footer-grid">
					<h4 class="footer-head">Categories</h4>
					<ul class="cat">
						<li><a href="/business.html">Business</a></li>
						<li><a href="/technology.html">Technology</a></li>
						<li><a href="/entertainment.html">Entertainment</a></li>
						<li><a href="/sports.html">Sports</a></li>
						<li><a href="/shortcodes.html">Health</a></li>
						<li><a href="/fashion.html">Fashion</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-xs-6 col-sm-6 footer-grid">
					<h4 class="footer-head">Flickr Feed</h4>
					<ul class="flickr">
						<li><a href="/#"><img src="/images/bus4.jpg"></a></li>
						<li><a href="/#"><img src="/images/bus2.jpg"></a></li>
						<li><a href="/#"><img src="/images/bus3.jpg"></a></li>
						<li><a href="/#"><img src="/images/tec4.jpg"></a></li>
						<li><a href="/#"><img src="/images/tec2.jpg"></a></li>
						<li><a href="/#"><img src="/images/tec3.jpg"></a></li>
						<li><a href="/#"><img src="/images/bus2.jpg"></a></li>
						<li><a href="/#"><img src="/images/bus3.jpg"></a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="col-md-3 col-xs-12 footer-grid">
					<h4 class="footer-head">Contact Us</h4>
					<span class="hq">Our headquaters</span>
					<address>
						<ul class="location">
							<li><span class="glyphicon glyphicon-map-marker"></span></li>
							<li>CENTER FOR FINANCIAL ASSISTANCE TO DEPOSED NIGERIAN ROYALTY</li>
							<div class="clearfix"></div>
						</ul>
						<ul class="location">
							<li><span class="glyphicon glyphicon-earphone"></span></li>
							<li>+0 561 111 235</li>
							<div class="clearfix"></div>
						</ul>
						<ul class="location">
							<li><span class="glyphicon glyphicon-envelope"></span></li>
							<li><a href="/mailto:info@example.com">mail@example.com</a></li>
							<div class="clearfix"></div>
						</ul>
					</address>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
				<div class="copyrights col-md-6">
					<p> © 2015 Express News. All Rights Reserved | Design by <a href="/http://w3layouts.com/"> W3layouts</a></p>
				</div>
				<div class="footer-social-icons col-md-6">
					<ul>
						<li><a class="facebook" href="/#"></a></li>
						<li><a class="twitter" href="/#"></a></li>
						<li><a class="flickr" href="/#"></a></li>
						<li><a class="googleplus" href="/#"></a></li>
						<li><a class="dribbble" href="/#"></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- footer-section-ends-here -->
	@yield('script')

	<a href="/#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!---->
</body>

</html>
