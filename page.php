<?php 

require 'AdminArea/connection.php';

if(!isset($_GET['id']) || empty($_GET['id']))  {
	header("location: index.php");
	die();
}
$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
$page = $conn->prepare("SELECT * FROM sub_pages WHERE id = ?");
$page->bindValue(1,$id,PDO::PARAM_INT);
$page->execute();
if(!$page->rowCount()) {
	header("location: index.php");
	die();
}
$page_info = $page->fetch(PDO::FETCH_OBJ);

$page_pics = $conn->prepare("SELECT * FROM page_images WHERE page_id = ?");
$page_pics->bindValue(1,$id,PDO::PARAM_INT);
$page_pics->execute();



$clients =  $conn->prepare("SELECT * FROM clients");
$clients->execute();

require 'header.php';
?>



<!-- Start Page Banner -->
<div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2><?php echo $page_info->title_ar; ?></h2>
				
			</div>
			<div class="col-md-6">
				<ul class="breadcrumbs">
					<li><a href="#">الرئيسية</a></li>
					<li><?php echo $page_info->title_ar; ?></li>
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

				
				<div class="col-md-5"> 

					<!-- Start Touch Slider -->
					<div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
						<?php 
						while ($image = $page_pics->fetch(PDO::FETCH_OBJ)) {
							echo '<div class="item"><img alt="" width="100%" src="uploaded/pages/'.$image->image.'"></div>';
						}

						?>
					</div>
					<!-- End Touch Slider -->

				</div>


				<div class="col-md-7">

					<!-- Classic Heading -->
					<h4 class="classic-title text-right"><span><?php echo $page_info->title_ar; ?></span></h4>

					
					<p><?php echo html_entity_decode($page_info->content_ar); ?></p>

				</div>


			</div>

			<!-- Divider -->
			<div class="hr1" style="margin-bottom:50px;"></div>



			
			

			<!-- Divider -->
			<div class="hr1" style="margin-bottom:50px;"></div>

			<!-- Start Clients Carousel -->
			<div class="our-clients">

				<!-- Classic Heading -->
				<h4 class="classic-title text-right"><span>عملائنا</span></h4>

				<div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

					<?php 
					while ($client = $clients->fetch(PDO::FETCH_OBJ)) {
						echo  '<div class="client-item item">
						<a href="'.$client->link.'"><img src="uploaded/clients/'.$client->image.'" alt="" /></a>
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