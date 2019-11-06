<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('land-page/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('land-page/vendor/font-awesome/css/font-awesome.css')}}" />
		<link rel="stylesheet" href="{{asset('land-page/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('land-page/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('land-page/stylesheets/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('land-page/stylesheets/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('land-page/stylesheets/theme-custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('land-page/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-error error-outside">
			<div class="center-error">

				<div class="row">
					<div class="col-sm-8">
						<div class="main-error mb-xlg">
							<h2 class="error-code text-dark text-center text-semibold m-none">500 <i class="fa fa-file"></i></h2>
							<p class="error-explanation text-center">{{$thisError}}</p>
						</div>
					</div>
					<div class="col-sm-4">
						<h4 class="text">Mungkin beberapa ini dapat membantu</h4>
						<ul class="nav nav-list primary">
							<li><a href="#"><i class="fa fa-caret-right text-dark"></i> Dashboard</a></li>
							<li><a href="#"><i class="fa fa-caret-right text-dark"></i> User Profile</a></li>
							<li><a href="#"><i class="fa fa-caret-right text-dark"></i> FAQ's</a></li>
						</ul>
					</div>
					<div class="alert alert-info fade in nomargin">
										
				<h4></h4>
				<p>We are extermely happy to announce our first admin. We dedicated a lot of effort to bring you tons of features, easily customization for an accessible price! Do you still have any doubts that this is the best choice?</p>
				<p>
					<button class="btn btn-info mt-xs mb-xs" type="button">Yes, it's the best choice</button>
					<button class="btn btn-default mt-xs mb-xs" type="button">Not convinced yet</button>
				</p>
			</div>
				</div>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{asset('land-page/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('land-page/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('land-page/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('land-page/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('land-page/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('land-page/vendor/magnific-popup/magnific-popup.js')}}"></script>
		<script src="{{asset('land-page/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('land-page/javascripts/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('land-page/javascripts/theme.custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('land-page/javascripts/theme.init.js')}}"></script>

	</body>
</html>