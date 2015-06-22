<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Traveller - HTML Template">
		<meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
		<title>The Traveller - HTML Template</title>
		<link rel="shortcut icon" href="images/favicon.png">

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<!-- ============ LOADER START ============ -->

		<div id="loader">
			<i class="fa fa-cog fa-4x fa-spin primary-color"></i>
		</div>

		<!-- ============ LOADER END ============ -->

		<!-- ============ HEADER START ============ -->

	<?php require 'header.php';
	require '../connection/connection.php'; ?>
		<!-- ============ HEADER END ============ -->

		<!-- ============ VIDEO START ============ -->

		<div id="video">
			<video loop autoplay>
				<source src="videos/video.m4v" type="video/mp4" />
				<source src="videos/video.ogv" type="video/ogg" />
			</video>
			<div class="tint">
				<div class="container">
					<div id="weather"></div>
				</div>
			</div>
		</div>

		<!-- ============ VIDEO END ============ -->

		<!-- ============ WELCOME START ============ -->

		<section id="welcome" class="row color2 home-section">
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Welcome to</h5>
					<h1>The Traveller</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus. Integer egestas quam non orci pharetra, vel accumsan ante tristique. Nullam elementum massa eget odio tristique varius. Vivamus id est nec dui auctor posuere. Maecenas eu pulvinar eros. Integer velit velit, faucibus eget accumsan a, sollicitudin in lorem. Nulla cursus vitae justo ut rutrum.<br><a href="about.html">Read more...</a></p>
				</div>
			</div>
			<div class="col-sm-5 col-md-6 col-lg-7 photo"></div>
		</section>

		<!-- ============ WELCOME END ============ -->

		<!-- ============ ROOMS START ============ -->

		<section id="rooms" class="row color3 home-section">
			<div class="col-sm-5 col-md-6 col-lg-7 photo"></div>
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Check out our</h5>
					<h1>Rooms</h1>
					<p>In euismod vestibulum libero vel auctor. Cras fermentum neque ut ante porta, in bibendum lorem elementum. Morbi volutpat lacus dui, vel faucibus velit dignissim at. Integer malesuada diam urna, sed bibendum magna sollicitudin ac. Donec aliquet dui id congue interdum. Nunc aliquam dui lectus, a imperdiet ex convallis sit amet. In fringilla, sem nec sagittis dapibus, est nibh tincidunt tortor, vel vestibulum est velit vel mi.<br><a href="rooms.html">Read more...</a></p>
				</div>
			</div>
		</section>

		<!-- ============ ROOMS END ============ -->

		<!-- ============ RESTAURANT START ============ -->

		<section id="restaurant" class="row home-section">
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Fine dining at our</h5>
					<h1>Restaurant</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus. Integer egestas quam non orci pharetra, vel accumsan ante tristique. Nullam elementum massa eget odio tristique varius. Vivamus id est nec dui auctor posuere. Maecenas eu pulvinar eros. Integer velit velit, faucibus eget accumsan a, sollicitudin in lorem. Nulla cursus vitae justo ut rutrum.<br><a href="restaurant.html">Read more...</a></p>
				</div></div>
			<div class="col-sm-5 col-md-6 col-lg-7 photo"></div>
		</section>

		<!-- ============ RESTAURANT END ============ -->

		<!-- ============ SPA START ============ -->

		<section id="spa" class="row color2 home-section">
			<div class="col-sm-5 col-md-6 col-lg-7 photo"></div>
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Relax at our</h5>
					<h1>Spa</h1>
					<p>In euismod vestibulum libero vel auctor. Cras fermentum neque ut ante porta, in bibendum lorem elementum. Morbi volutpat lacus dui, vel faucibus velit dignissim at. Integer malesuada diam urna, sed bibendum magna sollicitudin ac. Donec aliquet dui id congue interdum. Nunc aliquam dui lectus, a imperdiet ex convallis sit amet. In fringilla, sem nec sagittis dapibus, est nibh tincidunt tortor, vel vestibulum est velit vel mi.<br><a href="spa.html">Read more...</a></p>
				</div></div>
		</section>

		<!-- ============ SPA END ============ -->

		<!-- ============ GOLF START ============ -->

		<section id="golf" class="row color3 home-section">
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Enjoy our 16 hole</h5>
					<h1>Golf Course</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus. Integer egestas quam non orci pharetra, vel accumsan ante tristique. Nullam elementum massa eget odio tristique varius. Vivamus id est nec dui auctor posuere. Maecenas eu pulvinar eros. Integer velit velit, faucibus eget accumsan a, sollicitudin in lorem. Nulla cursus vitae justo ut rutrum.<br><a href="golf.html">Read more...</a></p>
				</div></div>
			<div class="col-sm-5 col-md-6 col-lg-7 photo"></div>
		</section>

		<!-- ============ GOLF END ============ -->

		<!-- ============ SPECIAL OFFERS START ============ -->

		<section id="specials">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h5>Check Out our latest</h5>
						<h1>Tourist sites</h1>
						<div class="owl-carousel">

							<!-- Special Offer 1 -->
							<div class="special-offer">
								<img src="http://placehold.it/400x267.jpg" alt="" class="img-responsive" />
								<h4>Romantic Getaway</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus. Integer egestas quam non orci pharetra, vel accumsan ante tristique.</p>
								<p><a href="specials.html" class="btn btn-primary">Book Now</a></p>
								
							</div>

							<!-- Special Offer 2 -->
							<div class="special-offer">
								<img src="http://placehold.it/400x267.jpg" alt="" class="img-responsive" />
								<h4>Business Rate</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus. Integer egestas quam non orci pharetra, vel accumsan ante tristique.</p>
								<p><a href="specials.html" class="btn btn-primary">Book Now</a></p>
								
							</div>

							<!-- Special Offer 3 -->
							<div class="special-offer">
								<img src="http://placehold.it/400x267.jpg" alt="" class="img-responsive" />
								<h4>Family Weekend</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus. Integer egestas quam non orci pharetra, vel accumsan ante tristique.</p>
								<p><a href="specials.html" class="btn btn-primary">Book Now</a></p>
								
							</div>

							<!-- Special Offer 4 -->
							<div class="special-offer">
								<img src="http://placehold.it/400x267.jpg" alt="" class="img-responsive" />
								<h4>Spa Midweek</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus. Integer egestas quam non orci pharetra, vel accumsan ante tristique.</p>
								<p><a href="specials.html" class="btn btn-primary">Book Now</a></p>
								
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- ============ SPECIAL OFFERS END ============ -->

		<!-- ============ REVIEWS START ============ -->

		<section id="home-reviews" class="primary-background">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						
						<h1>About Us</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<?php 
						$about = $conn->query("SELECT * FROM aboutus");
						$about_us = $about->fetch(PDO::FETCH_OBJ);

						 ?>

							<!-- Latest Review 2 -->
							<div class="latest-review">
								<blockquote><?php echo "$about_us->content"; ?> <small>JALAL RAMZY for web service</small></blockquote>
							</div>

						
					</div>
				</div>
			
			</div>
		</section>

		<!-- ============ REVIEWS END ============ -->



		<!-- ============ FOOTER START ============ -->

		<?php 
		require 'footer.php';
		 ?>
		<!-- ============ FOOTER END ============ -->



<?php 	require 'scripts.php'; ?>
	</body>
</html>