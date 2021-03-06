<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content_ar="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content_ar="The Traveller - HTML Template">
	<meta name="author" content_ar="Coffeecream Themes, info@coffeecream.eu">
	<title>الكيالى  للخدمات السياحة و التجارية</title>
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

		<!-- <div id="loader">
			<i class="fa fa-cog fa-4x fa-spin primary-color"></i>
		</div> -->

		<!-- ============ LOADER END ============ -->

		<!-- ============ HEADER START ============ -->

		<?php 
		require 'header.php';
		require 'connection/connection.php'; 
		?>
		<!-- ============ HEADER END ============ -->

		<!-- ============ VIDEO START ============ -->

		<div id="video">
			<video loop autoplay >
				<source src="vidoz/22.mp4" type="video/mp4" />
				<source src="vidoz/sta.m4v" type="video/m4v" />
				<source src="vidoz/mob.webm" type="video/webm" />
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
					<h5>مرحبا بك </h5>
					<h1><?php echo "$result1->title_ar"; ?></h1>
					<p><?php echo "$result1->content_ar"; ?></p>

				</div>
			</div>
			<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(uploaded/index_image/<?php echo $result1->image; ?>)">
				
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
			<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(uploaded/index_image/<?php echo $result2->image; ?>)">
				
			</div>
			<div class="col-sm-7 col-md-6 col-lg-5 text">
				<div class="padding">
					<h5>تفقد الان  المنتجعات </h5>
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
					<h5>تمتع بالذ الوجبات على الاطلاق </h5>
					<h1><?php echo "$result3->title_ar"; ?></h1>
					<p><?php echo "$result3->content_ar"; ?></p>
					
				</div></div>
				<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(uploaded/index_image/<?php echo $result3->image; ?>)">

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
				<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(uploaded/index_image/<?php echo $result4->image; ?>)">

				</div>
				<div class="col-sm-7 col-md-6 col-lg-5 text">
					<div class="padding">
						<h5>استرخى الان لابعد الحدود </h5>
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
							<h5>تمتع بارقى الفنادق</h5>
							<h1><?php echo "$result5->title_ar"; ?></h1>
							<p><?php echo "$result5->content_ar"; ?></p>

						</div></div>
						<div class="col-sm-5 col-md-6 col-lg-7 photo" style="background-image:url(uploaded/index_image/<?php echo $result5->image; ?>)">

						</div>
					</section>

					<!-- ============ GOLF END ============ -->

					<!-- ============ SPECIAL OFFERS START ============ -->

					<section id="specials">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h5> الان تمتع بالعروض السياحية التى يتم تقديمها </h5>
									<h1>العروض السياحية </h1>
									<div class="owl-carousel">
										
										<?php 
										$show = $conn->query("SELECT id , title_ar , `desc` FROM hotels WHERE hotel_or_not=1");
										while ($res = $show->fetch(PDO::FETCH_OBJ)) {
											$small_desc = substr(strip_tags($res->desc_ar), 0 , 50);
											$hotel_img = $conn->query("SELECT pic FROM hotel_images WHERE hotel_id=$res->id");
											$res2 = $hotel_img->fetch(PDO::FETCH_OBJ);
											echo '<div class="special-offer">';
											echo '<img src="uploaded/hotels_images/'.$res2->pic.'" alt="" width="400" height="267" class="img-responsive" />
											<h4>'.$res->title_ar.'</h4>
											<p>'.$small_desc.'</p>
											<p><a href="offer.php?hotel_id='.$res->id.'" class="btn btn-primary">التفاصيل </a></p>
											' ;
											echo'</div>
											' ;
										}

										?>

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

									<h1>من نحن </h1>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 text-right">
									<?php 
									$about = $conn->query("SELECT * FROM aboutus");
									$about_us = $about->fetch(PDO::FETCH_OBJ);

									?>

									<!-- Latest Review 2 -->
									<div class="latest-review">
										<blockquote><?php echo $about_us->content_ar; ?> <small>JALAL alloz for web service</small></blockquote>
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