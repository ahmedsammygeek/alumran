<footer>
	<?php 
	require 'connection/connection.php';
	$site_info = $conn->query("SELECT * FROM site_info");
	$info = $site_info->fetch(PDO::FETCH_OBJ);
	?>
	<div id="widgets">
		<div class="container">
			<div class="row">

				
				<!-- Contact Start -->
				<div class="col-sm-3 widget">
					<h4> تواصل معنا </h4>
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

				<div class="col-sm-3 widget text-right">
					<h4>القائمة البريدية</h4>
					<form role="form" id="newsletter-form" action="insert_newsletter.php" method="post">
						<div class="form-group" id="newsletter-name-group">
							<label class="sr-only" for="newsletter-name">الاسم</label>
							<input type="text" class="form-control" id="newsletter-name" placeholder="الاسم">
						</div>
						<div class="form-group" id="newsletter-email-group">
							<label class="sr-only" for="newsletter-email">البريد</label>
							<input type="email" class="form-control" id="newsletter-email" placeholder="البريد">
						</div>
						<input type="submit" name="submit" class="btn btn-primary" value="اشترك الان">
					</form>
				</div>

				<div class="col-sm-3 widget text-right">
					<h4>روابط سريعة </h4>
					<nav>
						<ul>
							<li><a href="hotels.php"></i>الفنادق</a></li>
							<li><a href="offers.php"></i>العروض</a></li>
							<li><a href="page.php?page_id=4"></i>تعرف على تركيا</a></li>
							<li><a href="page.php?page_id=1"></i> تاجير السيارات </a></li>
							<li><a href="page.php?page_id=2"></i>عقارات</a></li>
							<li><a href="page.php?page_id=3"></i>الخدمات</a></li>
						</ul>
					</nav>
				</div>

				<div class="col-sm-3 widget text-right">
					<h4>العنوان</h4>
					<p class="text-right"><?php echo "$info->address_ar"; ?></p>
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
