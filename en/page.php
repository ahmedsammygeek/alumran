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