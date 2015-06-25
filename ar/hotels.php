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
		<?php require 'header.php'; ?>
		<!-- ============ HEADER END ============ -->

		<!-- ============ CONTENT START ============ -->

		<section id="content" class="color2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h5>Check out our</h5>
						<h1>Hotels &amp; rooms </h1>
						<p>here you can find the best plaes to stay in</p>
						<hr>
					</div>
				</div>
				<div class="row">

					<div class="special-offer col-sm-6 col-md-4">
						<img src="http://placehold.it/900x600.jpg" alt="" class="img-responsive">
						<div class="description">
							<h4>Long Weekend</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus. Integer egestas quam non orci.</p>
							<a href="hotel.php"  class="btn btn-default">Details</a>
							<a name="book_now_button" id="reservation-link" data-hotel-id='3' class="btn btn-primary">Book Now</a>

						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- ============ CONTENT END ============ -->
		<div id="reservation">	
			<div id="reservation-container" class="primary-background img-rounded">
				<button class="close"><i class="fa fa-remove fa-lg"></i></button>
				<h2>Reservation</h2>
				<form id="res_form">
					
					<div class="row">
						<div class="form-group col-sm-6" id="booking-name">
							<label for="booking-name">Your Name</label>
							<input type="text" name="username" class="form-control"  >
						</div>
						<div class="form-group col-sm-6" id="booking-address">
							<label for="booking-company">address</label>
							<input type="text" name="useraddress" class="form-control" >
						</div>
					</div>

					<div class="row">
						<div class="form-group col-sm-6" id="booking-email">
							<label for="booking-email">Email</label>
							<input type="email" name="useremail" class="form-control" id="booking-email">
						</div>
						<div class="form-group col-sm-6" id="booking-phone">
							<label for="booking-phone">Phone</label>
							<input type="phone" name="userphone" class="form-control" id="booking-phone">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-12" id="booking-msg">
							<label for="booking-phone">Phone</label>
							<textarea name="usermsg" id="" class="form-control" cols="20" rows="4"></textarea>
							
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" name="book_this_hotel" class="btn color3">Book Now</button>
						</div>
					</div>
				</form>
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
		<script src="js/booking.js"></script>

	</body>
	</html>