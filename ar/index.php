<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Traveller - HTML Template">
		<meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
		<title>الكيالى | الصفحة الرئيسية</title>
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

	<?php 
	require 'header.php';
	require '../connection/connection.php'; 
	?>
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
		<?php 
		/*data of index page*/
		$query1   = $conn->query("SELECT * FROM website_home WHERE id=1");
		$result1  = $query1->fetch(PDO::FETCH_OBJ); 
		?>

		<!-- ============ WELCOME START ============ -->

		<section id="welcome" class="row color2 home-section">
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Welcome to</h5>
					<h1><?php echo "$result1->title_ar"; ?></h1>
					<p><?php echo "$result1->content_ar"; ?></p>

				</div>
			</div>
			<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(../uploaded/index_image/<?php echo $result1->image; ?>)">
				
			</div>
		</section>

		<!-- ============ WELCOME END ============ -->
		<?php 
		/*data of index page*/
		$query2   = $conn->query("SELECT * FROM website_home WHERE id=2");
		$result2  = $query2->fetch(PDO::FETCH_OBJ); 
		?>

		<!-- ============ ROOMS START ============ -->

		<section id="rooms" class="row color3 home-section">
			<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(../uploaded/index_image/<?php echo $result2->image; ?>)">
				
			</div>
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Check out our</h5>
					<h1><?php echo "$result2->title_ar"; ?></h1>
					<p><?php echo "$result2->content_ar"; ?></p>
					
				</div>
			</div>
		</section>

		<!-- ============ ROOMS END ============ -->
		<?php 
		/*data of index page*/
		$query3   = $conn->query("SELECT * FROM website_home WHERE id=3");
		$result3  = $query3->fetch(PDO::FETCH_OBJ); 
		?>

		<!-- ============ RESTAURANT START ============ -->

		<section id="restaurant" class="row home-section">
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Fine dining at our</h5>
					<h1><?php echo "$result3->title_ar"; ?></h1>
					<p><?php echo "$result3->content_ar"; ?></p>
					
				</div></div>
			<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(../uploaded/index_image/<?php echo $result3->image; ?>)">
				
			</div>
		</section>

		<!-- ============ RESTAURANT END ============ -->
		<?php 
		/*data of index page*/
		$query4   = $conn->query("SELECT * FROM website_home WHERE id=4");
		$result4  = $query4->fetch(PDO::FETCH_OBJ); 
		?>

		<!-- ============ SPA START ============ -->

		<section id="spa" class="row color2 home-section">
			<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(../uploaded/index_image/<?php echo $result4->image; ?>)">
				
			</div>
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Relax at our</h5>
					<h1><?php echo "$result4->title_ar"; ?></h1>
					<p><?php echo "$result4->content_ar"; ?></p>
					
				</div></div>
		</section>

		<!-- ============ SPA END ============ -->
		<?php 
		/*data of index page*/
		$query5   = $conn->query("SELECT * FROM website_home WHERE id=5");
		$result5  = $query5->fetch(PDO::FETCH_OBJ); 
		?>

		<!-- ============ GOLF START ============ -->

		<section id="golf" class="row color3 home-section">
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>Enjoy our 16 hole</h5>
					<h1><?php echo "$result5->title_ar"; ?></h1>
					<p><?php echo "$result5->content_ar"; ?></p>
					
				</div></div>
			<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(../uploaded/index_image/<?php echo $result5->image; ?>)">
				
			</div>
		</section>

		<!-- ============ GOLF END ============ -->

		<!-- ============ SPECIAL OFFERS START ============ -->

		<section id="specials">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1>مواقع سياحية</h1>
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
						
						<h1>عن شركتنا</h1>
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
								<blockquote><?php echo "$about_us->content_ar"; ?> <small>JALAL RAMZY for web service</small></blockquote>
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