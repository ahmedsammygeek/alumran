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

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<h5>Rooms &amp; Suites</h5>
						<h1>Single Room</h1>

						<!-- Gallery Start -->
						<div class="fotorama" data-nav="thumbs" data-loop="true">
							<img src="http://placehold.it/900x600.jpg" alt="" />
							<img src="http://placehold.it/900x600.jpg" alt="" />
							<img src="http://placehold.it/900x600.jpg" alt="" />
							
						</div>
						<!-- Gallery End -->

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec erat ac orci maximus gravida in vitae nisi. Nam quis dolor eros. Etiam nisi dui, ornare ac maximus id, malesuada eget tellus. Nulla eget dolor cursus, consectetur purus vitae, commodo leo. Aliquam erat volutpat. Suspendisse elementum, risus eu facilisis luctus, lectus velit tempus turpis, et pulvinar nulla sem et nunc. Nunc ultricies erat et ipsum sollicitudin pellentesque. Ut lacinia bibendum posuere. Suspendisse dolor urna, pharetra vel enim et, maximus volutpat mi.</p>
						<p>
							<a name="book_now_button" data-hotel-id='9' class="btn btn-primary" id="reservation-link">Book This Room</a>
							<a href="hotels.php"  class="btn btn-default">View Other Rooms</a>
						</p>
					</div>
					<div class="col-sm-4">
						<h4>Room Amenities</h4>
						<ul class="amenities">
							<li>
								<span class="icon-fontic-hotel-double-bed pull-left"></span>
								<h6>King Size Bed</h6>
								<p>With best available matress</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-swimming-pool pull-left"></span>
								<h6>Swimming Pool</h6>
								<p>Free access 24/7</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-safe pull-left"></span>
								<h6>Safe</h6>
								<p>Keep your belongings secured</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-controller pull-left"></span>
								<h6>Media &amp; Games</h6>
								<p>Including 55" LED TV</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-airport pull-left"></span>
								<h6>Airport Transport</h6>
								<p>Shuttle or a limousine</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-snowflake pull-left"></span>
								<h6>Air Condition</h6>
								<p>Keep it cool</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-bathtube pull-left"></span>
								<h6>Bathtub</h6>
								<p>Relax and enjoy long bath</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-champaigne pull-left"></span>
								<h6>Champaigne</h6>
								<p>With complements on arrival</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-restaurant pull-left"></span>
								<h6>Dinner</h6>
								<p>Every evening meal for two</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-non-stop pull-left"></span>
								<h6>24h room service</h6>
								<p>At your service anytime</p>
							</li>
							<li>
								<span class="icon-fontic-hotel-pet pull-left"></span>
								<h6>Pet friendly</h6>
								<p>Take your best friend with you</p>
							</li>
						</ul>
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

		<?php require 'footer.php'; ?>

		<!-- ============ FOOTER END ============ -->

		<!-- ============ RESERVATION BAR START ============ -->

		
		<!-- ============ RESERVATION BAR END ============ -->
<?php require 'scripts.php'; ?>
	<script src="js/fotorama.js"></script>
	<script src="js/booking.js"></script>

	</body>
</html>