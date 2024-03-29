<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{URL::to('source/assets/dest/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('source/assets/dest/vendors/colorbox/example3/colorbox.css')}}">
	<link rel="stylesheet" href="{{URL::to('source/assets/dest/rs-plugin/css/settings.css')}}">
	<link rel="stylesheet" href="{{URL::to('source/assets/dest/rs-plugin/css/responsive.css')}}">
	<link rel="stylesheet" title="style" href="{{URL::to('source/assets/dest/css/style.css')}}">
	<link rel="stylesheet" href="{{URL::to('source/assets/dest/css/animate.css')}}">
	<link rel="stylesheet" title="style" href="{{URL::to('source/assets/dest/css/huong-style.css')}}">
	<link rel="stylesheet" href="{{URL::to('source/assets/dest/css/rate.css')}}"/>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css"> -->
</head>
<body>

<style>
	</style>
	@include("header")
	<div class="rev-slider">
		@yield('content')
	</div>
	@include("footer")
	<!-- <div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="source/assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="source/assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div>  -->
		<!-- .container -->
	<!-- </div>  -->
	<!-- .copyright -->


	<!-- include js files -->
	@include("script")
</body>
</html>
