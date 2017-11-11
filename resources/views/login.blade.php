@extends('layouts.layout_landing')

@section('title')
	Masuk | Portal Berita Universitas Airlangga
@endsection

@section('link')
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Express News Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
<script type="application/x-javascript">
	addEventListener("load", function() {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="js/responsiveslides.min.js"></script>
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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
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
<!-- content-section-starts-here -->
<div class="main-body">
	<div class="wrap">
		<ol class="breadcrumb">
			<li><a href="index.html">Beranda</a></li>
			<li class="active">Masuk</li>
		</ol>

		<!--contact-section-starts-->
		<div class="contact-section">
			<div class="contact_grid">
				<div class="col-md-8 contact-top">
					<h3>Masuk</h3>
					<p id="status" class="contact_msg hide"></p>
					<form id="login-form"  method="post">
						{{ csrf_field() }}
						<div class="to">
							<input type="text" class="text" name="username" placeholder="Nama Pengguna" required>
							<input type="password" class="text" name="password" placeholder="Kata Sandi" required style="margin-left:20px; margin-right: 20px;">
						</div>
						<div class="form-submit1">
							<input name="submit" type="submit" id="submit" value="Masuk"><br>
						</div>
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<!--contact-section-ends-->
	</div>
</div>
<!-- content-section-ends-here -->
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
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
