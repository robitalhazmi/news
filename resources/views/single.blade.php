<!DOCTYPE HTML>
<html>

<head>
  <title>News</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  {{-- <meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" /> --}}
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Custom Theme files -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- js -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <!-- //js -->
  <link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <style media="screen">
  </style>
</head>

<body>
  <!-- banner -->
  <div class="banner1">
    <div class="banner-info1">
      <div class="container">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
            <div class="logo">
              <a class="navbar-brand" href="/"><span>N</span> News</a>
            </div>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
							<li class="act"><a href="/" class="effect1 active">Beranda</a></li>
							<li><a href="#">Nav</a></li>
							<li><a href="#">Nav</a></li>
							<li><a href="#">Nav</a></li>

							<li><a href="#">Nav</a></li>
							@guest
								<li><a href="login">Masuk</a></li>
							@endguest
							@auth
								<li role="presentation" class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
									  Hai! {{ Auth::user()->username }} <span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
									  <li><a href="admin">Dashboard</a></li>
									  <li><a href="logout">Keluar</a></li>

									</ul>
								</li>
							@endauth
						</ul>
					</div><!-- /.navbar-collapse -->

        </nav>
      </div>
    </div>
  </div>
  <!-- //banner -->
  <!-- single -->
  <div class="single">
    <div class="container">
      <div class="single-grid">
        <div class="col-md-8 blog-left">
          <div class="blog-left-grid">
            <div class="blog-leftl">
              <h4>{{strftime("%B", strtotime($news['created_at']))}} <span>{{strftime("%d", strtotime($news['created_at']))}}</span></h4>
            </div>
            <div class="blog-leftr">
              <h3 style="margin: 0 0 1em; font-size: 1.5em; font-weight: 400; text-transform: uppercase;">{{ $news['title'] }}</h3>
              @php
                echo htmlspecialchars_decode(stripslashes($news['content']));
              @endphp

              <ul>
                <li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>{{ $news['username'] }}</a></li>
                {{-- <li><a href="#"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i>10 Comments</a></li> --}}
              </ul>
            </div>
            <div class="clearfix"> </div>
            <div class="admin-text">
              <h5>Ditulis oleh {{ $news['username'] }}</h5>
              <div class="admin-text-left">
                <a href="#"><img src="images/icon1.png" alt=""/></a>
              </div>
              <div class="admin-text-right">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <span>Lihat semua tulisan dari:<a href="#"> {{ $news['username'] }} </a></span>
              </div>
              <div class="clearfix"> </div>
            </div>
            <div class="response">
              <h4>Responses</h4>
              <div class="media response-info">
                <div class="media-left response-text-left">
                  <a href="#">
										<img class="media-object" src="images/icon1.png" alt=""/>
									</a>
                  <h5><a href="#">Admin</a></h5>
                </div>
                <div class="media-body response-text-right">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <ul>
                    <li>October 25, 2016</li>
                    <li><a href="single.html">Reply</a></li>
                  </ul>
                  <div class="media response-info">
                    <div class="media-left response-text-left">
                      <a href="#">
												<img class="media-object" src="images/icon1.png" alt=""/>
											</a>
                      <h5><a href="#">Admin</a></h5>
                    </div>
                    <div class="media-body response-text-right">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <ul>
                        <li>October 25, 2016</li>
                        <li><a href="single.html">Reply</a></li>
                      </ul>
                    </div>
                    <div class="clearfix"> </div>
                  </div>
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="media response-info">
                <div class="media-left response-text-left">
                  <a href="#">
										<img class="media-object" src="images/icon1.png" alt=""/>
									</a>
                  <h5><a href="#">Admin</a></h5>
                </div>
                <div class="media-body response-text-right">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <ul>
                    <li>October 25, 2016</li>
                    <li><a href="single.html">Reply</a></li>
                  </ul>
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="coment-form">
              <h4>Leave your comment</h4>
              <form>
                <input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                <input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
                <input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
                <textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                <input type="submit" value="Submit Comment">
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4 blog-right">
          <h3>Rubrik</h3>
          <ul>
            <li><a href="#">{{ $news['name'] }}</a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- //single -->
  <!-- footer -->
  <div class="footer-top-w3layouts-agile">
    <div class="container">
      <p>at least 150 missing and there dead in landslide after monsoon rains in central Sri Lanka, officials say <a href="#">http//example.com</a></p>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="footer-grids wthree-agile">
        <div class="col-md-4 footer-grid-left">
          <h3>twitter feed</h3>
          <ul>
            <li><a href="#">the moment an unlimited #antares rocket exploded seconds after launch
							<i>http//example.com</i></a><span>15 minutes ago</span></li>
            <li><a href="mailto:info@example.com" class="cols">@NASA</a> & <a href="mailto:info@example.com" class="cols">
							@orbital science</a> <a href="#">gathering data on failure #antares rocket bound
							for international space</a><span>45 minutes ago</span></li>
            <li><a href="#">ex-cabinet minister chris huhne loses legal challenge over $77,750
							court costs incurred in speeding points</a><span>1 day ago</span></li>
          </ul>
        </div>
        <div class="col-md-4 footer-grid-left">
          <h3>contact form</h3>
          <form>
            <input type="text" value="enter your full name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your full name';}" required="">
            <input type="email" value="enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your email address';}" required="">
            <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
            <input type="submit" value="Submit">
          </form>
        </div>
        <div class="col-md-4 footer-grid-left">
          <h3>about us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
            <span>But I must explain to you how all this mistaken idea of denouncing
						pleasure and praising pain was born and I will give you a complete
						account of the system, and expound the actual teachings of the
						great explorer.</span>
            <i>- The Entire TLG Team</i></p>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-bottom-left-whtree-agileinfo">
          <p>&copy 2017 Trendy Blog. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts.</a></p>
        </div>
        <div class="footer-bottom-right-whtree-agileinfo">
          <ul>
            <li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
            <li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
            <li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!-- //footer -->
  <!-- for bootstrap working -->
  <script src="js/bootstrap.js"></script>
  <!-- //for bootstrap working -->
  <script>
    $('.blog-leftr img').addClass('img-responsive');
  </script>
</body>

</html>
