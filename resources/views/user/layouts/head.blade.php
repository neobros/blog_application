<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="megakit,business,company,agency,multipurpose,modern,bootstrap4">

	<meta name="author" content="themefisher.com">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="/user/plugins/bootstrap/css/bootstrap.min.css">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="/user/plugins/themify/css/themify-icons.css">
	<link rel="stylesheet" href="/user/plugins/fontawesome/css/all.css">
	<link rel="stylesheet" href="/user/plugins/magnific-popup/dist/magnific-popup.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="/user/plugins/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="/user/plugins/slick-carousel/slick/slick-theme.css">
	<link rel="stylesheet" href="/summernote/summernote-lite.min.css">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="/user/css/style.css">

</head>

<body>

	<!-- Header Start -->

	@include('user.layouts.header')

	<!-- Header Close -->

	<div class="main-wrapper ">
		@yield('content')
		@include('user.layouts.footer')
	</div>

	<!-- 
    Essential Scripts
    =====================================-->

	<!-- Main jQuery -->
	<script src="/user/plugins/jquery/jquery.js"></script>
	<script src="/user/js/contact.js"></script>
	<!-- Bootstrap 4.3.1 -->
	<script src="/user/plugins/bootstrap//user/js/popper.js"></script>
	<script src="/user/plugins/bootstrap//user/js/bootstrap.min.js"></script>
	<!--  Magnific Popup-->
	<script src="/user/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	<!-- Slick Slider -->
	<script src="/user/plugins/slick-carousel/slick/slick.min.js"></script>
	<!-- Counterup -->
	<script src="/user/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="/user/plugins/counterup/jquery.counterup.min.js"></script>

	<!-- Google Map -->
	<script src="/user/plugins/google-map/map.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

	<script src="/user/js/script.js"></script>

	<script src="/summernote/summernote-lite.min.js"></script>
	<script>
		$('#summernote').summernote({
			tabsize: 9,
			height: 520,
		})
	</script>

</body>

</html>