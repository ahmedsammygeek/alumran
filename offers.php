<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="The Traveller - HTML Template">
	<meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
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
		<div id="loader">
			<i class="fa fa-cog fa-4x fa-spin primary-color"></i>
		</div>
		<!-- ============ LOADER END ============ -->
		<!-- ============ HEADER START ============ -->
		<?php require 'header.php'; ?>
		<!-- ============ HEADER END ============ -->

		<!-- ============ CONTENT START ============ -->

		<section id="content" class="color2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h5> الان تفقد اقوى </h5>
						<h1>القنادق و القرى السياحية </h1>
						<p> يمكنك هنا ان تجد ما يناسبك من القرى و الفنادق العالمية </p>
						<hr>
					</div>
				</div>
				<div class="row">

					<?php 

					require 'connection/connection.php';
					$hotels = $conn->prepare("SELECT H.*  , (SELECT pic
					 FROM hotel_images WHERE hotel_id = H.id LIMIT 1)
					  AS pic FROM hotels AS H WHERE H.hotel_or_not = 'no' ");
					$hotels->execute();

					while ($hotel = $hotels->fetch(PDO::FETCH_OBJ)) {
						echo '<div class="special-offer col-sm-6 col-md-4" style="float:right;">
						<img src="uploaded/hotels_images/'.$hotel->pic.'" alt="" class="img-responsive">
						<div class="description">
						<h4 class="text-right">'.$hotel->title_ar.'</h4>
						<p class="text-right" >'.substr(html_entity_decode(strip_tags($hotel->desc_ar)), 0 , 110).'...</p>
						<a href="offer.php?hotel_id='.$hotel->id.'"  class="btn btn-default ">تفاصيل </a>
						<a  href="reservation2.php?id='.$hotel->id.'" class="btn btn-primary pull-right">احجز الان </a>
						</div>
						</div>';
					}

					?>


				</div>
			</div>
		</section>

		<!-- ============ CONTENT END ============ -->
		<div id="reservation">	
			<div id="reservation-container" class="primary-background img-rounded">
				<button class="close"><i class="fa fa-remove fa-lg"></i></button>
				<h2>الحجز </h2>
				 
			</div>
		</div>
		<!-- ============ FOOTER START ============ -->




		<?php 
		require 'footer.php';

		?>
		<!-- ============ FOOTER END ============ -->

		<!-- ============ RESERVATION BAR START ============ -->

		<!-- ============ RESERVATION BAR END ============ -->
		<?php require 'scripts.php'; ?>
		<!-- // <script src="js/booking.js"></script> -->

	</body>
	</html>