<footer>
	<?php 
	require '../connection/connection.php';
	$site_info = $conn->query("SELECT * FROM site_info");
	$info = $site_info->fetch(PDO::FETCH_OBJ);
	?>
	<div id="widgets">
		<div class="container">
			<div class="row">

				<!-- About Us Start -->
				<div class="col-sm-3 widget">
					<h4>Address</h4>
					<p><?php echo "$info->address"; ?></p>
				</div>
				<!-- About Us End -->

				<!-- Quick Links Start -->
				<div class="col-sm-3 widget">
					<h4>Quick links</h4>
					<nav>
						<ul>
							<li><a href="hotels.php"><i class="fa fa-angle-right primary-color"></i>hotels</a></li>
							<li><a href="offers.php"><i class="fa fa-angle-right primary-color"></i>offers</a></li>
							<li><a href="page.php?page_id=4"><i class="fa fa-angle-right primary-color"></i>Know about turkey</a></li>
							<li><a href="page.php?page_id=1"><i class="fa fa-angle-right primary-color"></i>cars</a></li>
							<li><a href="page.php?page_id=2"><i class="fa fa-angle-right primary-color"></i>property</a></li>
							<li><a href="page.php?page_id=3"><i class="fa fa-angle-right primary-color"></i>VIP</a></li>
						</ul>
					</nav>
				</div>
				<!-- Quick Links End -->

				<!-- Newsletter Start -->
				<div class="col-sm-3 widget">
					<h4>Newsletter</h4>
					<form role="form" id="newsletter-form" action="insert_newsletter.php" method="post">
						<div class="form-group" id="newsletter-name-group">
							<label class="sr-only" for="newsletter-name">Name</label>
							<input type="text" class="form-control" id="newsletter-name" placeholder="name">
						</div>
						<div class="form-group" id="newsletter-email-group">
							<label class="sr-only" for="newsletter-email">Email</label>
							<input type="email" class="form-control" id="newsletter-email" placeholder="email">
						</div>
						<input type="submit" name="submit" class="btn btn-primary" value="Subscribe">
					</form>
				</div>
				<!-- Newsletter End -->

				<!-- Contact Start -->
				<div class="col-sm-3 widget">
					<h4>Contact</h4>
					<p>
						Phone: <?php echo "$info->phone"; ?><br>
						Email: <?php echo "$info->email"; ?>
					</p>
					<div  class="col-sm-12 social-iconss">
					<ul>
						<li><a href="<?php echo "$info->facebook"; ?>"><i class="fa fa-facebook fa-lg"></i></a></li>
						<li><a href="<?php echo "$info->twitter"; ?>"><i class="fa fa-twitter fa-lg"></i></a></li>

						<li><a href="<?php echo "$info->skype"; ?>"><i class="fa fa-skype fa-lg"></i></a></li>
					</ul>
				</div>
				</div>
				<!-- Contact End -->

			</div>
		</div>
	</div>
	<div id="credits">
		<div class="container">
			<div class="row">

				<!-- Copyright Start -->
				<div class="col-sm-6">
					<a href="mailto:jalal.allowz@gmail.com">jalal allowz for web service</a>
					
				</div>
				<!-- Copyright End -->

				
			</div>
		</div>
	</div>
</footer>

<div id="concat_form">	
	<div id="reservation-container" class="primary-background img-rounded">
		<button class="close"><i class="fa fa-remove fa-lg"></i></button>
		<h2>Contat us</h2>
		<form  action="send_mail_to_us.php" method="post" >
			<div class="row" >
				<div class="form-group col-sm-6" id="booking-name">
					<label for="booking-name">Your Name</label>
					<input type="text" name="name" class="form-control" >
				</div>
				<div class="form-group col-sm-6" id="booking-address">
					<label for="booking-company">phone</label>
					<input type="text" name="phone" class="form-control" >
				</div>
			</div>

			<div class="row" >
				<div class="form-group col-sm-12" id="booking-name">
					<label for="booking-name">email</label>
					<input type="text" name="email" class="form-control" >
				</div>
			</div>

			<div class="row">
				<div class="form-group col-sm-12" id="booking-msg">
					<label for="booking-phone">message</label>
					<textarea name="msg" id="" class="form-control" cols="30" rows="4"></textarea>
					
				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-12">
					<button type="submit" class="btn color3">Book Now</button>
				</div>
			</div>
		</form>
	</div>
</div>
