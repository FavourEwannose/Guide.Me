<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<!-- Hero-area -->
<div class="hero-area section">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(./img/bgc2.jpg); "></div>
	<!-- /Backgound Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<ul class="hero-area-tree">
					<li><a href="main.html">Home</a></li>
					<li>Contact</li>
				</ul>
				<h1 class="white-text">Get In Touch</h1>

			</div>
		</div>
	</div>

</div>
<!-- /Hero-area -->

<!-- Contact -->
<div id="contact" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<!-- contact form -->
			<div class="col-md-6">
				<div class="contact-form">
					<h4>Send A Message</h4>
					<form>
						<input class="input" type="text" name="name" placeholder="Name">
						<input class="input" type="email" name="email" placeholder="Email">
						<input class="input" type="text" name="subject" placeholder="Subject">
						<textarea class="input" name="message" placeholder="Enter your Message"></textarea>
						<button class="main-button icon-button pull-right">Send Message</button>
					</form>
				</div>
			</div>
			<!-- /contact form -->

			<!-- contact information -->
			<div class="col-md-5 col-md-offset-1">
				<h4>Contact Information</h4>
				<ul class="contact-details">
					<li><i class="fa fa-envelope"></i>Guide.Me@gmail.com</li>
					<li><i class="fa fa-phone"></i>+2347032414641</li>
					<li><i class="fa fa-map-marker"></i>Benin,Nigeria</li>
				</ul>

				<!DOCTYPE html>
				<html>

				<head>
					<meta charset="utf-8" />
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<title>Contact Map</title>
					<!-- Leaflet CSS -->
					<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
					<style>
						#contact-map {
							width: 600px;
							height: 400px;
						}
					</style>
				</head>

				<body>
					<div id="">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4589635286698!2d5.597876910763722!3d6.3345415253034565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040d255ecc7d44b%3A0xf4d45ccf745ead0c!2sUniben%2C%20Ogogugbo%2C%20Benin%20City%20300102%2C%20Edo!5e0!3m2!1sen!2sng!4v1740341169251!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div id="contact-map"></div>

					<!-- Leaflet JavaScript -->
					<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
					<script>
						var latitude = 6.3333;
						var longitude = 5.6200;
						// Initialize the map, set view to desired coordinates and zoom level
						var map = L.map('contact-map').setView([51.500, -0.09], 8);

						// Use OpenStreetMap tiles
						L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
							maxZoom: 19,
							attribution: '© OpenStreetMap'
						}).addTo(map);
						// Optionally, add a marker to indicate the location.
						L.marker([latitude, longitude]).addTo(map)
							.bindPopup('Benin City, Edo State, Nigeria')
							.openPopup();
					</script>
				</body>

				</html>


				<!-- contact map -->
				<!-- <div id="contact-map"></div> -->
				<!-- /contact map

					</div>
					<!-- contact information -->

			</div>
			<!-- /row -->

		</div>
		<!-- /container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="section">

		<!-- container -->
		<div class="container">

			<!-- row -->
			<div class="row">

				<!-- footer logo -->
				<div class="col-md-6">
					<div class="footer-logo">
						<a class="logo" style="font-size: 30px;" href="main.html">Guide.Me</a>
					</div>
				</div>
				<!-- footer logo -->


			</div>
			<!-- /row -->

			<!-- row -->
			<div id="bottom-footer" class="row">

				<!-- social -->
				<div class="col-md-4 col-md-push-8">

				</div>
				<!-- /social -->

				<!-- copyright -->
				<div class="col-md-8 col-md-pull-4">
					<div class="footer-copyright">
						<span>&copy; Copyright 2021. All Rights Reserved. </span>
					</div>
				</div>
				<!-- /copyright -->

			</div>
			<!-- row -->

		</div>
		<!-- /container -->

	</footer>
	<!-- /Footer -->

	<!-- preloader -->
	<div id='preloader'>
		<div class='preloader'></div>
	</div>
	<!-- /preloader -->


	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/google-map.js"></script> -->
	<script type="text/javascript" src="js/main.js"></script>

	</body>

</html>