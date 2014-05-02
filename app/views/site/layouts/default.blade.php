<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Laravel 4 Sample Site
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

	
		<!-- Custom Google Web Font -->
		<link href="{{asset('bootstrap/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

		<!-- Add custom CSS here -->
		<link href="{{asset('bootstrap/css/landing-page.css')}}" rel="stylesheet">
			
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">

		<style>
        body {
            padding: 60px 0;
        }
		@section('styles')
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
	</head>

	<body>
		<!-- To make sticky footer need to wrap in a div -->
		<div id="wrap">
		<!-- Navbar -->
		<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
			 <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
						<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li>
					</ul>

                    <ul class="nav navbar-nav pull-right">
                        @if (Auth::check())
                        @if (Auth::user()->hasRole('admin'))
                        <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li>
                        @endif
                        <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li>
                        <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li>
                        @else
                        <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li>
                        <li {{ (Request::is('user/register') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('site.sign_up') }}}</a></li>
                        @endif
                    </ul>
					<!-- ./ nav-collapse -->
				</div>
			</div>
		</div>
		<!-- ./ navbar -->

		<!-- Container -->
		<div class="container">
			<!-- Notifications -->
			@include('notifications')
			<!-- ./ notifications -->

			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
			<div id='data-main'>
				<!-- new content-->
			
				
			@if	(Request::is('/'))
			  <div class="intro-header">
				
				<div class="container">

					<div class="row">
						<div class="col-lg-12">
							<div class="intro-message">
								<h1>INSONIX</h1>
								<h3>A Sample user admin wizard</h3>
								<hr class="intro-divider">
								<ul class="list-inline intro-social-buttons">
									<li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
									</li>
									<li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
									</li>
									<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container -->

			</div>
			<!-- /.intro-header -->

			<div class="content-section-a">

				<div class="container">

					<div class="row">
						<div class="col-lg-5 col-sm-6">
							<hr class="section-heading-spacer">
							<div class="clearfix"></div>
							<h2 class="section-heading">Death to the Stock Photo:
								<br>Special Thanks</h2>
							<p class="lead">A special thanks to Death to the Stock Photo for providing the photographs that you see in this template. <a target="_blank" href="http://join.deathtothestockphoto.com/">Visit their website</a> to become a member.</p>
						</div>
						<div class="col-lg-5 col-lg-offset-2 col-sm-6">
							<img class="img-responsive" src="{{asset('bootstrap/img/ipad.png')}}" alt="">
						</div>
					</div>

				</div>
				<!-- /.container -->

			</div>
			<!-- /.content-section-a -->

			<div class="content-section-b">

				<div class="container">

					<div class="row">
						<div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
							<hr class="section-heading-spacer">
							<div class="clearfix"></div>
							<h2 class="section-heading">3D Device Mockups
								<br>by PSDCovers</h2>
							<p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by PSDCovers! <a target="_blank" href="http://www.psdcovers.com/">Visit their website</a> to download some of their awesome, free photoshop actions!</p>
						</div>
						<div class="col-lg-5 col-sm-pull-6  col-sm-6">
							<img class="img-responsive" src="{{asset('bootstrap/img/doge.png')}}" alt="">
						</div>
					</div>

				</div>
				<!-- /.container -->

			</div>
			<!-- /.content-section-b -->

			<div class="content-section-a">

				<div class="container">

					<div class="row">
						<div class="col-lg-5 col-sm-6">
							<hr class="section-heading-spacer">
							<div class="clearfix"></div>
							<h2 class="section-heading">Google Web Fonts and
								<br>Font Awesome Icons</h2>
							<p class="lead">This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</p>
						</div>
						<div class="col-lg-5 col-lg-offset-2 col-sm-6">
							<img class="img-responsive" src="{{asset('bootstrap/img/phones.png')}}" alt="">
						</div>
					</div>

				</div>
				<!-- /.container -->

			</div>
			<!-- /.content-section-a -->

			<div class="banner">

				<div class="container">

					<div class="row">
						<div class="col-lg-6">
							<h2>Connect to Start Insonix:</h2>
						</div>
						<div class="col-lg-6">
							<ul class="list-inline banner-social-buttons">
								<li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
								</li>
								<li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
								</li>
								<li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
								</li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /.container -->

			</div>
			<!-- /.banner -->
				@endif
				<!--new content ends here-->
				</div>
		</div>
		<!-- ./ container -->

		<!-- the following div is needed to make a sticky footer -->
		<div id="push"></div>
		</div>
		<!-- ./wrap -->


	    <div id="footer">
	      <div class="container">
	      </div>
	    </div>

		<!-- Javascripts
		================================================== -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

        @yield('scripts')
	</body>
</html>
