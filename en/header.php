	<header>
		<?php 
		require 'popup.php';
		require '../connection/connection.php';
		$site_info = $conn->query("SELECT phone , email FROM site_info");
		$info = $site_info->fetch(PDO::FETCH_OBJ);
		?>
		<div id="header">
			<div class="container">
				<div class="row">
					<div id="logo" class="col-xs-4 col-sm-4">
						<a href="index.php"><img width="90" height="45" src="images/logo.jpg" alt="The Traveller. Modern hotel html template." class="img-responsive" /></a>
					</div>
					<div class="col-xs-4 col-sm-4">
						
						<p class="text-center hidden-sm hidden-xs" style="font-size:17px;font-weight:bold;color:white;line-height:74px">Alkayali for tourism and trading services</p>
					</div>

					<div class="col-xs-4 col-sm-4 text-right" id="hotel-info">
						<ul>
							<li  ><a  href="../index.php"><i class="fa fa-language fa-lg primary-color"></i>AR</a></li>
							<li id="hotel-phone"><a href="tel:<?php echo $info->phone; ?>"><i class="fa fa-phone fa-lg primary-color"></i></a></li>
							<li id="contcat-link" ><a id="contcat-link" href="mailto:<?php echo $info->email; ?>"><i class="fa fa-envelope fa-lg primary-color"></i></a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>

		<!-- Nav Start -->
		<nav>
			<div class="container">
				<ul class="jetmenu">
					<li class="active"><a href="index.php">Home</a>
					</li>
					<?php 
					$hotels = $conn->query("SELECT id FROM hotels WHERE hotel_or_not=1");
					$hotel = $hotels->fetch(PDO::FETCH_OBJ);
					$hotel_image = $conn->query("SELECT pic FROM hotel_images WHERE hotel_id=$hotel->id");
					$pic = $hotel_image->fetch(PDO::FETCH_OBJ); ?>
					<li><a href="#">Tourism</a>
						<div class="megamenu full-width">
							<div class="row">
								<div class="col-sm-3">
									<img src="../uploaded/hotels_images/<?php echo "$pic->pic"; ?>" alt="" class="img-responsive" />
									<h4>Hotel reservations</h4>
									<p>With hotel reservation service can identify the most important and best hotels scattered across Turkey with all the services provided by them and choose the right book</p>
									<p><a href="hotels.php" class="btn btn-primary">show</a></p>
								</div>
								<?php 
								$page5 = $conn->query("SELECT image FROM pages_images WHERE page_id=5");
								$image5 = $page5->fetch(PDO::FETCH_OBJ); ?>
								<div class="col-sm-3">
									<img src="../uploaded/pages_images/<?php echo "$image5->image"; ?>" alt="" class="img-responsive" />
									<h4>Flight Reservations</h4>
									<p>alkyaly Tourism Company and public services and the right hand guide that helps you to book airline tickets to and from anywhere in the world </p>
									<p><a href="page.php?page_id=5" class="btn btn-primary">Read more</a></p>
								</div>
								<?php 
								$page6 = $conn->query("SELECT image FROM pages_images WHERE page_id=6");
								$image6 = $page6->fetch(PDO::FETCH_OBJ); ?>
								<div class="col-sm-3">
									<img src="../uploaded/pages_images/<?php echo "$image6->image"; ?>" alt="" class="img-responsive" />
									<h4>Medical Tourism</h4>
									<p>alkyaly Tourism Company and General Services is pleased to offer medical tourism service in Turkey, Arab travelers to the brothers in the best hospitals in Istanbul </p>
									<p><a href="page.php?page_id=6" class="btn btn-primary">Read more</a></p>
								</div>
								<?php 
								$offers = $conn->query("SELECT id FROM hotels WHERE hotel_or_not =0");
								$offer = $offers->fetch(PDO::FETCH_OBJ);
								$offers_image = $conn->query("SELECT pic FROM hotel_images WHERE hotel_id=$offer->id");
								$offer_image = $offers_image->fetch(PDO::FETCH_OBJ);
								?>
								<div class="col-sm-3">
									<img src="../uploaded/hotels_images/<?php echo "$offer_image->pic"; ?>" alt="" class="img-responsive" />
									<h4>Offers</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus.</p>
									<p><a href="offers.php" class="btn btn-primary">Read more</a></p>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#">Investment</a>
						<div class="megamenu full-width">
							<div class="row">
								<?php 
								$page7 = $conn->query("SELECT image FROM pages_images WHERE page_id=7");
								$image7 = $page7->fetch(PDO::FETCH_OBJ);
								?>
								<div class="col-sm-3">
									<img src="../uploaded/pages_images/<?php echo "$image7->image"; ?>" alt="" class="img-responsive" />
									<h4>Investment projects</h4>
									<p>Construction company is keen to encourage investment by providing higher levels of service to investors at all times</p>
									<p><a href="page.php?page_id=7" class="btn btn-primary">Read more</a></p>
								</div>
								<?php 
								$page8 = $conn->query("SELECT image FROM pages_images WHERE page_id=8");
								$image8 = $page8->fetch(PDO::FETCH_OBJ);
								// if(!$page8->rowCount()) {
								// 	$image8->image = 'image.png';
								// }

								?>
								<div class="col-sm-3">
									<img src="../uploaded/pages_images/<?php echo "$image8->image"; ?>" alt="" class="img-responsive" />
									<h4>Economic Studies</h4>
									<p>The preparation of the initial economic feasibility studies is one of the services provided by the construction company for tourism and public services</p>
									<p><a href="page.php?page_id=8" class="btn btn-primary">Read more</a></p>
								</div>
								<?php 
								$page9 = $conn->query("SELECT image FROM pages_images WHERE page_id=9");
								$image9 = $page9->fetch(PDO::FETCH_OBJ);
								?>
								<div class="col-sm-3">
									<img src="../uploaded/pages_images/<?php echo "$image9->image"; ?>" alt="" class="img-responsive" />
									<h4> Brokerage business</h4>
									<p>The preparation of the initial economic feasibility studies is one of the services provided by the construction company for tourism and public services</p>
									<p><a href="page.php?page_id=9" class="btn btn-primary">Read more</a></p>
								</div>
								<?php 
								$page10 = $conn->query("SELECT image FROM pages_images WHERE page_id=10");
								$image10 = $page10->fetch(PDO::FETCH_OBJ);
								?>
								<div class="col-sm-3">
									<img src="../uploaded/pages_images/<?php echo "$image10->image"; ?>" alt="" class="img-responsive" />
									<h4>Machines-and-production lines.</h4>
									<p>Construction company seeking to put its engineers qualified expertise to serve its customers and help them understand and characterize and identify industrial needs</p>
									<p><a href="page.php?page_id=10" class="btn btn-primary">Read more</a></p>
								</div>
							</div>
						</div>
					</li>

					<li><a href="page.php?page_id=1">Rent cars</a>

					</li>

					<li><a href="page.php?page_id=2">Property</a>

					</li>

					<li><a href="page.php?page_id=3">Services</a>

					</li>


					<li><a href="page.php?page_id=4">Know on Turkey</a>

					</li>
				</ul>
			</div>
		</nav>
		<!-- Nav End -->



		

	</header>
