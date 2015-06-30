<?php 



require '../AdminArea/connection.php';



require 'header.php';





$clients =  $conn->prepare("SELECT * FROM clients");

$clients->execute();



?>







<!-- Start Page Banner -->

<div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">

	<div class="container">

		<div class="row">

			<div class="col-md-6">

				<h2>About Us</h2>

				<p>We Are Professional</p>

			</div>

			<div class="col-md-6">

				<ul class="breadcrumbs">

					<li><a href="index.php">Home</a></li>

					<li>About Us</li>

				</ul>

			</div>

		</div>

	</div>

</div>

<!-- End Page Banner -->









<!-- Start Content -->

<div id="content">

	<div class="container">

		<div class="page-content">





			<div class="row">



				<div class="col-md-10">



					<!-- Classic Heading -->

					<h4 class="classic-title"><span>Who We Are !</span></h4>



					

					<p><?php echo html_entity_decode($info->about); ?></p>



				</div>



		



			</div>



			<!-- Divider -->

			<div class="hr1" style="margin-bottom:50px;"></div>







			

			



			<!-- Divider -->

			<div class="hr1" style="margin-bottom:50px;"></div>



			<!-- Start Clients Carousel -->

			<div class="our-clients">



				<!-- Classic Heading -->

				<h4 class="classic-title"><span>Our Happy Clients</span></h4>



				<div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">



					<?php 

					while ($client = $clients->fetch(PDO::FETCH_OBJ)) {

						echo  '<div class="client-item item">

						<a href="'.$client->link.'"><img src="../uploaded/clients/'.$client->image.'" alt="" /></a>

						</div>';

					}

					?>



				</div>

			</div>

			<!-- End Clients Carousel -->





		</div>

	</div>

</div>

<!-- End content -->





<?php 



require 'footer.php';

?>