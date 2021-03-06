@extends('layouts.layout_landing')

@section('title')
	Portal Berita Universitas Airlangga
@endsection

@section('link')
	<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	{{-- <meta name="keywords" content="Express News Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> --}}
	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/js/jquery.min.js"></script>
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script src="/js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				pager: true,
			});
		});
	</script>
	<script type="text/javascript" src="/js/move-top.js"></script>
	<script type="text/javascript" src="/js/easing.js"></script>
	<!--/script-->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
@endsection

@section('content')
	<div class="wrap">
		<div class="move-text">
			<div class="breaking_news">
				<h2>Breaking News</h2>
			</div>
			<div class="marquee">
				<div class="marquee1"><a class="breaking" href="/single.html">>>The standard chunk of Lorem Ipsum used since the 1500s is reproduced..</a></div>
				<div class="marquee2"><a class="breaking" href="/single.html">>>At vero eos et accusamus et iusto qui blanditiis praesentium voluptatum deleniti atque..</a></div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<script type="text/javascript" src="/js/jquery.marquee.min.js"></script>
			<script>
				$('.marquee').marquee({
					pauseOnHover: true
				});
				//@ sourceURL=pen.js
			</script>
		</div>
	</div>
	<!-- content-section-starts-here -->
	<div class="main-body">
		<div class="wrap">
			<div class="col-md-8 content-left">
				<div class="slider">
					<div class="callbacks_wrap">
						<ul class="rslides" id="slider">
							@foreach ($banners as $banner)
								<li>
									<img src="{{ route('banner', ['filename' => $banner->id]) }}"  style="width:839px;height:450px;" alt="">
									<div class="caption">
										<a href="/single.html">{{ $banner->title }}</a>
									</div>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="articles">
					<header>
						<h3 class="title-head">All around the world</h3>
					</header>
					<div class="article">
						<div class="article-left">
							<a href="/single.html"><img src="/images/article1.jpg"></a>
						</div>
						<div class="article-right">
							<div class="article-title">
								<p>On Feb 25, 2015 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>104 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-thumbs-up"></span>52</a></p>
								<a class="title" href="/single.html"> The section of the mass media industry that focuses on presenting</a>
							</div>
							<div class="article-text">
								<p>The standard chunk of Lorem Ipsum used since the 1500s. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" exact original.....</p>
								<a href="/single.html"><img src="/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="article">
						<div class="article-left">
							<iframe width="100%" src="/https://www.youtube.com/embed/mbDg4OG7z4Y" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="article-right">
							<div class="article-title">
								<p>On Apr 11, 2015 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>54 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-thumbs-up"></span>18</a></p>
								<a class="title" href="/single.html">Contrary to popular belief, Lorem Ipsum is not simply random</a>
							</div>
							<div class="article-text">
								<p>It is a long established fact that a reader will be distracted by the readable.....</p>
								<a href="/single.html"><img src="/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="article">
						<div class="article-left">
							<a href="/single.html"><img src="/images/article3.jpg"></a>
						</div>
						<div class="article-right">
							<div class="article-title">
								<p>On Jun 21, 2015 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>181 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-thumbs-up"></span>89</a></p>
								<a class="title" href="/single.html">There are many variations that focuses on presenting</a>
							</div>
							<div class="article-text">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.....</p>
								<a href="/single.html"><img src="/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="article">
						<div class="article-left">
							<a href="/single.html"><img src="/images/article4.jpg"></a>
						</div>
						<div class="article-right">
							<div class="article-title">
								<p>On Jan 17, 2015 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>144 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-thumbs-up"></span>74</a></p>
								<a class="title" href="/single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
							</div>
							<div class="article-text">
								<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born.....</p>
								<a href="/single.html"><img src="/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="article">
						<div class="article-left">
							<iframe width="100%" src="/https://www.youtube.com/embed/GxXxvJYUpxk" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="article-right">
							<div class="article-title">
								<p>On Mar 14, 2015 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
								<a class="title" href="/single.html">On the other hand, we denounce with righteous indignation</a>
							</div>
							<div class="article-text">
								<p>It is a long established fact that a reader will be distracted by the readable.....</p>
								<a href="/single.html"><img src="/images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="life-style">
					<header>
						<h3 class="title-head">Life Style</h3>
					</header>
					<div class="life-style-grids">
						<div class="life-style-left-grid">
							<a href="/single.html"><img src="/images/l1.jpg" alt="" /></a>
							<a class="title" href="/single.html">It is a long established fact that a reader will be distracted.</a>
						</div>
						<div class="life-style-right-grid">
							<a href="/single.html"><img src="/images/l2.jpg" alt="" /></a>
							<a class="title" href="/single.html">There are many variations of passages of Lorem Ipsum available.</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="life-style-grids">
						<div class="life-style-left-grid">
							<a href="/single.html"><img src="/images/l3.jpg" alt="" /></a>
							<a class="title" href="/single.html">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
						</div>
						<div class="life-style-right-grid">
							<a href="/single.html"><img src="/images/l4.jpg" alt="" /></a>
							<a class="title" href="/single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="sports-top">
					<div class="s-grid-left">
						<div class="cricket">
							<header>
								<h3 class="title-head">Business</h3>
							</header>
							<div class="c-sports-main">
								<div class="c-image">
									<a href="/single.html"><img src="/images/bus1.jpg" alt="" /></a>
								</div>
								<div class="c-text">
									<h6>Lorem Ipsum</h6>
									<a class="power" href="/single.html">It is a long established fact that a reader</a>
									<p class="date">On Feb 25, 2015</p>
									<a class="reu" href="/single.html"><img src="/images/more.png" alt="" /></a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="s-grid-small">
								<div class="sc-image">
									<a href="/single.html"><img src="/images/bus2.jpg" alt="" /></a>
								</div>
								<div class="sc-text">
									<h6>Lorem Ipsum</h6>
									<a class="power" href="/single.html">It is a long established fact that a reader</a>
									<p class="date">On Mar 21, 2015</p>
									<a class="reu" href="/single.html"><img src="/images/more.png" alt="" /></a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="s-grid-small">
								<div class="sc-image">
									<a href="/single.html"><img src="/images/bus3.jpg" alt="" /></a>
								</div>
								<div class="sc-text">
									<h6>Lorem Ipsum</h6>
									<a class="power" href="/single.html">It is a long established fact that a reader</a>
									<p class="date">On Jan 25, 2015</p>
									<a class="reu" href="/single.html"><img src="/images/more.png" alt="" /></a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="s-grid-small">
								<div class="sc-image">
									<a href="/single.html"><img src="/images/bus4.jpg" alt="" /></a>
								</div>
								<div class="sc-text">
									<h6>Lorem Ipsum</h6>
									<a class="power" href="/single.html">It is a long established fact that a reader</a>
									<p class="date">On Jul 19, 2015</p>
									<a class="reu" href="/single.html"><img src="/images/more.png" alt="" /></a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="s-grid-right">
						<div class="cricket">
							<header>
								<h3 class="title-popular">Technology</h3>
							</header>
							<div class="c-sports-main">
								<div class="c-image">
									<a href="/single.html"><img src="/images/tec1.jpg" alt="" /></a>
								</div>
								<div class="c-text">
									<h6>Lorem Ipsum</h6>
									<a class="power" href="/single.html">It is a long established fact that a reader</a>
									<p class="date">On Apr 22, 2015</p>
									<a class="reu" href="/single.html"><img src="/images/more.png" alt="" /></a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="s-grid-small">
								<div class="sc-image">
									<a href="/single.html"><img src="/images/tec2.jpg" alt="" /></a>
								</div>
								<div class="sc-text">
									<h6>Lorem Ipsum</h6>
									<a class="power" href="/single.html">It is a long established fact that a reader</a>
									<p class="date">On Jan 19, 2015</p>
									<a class="reu" href="/single.html"><img src="/images/more.png" alt="" /></a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="s-grid-small">
								<div class="sc-image">
									<a href="/single.html"><img src="/images/tec3.jpg" alt="" /></a>
								</div>
								<div class="sc-text">
									<h6>Lorem Ipsum</h6>
									<a class="power" href="/single.html">It is a long established fact that a reader</a>
									<p class="date">On Jun 25, 2015</p>
									<a class="reu" href="/single.html"><img src="/images/more.png" alt="" /></a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="s-grid-small">
								<div class="sc-image">
									<a href="/single.html"><img src="/images/tec4.jpg" alt="" /></a>
								</div>
								<div class="sc-text">
									<h6>Lorem Ipsum</h6>
									<a class="power" href="/single.html">It is a long established fact that a reader</a>
									<p class="date">On Jul 19, 2015</p>
									<a class="reu" href="/single.html"><img src="/images/more.png" alt="" /></a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-4 side-bar">
				<div class="first_half">
					<div class="newsletter">
						<h1 class="side-title-head">Newsletter</h1>
						<p class="sign">Sign up to receive our free newsletters!</p>
						<form>
							<input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
							<input type="submit" value="submit">
						</form>
					</div>
					<div class="list_vertical">
						<section class="accordation_menu">
							<div>
								<input id="label-1" name="lida" type="radio" checked/>
								<label for="label-1" id="item1"><i class="ferme"> </i>Popular Posts<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
								<div class="content" id="a1">
									<div class="scrollbar" id="style-2">
										<div class="force-overflow">
											<div class="popular-post-grids">
												<div class="popular-post-grid">
													<div class="post-img">
														<a href="/single.html"><img src="/images/bus2.jpg" alt="" /></a>
													</div>
													<div class="post-text">
														<a class="pp-title" href="/single.html"> The section of the mass media industry</a>
														<p>On Feb 25 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>3 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="popular-post-grid">
													<div class="post-img">
														<a href="/single.html"><img src="/images/bus1.jpg" alt="" /></a>
													</div>
													<div class="post-text">
														<a class="pp-title" href="/single.html"> Lorem Ipsum is simply dummy text printing</a>
														<p>On Apr 14 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="popular-post-grid">
													<div class="post-img">
														<a href="/single.html"><img src="/images/bus3.jpg" alt="" /></a>
													</div>
													<div class="post-text">
														<a class="pp-title" href="/single.html">There are many variations of Lorem</a>
														<p>On Jun 25 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="popular-post-grid">
													<div class="post-img">
														<a href="/single.html"><img src="/images/bus4.jpg" alt="" /></a>
													</div>
													<div class="post-text">
														<a class="pp-title" href="/single.html">Sed ut perspiciatis unde omnis iste natus</a>
														<p>On Jan 25 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<input id="label-2" name="lida" type="radio" />
								<label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>Recent Posts<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
								<div class="content" id="a2">
									<div class="scrollbar" id="style-2">
										<div class="force-overflow">
											<div class="popular-post-grids">
												<div class="popular-post-grid">
													<div class="post-img">
														<a href="/single.html"><img src="/images/tec2.jpg" alt="" /></a>
													</div>
													<div class="post-text">
														<a class="pp-title" href="/single.html"> The section of the mass media industry</a>
														<p>On Feb 25 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>3 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="popular-post-grid">
													<div class="post-img">
														<a href="/single.html"><img src="/images/tec1.jpg" alt="" /></a>
													</div>
													<div class="post-text">
														<a class="pp-title" href="/single.html"> Lorem Ipsum is simply dummy text printing</a>
														<p>On Apr 14 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="popular-post-grid">
													<div class="post-img">
														<a href="/single.html"><img src="/images/tec3.jpg" alt="" /></a>
													</div>
													<div class="post-text">
														<a class="pp-title" href="/single.html">There are many variations of Lorem</a>
														<p>On Jun 25 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="popular-post-grid">
													<div class="post-img">
														<a href="/single.html"><img src="/images/tec4.jpg" alt="" /></a>
													</div>
													<div class="post-text">
														<a class="pp-title" href="/single.html">Sed ut perspiciatis unde omnis iste natus</a>
														<p>On Jan 25 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<input id="label-3" name="lida" type="radio" />
								<label for="label-3" id="item3"><i class="icon-trophy" id="i3"></i>Comments<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
								<div class="content" id="a3">
									<div class="scrollbar" id="style-2">
										<div class="force-overflow">
											<div class="response">
												<div class="media response-info">
													<div class="media-left response-text-left">
														<a href="/#">
									<img class="media-object" src="/images/icon1.png" alt="" />
								</a>
														<h5><a href="/#">Username</a></h5>
													</div>
													<div class="media-body response-text-right">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
														<ul>
															<li>MARCH 21, 2015</li>
															<li><a href="/single.html">Reply</a></li>
														</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="media response-info">
													<div class="media-left response-text-left">
														<a href="/#">
									<img class="media-object" src="/images/icon1.png" alt="" />
								</a>
														<h5><a href="/#">Username</a></h5>
													</div>
													<div class="media-body response-text-right">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
														<ul>
															<li>MARCH 26, 2015</li>
															<li><a href="/single.html">Reply</a></li>
														</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="media response-info">
													<div class="media-left response-text-left">
														<a href="/#">
									<img class="media-object" src="/images/icon1.png" alt="" />
								</a>
														<h5><a href="/#">Username</a></h5>
													</div>
													<div class="media-body response-text-right">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
														<ul>
															<li>MAY 25, 2015</li>
															<li><a href="/single.html">Reply</a></li>
														</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="media response-info">
													<div class="media-left response-text-left">
														<a href="/#">
									<img class="media-object" src="/images/icon1.png" alt="" />
								</a>
														<h5><a href="/#">Username</a></h5>
													</div>
													<div class="media-body response-text-right">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
														<ul>
															<li>FEB 13, 2015</li>
															<li><a href="/single.html">Reply</a></li>
														</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="media response-info">
													<div class="media-left response-text-left">
														<a href="/#">
									<img class="media-object" src="/images/icon1.png" alt="" />
								</a>
														<h5><a href="/#">Username</a></h5>
													</div>
													<div class="media-body response-text-right">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
														<ul>
															<li>JAN 28, 2015</li>
															<li><a href="/single.html">Reply</a></li>
														</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="media response-info">
													<div class="media-left response-text-left">
														<a href="/#">
									<img class="media-object" src="/images/icon1.png" alt="" />
								</a>
														<h5><a href="/#">Username</a></h5>
													</div>
													<div class="media-body response-text-right">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
														<ul>
															<li>APR 18, 2015</li>
															<li><a href="/single.html">Reply</a></li>
														</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="media response-info">
													<div class="media-left response-text-left">
														<a href="/#">
									<img class="media-object" src="/images/icon1.png" alt="" />
								</a>
														<h5><a href="/#">Username</a></h5>
													</div>
													<div class="media-body response-text-right">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
														<ul>
															<li>DEC 25, 2014</li>
															<li><a href="/single.html">Reply</a></li>
														</ul>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="side-bar-articles">
						<div class="side-bar-article">
							<a href="/single.html"><img src="/images/sai.jpg" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="/single.html">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
							</div>
						</div>
						<div class="side-bar-article">
							<a href="/single.html"><img src="/images/sai2.jpg" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="/single.html">There are many variations of passages of Lorem</a>
							</div>
						</div>
						<div class="side-bar-article">
							<a href="/single.html"><img src="/images/sai3.jpg" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="/single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
							</div>
						</div>
					</div>
				</div>
				<div class="secound_half">
					<div class="tags">
						<header>
							<h3 class="title-head">Tags</h3>
						</header>
						<p>
							<a class="tag1" href="/single.html">At vero eos</a>
							<a class="tag2" href="/single.html">doloremque</a>
							<a class="tag3" href="/single.html">On the other</a>
							<a class="tag4" href="/single.html">pain was</a>
							<a class="tag5" href="/single.html">rationally encounter</a>
							<a class="tag6" href="/single.html">praesentium voluptatum</a>
							<a class="tag7" href="/single.html">est, omnis</a>
							<a class="tag8" href="/single.html">who are so beguiled</a>
							<a class="tag9" href="/single.html">when nothing</a>
							<a class="tag10" href="/single.html">owing to the</a>
							<a class="tag11" href="/single.html">pains to avoid</a>
							<a class="tag12" href="/single.html">tempora incidunt</a>
							<a class="tag13" href="/single.html">pursues or desires</a>
							<a class="tag14" href="/single.html">Bonorum et</a>
							<a class="tag15" href="/single.html">written by Cicero</a>
							<a class="tag16" href="/single.html">Ipsum passage</a>
							<a class="tag17" href="/single.html">exercitationem ullam</a>
							<a class="tag18" href="/single.html">mistaken idea</a>
							<a class="tag19" href="/single.html">ducimus qui</a>
							<a class="tag20" href="/single.html">holds in these</a>
						</p>
					</div>
					<div class="popular-news">
						<header>
							<h3 class="title-popular">popular News</h3>
						</header>
						<div class="popular-grids">
							<div class="popular-grid">
								<a href="/single.html"><img src="/images/popular-4.jpg" alt="" /></a>
								<a class="title" href="/single.html">It is a long established fact that a reader will be distracted</a>
								<p>On Aug 31, 2015 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
							</div>
							<div class="popular-grid">
								<a href="/single.html"><img src="/images/popular-1.jpg" alt="" /></a>
								<a class="title" href="/single.html">It is a long established fact that a reader will be distracted</a>
								<p>On Mar 14, 2015 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
							</div>
							<div class="popular-grid">
								<iframe width="100%" src="/https://www.youtube.com/embed/LGMn_yi_62k" frameborder="0" allowfullscreen></iframe>
								<a class="title" href="/single.html">Aishwarya Rai Bachchan's Latest SHOCKING News For Ex Salman Khan</a>
								<p>On Mar 14, 2015 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
							</div>
							<div class="popular-grid">
								<a href="/single.html"><img src="/images/popular-3.jpg" alt="" /></a>
								<a class="title" href="/single.html">It is a long established fact that a reader will be distracted</a>
								<p>On Mar 14, 2015 <a class="span_link" href="/#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="/#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- content-section-ends-here -->
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
			wrapID: 'toTop', // fading element id
			wrapHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<script src="/js/ajax.js"></script>
@endsection
