<?php 

$hotel_id = filter_input(INPUT_GET, 'hotel_id' , FILTER_SANITIZE_NUMBER_INT);

if(!$hotel_id) {
	header('location: hotels.php');
	die;
}

require '../connection/connection.php';

$hotel = $conn->prepare("SELECT * FROM hotels WHERE id = ?");
$hotel->bindValue(1, $hotel_id , PDO::PARAM_INT);
$hotel->execute();

if(!$hotel->rowCount()) {
	header('location: hotels.php');
	die;
}

$details = $hotel->fetch(PDO::FETCH_OBJ);

$hotel_images = $conn->prepare("SELECT * FROM hotel_images WHERE hotel_id = ?");
$hotel_images->bindValue(1,$hotel_id , PDO::PARAM_INT);
$hotel_images->execute();





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="The Traveller - HTML Template">
	<meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
	<title>الكيالى للخدمات السياحة و التجارية</title>
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
					<div class="col-sm-8" dir="rtl">
						<h5>Hotels &amp; Suites</h5>
						<h1><?php echo $details->title; ?></h1>
						<!-- Gallery Start -->
						<div class="fotorama" data-nav="thumbs" data-loop="true">
							<?php 
							while ($hotel_image = $hotel_images->fetch(PDO::FETCH_OBJ)) {
								echo '<img src="../uploaded/hotels_images/'.$hotel_image->pic.'" alt="hotel image" />';
							}
							?>						
							</div>
						<!-- Gallery End -->
						<p><?php echo html_entity_decode($details->desc); ?></p>
						<p>
							<a href="reservation.php?id=<?php echo $details->id; ?>" data-hotel-id='<?php echo $details->id; ?>' class="btn btn-primary" >Book This Hotel</a>
							<a href="hotels.php"  class="btn btn-default">View Other Rooms</a>
						</p>
					</div>
					<div class="col-sm-4" dir="rtl">
						<h4>مميزات الفندق</h4>
						
						<ul class="amenities">
							<?php 
							if($details->BED == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-double-bed pull-left"></span>
								<h6>سرير بحجم كبير</h6>
								<p>مع أفضل ماتريس متاح</p>
								</li>';
							}
							if($details->POOL == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-swimming-pool pull-left"></span>
								<h6>حمام السباحة</h6>
								<p>حرية الوصول 24/7</p>
							</li>';
							}

							if($details->SAFE == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-safe pull-left"></span>
								<h6>آمن</h6>
								<p>الحفاظ على ممتلكاتهم الخاصة بك أمنت</p>
							</li>';
							}

							if($details->GAMES == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-controller pull-left"></span>
								
								<h6>وسائل الإعلام &amp; ألعاب</h6>
								
							</li>';
							}
							if($details->TRANSPORT == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-airport pull-left"></span>
								<h6>نقل المطار</h6>
								<p>مكوكية أو سيارة ليموزين</p>
							</li>';
							}
							if($details->CONDITION == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-snowflake pull-left"></span>
								<h6>الحالة الجوية</h6>
								<p>الحفاظ على برودة</p>
							</li>';
							}
							if($details->BATHTUB == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-bathtube pull-left"></span>
								<h6>حوض الاستحمام</h6>
								<p>الاسترخاء والتمتع حمام طويل</p>
							</li>';
							}
							if($details->CHAMPAIGNE == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-champaigne pull-left"></span>
								<h6>مشروبات روحية </h6>
								
							</li>';
							}
							if($details->DINNER == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-restaurant pull-left"></span>
								<h6>عشاء</h6>
								
							</li>';
							}
							if($details->ROOM_SERVICE == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-non-stop pull-left"></span>
								<h6>خدمة الغرف 24ساعة </h6>
								
							</li>';
							}
							if($details->PET_FRIENDLY == 1) {
								echo '<li>
								<span class="icon-fontic-hotel-pet pull-left"></span>
								<h6>مسموح باصطحاب الحيوانات الأليفة</h6>
								
							</li>';
							}



							?>
							
							
							
							
							
							
							
							
							
							
							
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!-- ============ CONTENT END ============ -->

		<div id="reservation">	
			<div id="reservation-container" class="primary-background img-rounded">
				<button class="close"><i class="fa fa-remove fa-lg"></i></button>
				<h2>الحجز </h2>
				<form id="res_form">
					
					<div class="row">
						<div class="form-group col-sm-6" id="booking-name">
							<label for="booking-name"> الاسم </label>
							<input type="text" name="username" class="form-control"  >
						</div>
						<div class="form-group col-sm-6" id="booking-address">
							<label for="booking-company">العنوان </label>
							<input type="text" name="useraddress" class="form-control" >
						</div>
					</div>

					<div class="row">
						<div class="form-group col-sm-6" id="booking-email">
							<label for="booking-email"> البريد </label>
							<input type="email" name="useremail" class="form-control" id="booking-email">
						</div>
						<div class="form-group col-sm-6" id="booking-phone">
							<label for="booking-phone">الجوال </label>
							<input type="phone" name="userphone" class="form-control" id="booking-phone">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-12" id="booking-msg">
							<label for="booking-phone">الرسال </label>
							<textarea name="usermsg" id="" class="form-control" cols="20" rows="4"></textarea>
							
						</div>
						
					</div>
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" name="book_this_hotel" class="btn color3"> ارسل الان </button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- ============ FOOTER START ============ -->

		<?php require 'footer.php'; ?>

		<!-- ============ FOOTER END ============ -->

		<!-- ============ RESERVATION BAR START ============ -->

		
		<!-- ============ RESERVATION BAR END ============ -->
		<?php require 'scripts.php'; ?>
		<script src="js/fotorama.js"></script>
		<!-- // <script src="js/booking.js"></script> -->

	</body>
	</html>