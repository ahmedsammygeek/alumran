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
					<div class="col-sm-12 text-center">
						<h5>Book a Room</h5>
						<h1>Reservation</h1>
						<div class="alert alert-warning" role="alert"><strong>This is not a real working form!</strong><br>This is an example form for a demo purpose only.</div>
					</div>
				</div>
				<form>
					<h4>Reservation Details</h4>
					<div class="row">
						<div class="form-group has-feedback col-sm-6">
							<label for="booking-arrival">Arrival</label>
							<input type="text" class="form-control" id="booking-arrival">
							<i class="fa fa-calendar form-control-feedback" aria-hidden="true"></i>
						</div>
						<div class="form-group has-feedback col-sm-6">
							<label for="booking-departure">Departure</label>
							<input type="text" class="form-control" id="booking-departure">
							<i class="fa fa-calendar form-control-feedback" aria-hidden="true"></i>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
								<label for="booking-type">Room type</label>
								<select class="form-control" id="booking-type">
									<option>Choose</option>
									<option>Royal Suite</option>
									<option>Executive Suite</option>
									<option>Double Room</option>
									<option>Single Room</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="booking-rooms">No. of Rooms</label>
								<select class="form-control" id="booking-rooms">
									<option>Choose</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="booking-adults">Adults</label>
								<select class="form-control" id="booking-adults">
									<option>Choose</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label for="booking-children">Children</label>
								<select class="form-control" id="booking-children">
									<option>Choose</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>
						</div>
					</div>
					<hr>
					<h4>Payment Details</h4>
					<div class="row">
						<div class="form-group col-sm-3">
							<label for="booking-card-type">Credit Card Type</label>
							<select class="form-control" id="booking-card-type">
								<option>Choose</option>
								<option>Visa</option>
								<option>Master Card</option>
								<option>Maestro</option>
								<option>American Express</option>
							</select>
						</div>
						<div class="form-group col-sm-6">
							<label for="booking-card-number">Credit Card Number</label>
							<input type="text" class="form-control" id="booking-card-number">
						</div>
						<div class="form-group col-sm-3">
							<label for="booking-ccv">CCV Number</label>
							<input type="text" class="form-control" id="booking-ccv">
						</div>
					</div>
					<hr>
					<h4>Personal Details</h4>
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="booking-name">Your Name</label>
							<input type="text" class="form-control" id="booking-name">
						</div>
						<div class="form-group col-sm-6">
							<label for="booking-company">Company Name (Optional)</label>
							<input type="text" class="form-control" id="booking-company">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="booking-email">Email</label>
							<input type="email" class="form-control" id="booking-email">
						</div>
						<div class="form-group col-sm-6">
							<label for="booking-phone">Phone</label>
							<input type="phone" class="form-control" id="booking-phone">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="booking-address1">Address Line 1</label>
							<input type="text" class="form-control" id="booking-address1">
						</div>
						<div class="form-group col-sm-6">
							<label for="booking-address2">Address Line 2 (Optional)</label>
							<input type="text" class="form-control" id="booking-address2">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-2">
							<label for="booking-zipcode">Zipcode</label>
							<input type="text" class="form-control" id="booking-zipcode">
						</div>
						<div class="form-group col-sm-4">
							<label for="booking-city">City</label>
							<input type="text" class="form-control" id="booking-city">
						</div>
						<div class="form-group col-sm-6">
							<label for="booking-country">Country</label>
							<input type="text" class="form-control" id="booking-country">
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-primary">Book Now</button>
						</div>
					</div>
				</form>
			</div>
		</section>

		<!-- ============ CONTENT END ============ -->

		<!-- ============ FOOTER START ============ -->

<?php require 'footer.php'; ?>
		<!-- ============ FOOTER END ============ -->

		<!-- ============ RESERVATION BAR START ============ -->

		<!-- ============ RESERVATION BAR END ============ -->

		<?php require 'scripts.php'; ?>

	</body>
</html>