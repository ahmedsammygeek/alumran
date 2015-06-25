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
						<div id="logo" class="col-xs-8 col-sm-4">
							<a href="index.php"><img width="259" height="45" src="images/1.png" alt="The Traveller. Modern hotel html template." class="img-responsive" /></a>
						</div>
						<div class="col-xs-4 col-sm-8 text-right" id="hotel-info">
							<ul>
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
						<li><a href="#">Tourism</a>
							<div class="megamenu full-width">
								<div class="row">
									<div class="col-sm-3">
										<img src="http://placehold.it/400x270.jpg" alt="" class="img-responsive" />
										<h4>Hotel reservations</h4>
										<p>With hotel reservation service can identify the most important and best hotels scattered across Turkey with all the services provided by them and choose the right book</p>
										<p><a href="hotels.php" class="btn btn-primary">show</a></p>
									</div>
									<div class="col-sm-3">
										<img src="http://placehold.it/400x270.jpg" alt="" class="img-responsive" />
										<h4>Flight Reservations</h4>
										<p>Omran Tourism Company and public services and the right hand guide that helps you to book airline tickets to and from anywhere in the world </p>
										<p><a href="suite.html" class="btn btn-primary">Read more</a></p>
									</div>
									<div class="col-sm-3">
										<img src="http://placehold.it/400x270.jpg" alt="" class="img-responsive" />
										<h4>Medical Tourism</h4>
										<p>Omran Tourism Company and General Services is pleased to offer medical tourism service in Turkey, Arab travelers to the brothers in the best hospitals in Istanbul </p>
										<p><a href="double.html" class="btn btn-primary">Read more</a></p>
									</div>
									<div class="col-sm-3">
										<img src="http://placehold.it/400x270.jpg" alt="" class="img-responsive" />
										<h4>Single Rooms</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu lacus sed neque auctor cursus.</p>
										<p><a href="single.html" class="btn btn-primary">Read more</a></p>
									</div>
								</div>
							</div>
						</li>
						<li><a href="#">Investment</a>
							<div class="megamenu full-width">
								<div class="row">
									<div class="col-sm-3">
										<img src="http://placehold.it/400x270.jpg" alt="" class="img-responsive" />
										<h4>Investment projects</h4>
										<p>Construction company is keen to encourage investment by providing higher levels of service to investors at all times</p>
										<p><a href="dining.html" class="btn btn-primary">Read more</a></p>
									</div>
									<div class="col-sm-3">
										<img src="http://placehold.it/400x270.jpg" alt="" class="img-responsive" />
										<h4>Economic Studies</h4>
										<p>The preparation of the initial economic feasibility studies is one of the services provided by the construction company for tourism and public services</p>
										<p><a href="restaurant.html" class="btn btn-primary">Read more</a></p>
									</div>
									<div class="col-sm-3">
										<img src="http://placehold.it/400x270.jpg" alt="" class="img-responsive" />
										<h4> Brokerage business</h4>
										<p>The preparation of the initial economic feasibility studies is one of the services provided by the construction company for tourism and public services</p>
										<p><a href="bar.html" class="btn btn-primary">Read more</a></p>
									</div>
									<div class="col-sm-3">
										<img src="http://placehold.it/400x270.jpg" alt="" class="img-responsive" />
										<h4>Machines-and-production lines.</h4>
										<p>Construction company seeking to put its engineers qualified expertise to serve its customers and help them understand and characterize and identify industrial needs</p>
										<p><a href="poolside.html" class="btn btn-primary">Read more</a></p>
									</div>
								</div>
							</div>
						</li>
						
						<li><a href="#">Rent cars</a>
							
						</li>

						<li><a href="#">Property</a>
							
						</li>

						<li><a href="#">Services</a>
							
						</li>


						<li><a href="#">Know on Turkey</a>
							
						</li>
					</ul>
				</div>
			</nav>
			<!-- Nav End -->



		

		</header>
