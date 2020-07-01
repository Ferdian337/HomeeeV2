<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title>Homeee</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    
	    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

	    <link rel="stylesheet" href="user_bootstrap/css/open-iconic-bootstrap.min.css">
	    <link rel="stylesheet" href="user_bootstrap/css/animate.css">
	    
	    <link rel="stylesheet" href="user_bootstrap/css/owl.carousel.min.css">
	    <link rel="stylesheet" href="user_bootstrap/css/owl.theme.default.min.css">
	    <link rel="stylesheet" href="user_bootstrap/css/magnific-popup.css">

	    <link rel="stylesheet" href="user_bootstrap/css/aos.css">

	    <link rel="stylesheet" href="user_bootstrap/css/ionicons.min.css">

	    <link rel="stylesheet" href="user_bootstrap/css/bootstrap-datepicker.css">
	    <link rel="stylesheet" href="user_bootstrap/css/jquery.timepicker.css">

	    
	    <link rel="stylesheet" href="user_bootstrap/css/flaticon.css">
	    <link rel="stylesheet" href="user_bootstrap/css/icomoon.css">
	    <link rel="stylesheet" href="user_bootstrap/css/style.css">

	    <link href="dashboard_bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  	</head>
  	<body>
  		 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    	<div class="container">
      	<a class="navbar-brand" href="/">Homeee</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
  	  		<span class="oi oi-menu"></span> Menu
      	</button>

  		@yield('content')

  		<!-- Start Footer -->
    	@include('layouts.footer')
    	<!-- End Footer -->
    
    	<!-- Login dan Register Modal -->
    	@include('layouts.loginRegisterModal')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="user_bootstrap/js/jquery.min.js"></script>
  <script src="user_bootstrap/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="user_bootstrap/js/popper.min.js"></script>
  <script src="user_bootstrap/js/bootstrap.min.js"></script>
  <script src="user_bootstrap/js/jquery.easing.1.3.js"></script>
  <script src="user_bootstrap/js/jquery.waypoints.min.js"></script>
  <script src="user_bootstrap/js/jquery.stellar.min.js"></script>
  <script src="user_bootstrap/js/owl.carousel.min.js"></script>
  <script src="user_bootstrap/js/jquery.magnific-popup.min.js"></script>
  <script src="user_bootstrap/js/aos.js"></script>
  <script src="user_bootstrap/js/jquery.animateNumber.min.js"></script>
  <script src="user_bootstrap/js/bootstrap-datepicker.js"></script>
  <script src="user_bootstrap/js/jquery.timepicker.min.js"></script>
  <script src="user_bootstrap/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="user_bootstrap/js/google-map.js"></script>
  <script src="user_bootstrap/js/main.js"></script>
    
	</body>
</html>

