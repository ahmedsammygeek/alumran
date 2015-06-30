<?php 
$page_id = filter_input(INPUT_GET, 'page_id' , FILTER_SANITIZE_NUMBER_INT);
if(!$page_id) {
	header('location: index.php');
	die;
}

require '../connection/connection.php';
$page = $conn->prepare("SELECT * FROM pages WHERE id = ?");
$page->bindValue(1,$page_id , PDO::PARAM_INT);
$page->execute();
if(!$page->rowCount()) {
	header('location: index.php');
	die;
}
$page_details = $page->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="The Traveller - HTML Template">
	<meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
	<title>The Traveller - <?php echo $page_details->page_name; ?></title>
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
						<!-- <h5>Relax &amp; Enjoy</h5> -->
						<h1><?php echo $page_details->title; ?></h1>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12 text-center">
						<hr>				
						<!-- Gallery Start -->
						<div class="fotorama" data-nav="thumbs" data-loop="true">
							<?php 


							$page_images = $conn->prepare("SELECT image FROM pages_images WHERE page_id = ?");
							$page_images->bindValue(1,$page_id,PDO::PARAM_INT);
							$page_images->execute();

							while ($page_image = $page_images->fetch(PDO::FETCH_OBJ)) {
								echo '<img src="../uploaded/pages_images/'.$page_image->image.'" alt="" />';
							}
							?>
							
						</div>
						<!-- Gallery End -->

					</div>
				</div>

				<div class="row">
					
					<div class="col-sm-6">
						<?php echo html_entity_decode($page_details->descreption); ?>
					</div>

					<div class="col-sm-6">
						<div class="embed-responsive embed-responsive-16by9">
							<!-- <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/46751897"></iframe> -->
						</div>
					</div>
					<?php if($page_id == 4)  {?>

					<div class="col-xs-6"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $page_details->video1; ?>" frameborder="0" allowfullscreen></iframe> </div>
					<div class="col-xs-6"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $page_details->video2; ?>" frameborder="0" allowfullscreen></iframe> </div>
					<div class="col-xs-6"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $page_details->video3; ?>" frameborder="0" allowfullscreen></iframe> </div>
					<div class="col-xs-6"> <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $page_details->video4; ?>" frameborder="0" allowfullscreen></iframe> </div>

				
					
					 
					 <?php } ?>
					<div class="col-md-12">

						<?php 
						if (isset($_GET['msg'])) {

							switch ($_GET['msg']) {
								case 'erro':	
								echo '<div class="alert alert-danger alert-dismissable">
								<i class="fa fa-ban"></i>
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<b>Alert!</b> please try again .
								</div>';
								break;
								case 'name':
								case 'email':
								case 'msg':
								case 'address':
								case 'phone':
								echo '<div class="alert alert-danger alert-dismissable">
								<i class="fa fa-ban"></i>
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<b>Alert!</b> error  , please complete required data.
								</div>';
								break;
								
								case 'emailIN':
								echo '<div class="alert alert-danger alert-dismissable">
								<i class="fa fa-ban"></i>
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<b>Alert!</b> erro  , please enter A valid email
								</div>';
								break;

								case 'done':
								echo '<div class="alert alert-success alert-dismissable">
								<i class="fa fa-check"></i>

								<b>Alert!</b> reservation send successfully.
								</div>' ;
								break;


								case 'deleted':
								echo '<div class="alert alert-success alert-dismissable">
								<i class="fa fa-check"></i>

								<b>Alert!</b> data deleted successfully. we will call you very soon 
								</div>' ;
								break;

							}
						}


						?>
						<h2 class="text-center"> book now with Alkayali </h2>
						<form id="res_form" action="book-page.php?id=<?php echo $page_id; ?>" method="post">
							<div class="row">
								<div class="form-group col-sm-6" id="booking-name">
									<label for="booking-name">Your Name</label>
									<input type="text" name="name" class="form-control"  >
								</div>
								<div class="form-group col-sm-6" id="booking-address">
									<label for="booking-company">address</label>
									<input type="text" name="address" class="form-control" >
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-6" id="booking-email">
									<label for="booking-email">Email</label>
									<input type="email" name="email" class="form-control" id="booking-email">
								</div>
								<div class="form-group col-sm-6" id="booking-phone">
									<label for="booking-phone">Phone</label>
									<input type="phone" name="phone" class="form-control" id="booking-phone">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-12" id="booking-msg">
									<label for="booking-phone">Phone</label>
									<textarea name="msg" id="" class="form-control" cols="20" rows="4"></textarea>

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


				
			</div>
		</section>

		<!-- ============ CONTENT END ============ -->



		<!-- ============ FOOTER START ============ -->

		<?php require 'footer.php'; ?>
		<!-- ============ FOOTER END ============ -->

		<!-- ============ RESERVATION BAR START ============ -->


		<!-- ============ RESERVATION BAR END ============ -->
		<?php require 'scripts.php'; ?>

		<script src="js/fotorama.js"></script>
	</body>
	</html>