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
									<li><a href="weddings.html"><i class="fa fa-angle-right primary-color"></i>Weddings</a></li>
									<li><a href="conferences.html"><i class="fa fa-angle-right primary-color"></i>Conferences</a></li>
									<li><a href="events.html"><i class="fa fa-angle-right primary-color"></i>Events</a></li>
									<li><a href="vouchers.html"><i class="fa fa-angle-right primary-color"></i>Gift Vouchers</a></li>
									<li><a href="contact.html"><i class="fa fa-angle-right primary-color"></i>Location</a></li>
									<li><a href="gallery.html"><i class="fa fa-angle-right primary-color"></i>Photo Gallery</a></li>
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
								The Traveller Hotel<br>
								8699 Santa Monica Blvd<br>
								Los Angeles, CA 90069-4109
							</p>
							<p>
								Phone: 1800-123-456<br>
								Fax:  1800-123-456<br>
								Email: info@smartway.com
							</p>
							<p>
								<a href="contact.html">Get Directions &nbsp; <i class="fa fa-angle-right"></i></a>
							</p>
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
							&copy; JALAL RAMZY .. web service
						</div>
						<!-- Copyright End -->

						<!-- Social Networks Start -->
						<div class="col-sm-6 text-right">
							<ul>
								<li><a href="<?php echo "$info->facebook"; ?>"><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href="<?php echo "$info->twitter"; ?>"><i class="fa fa-twitter fa-lg"></i></a></li>
								
								<li><a href="<?php echo "$info->skype"; ?>"><i class="fa fa-skype fa-lg"></i></a></li>
							</ul>
						</div>
						<!-- Social Networks End -->

					</div>
				</div>
			</div>
		</footer>
