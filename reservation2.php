<?php 

$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);

if(!$id) {
	header('location: hotels.php');
	die;
}

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
					<div class="col-sm-12 text-center">
						<h5>Book a Hotel</h5>
						<h1>Reservation</h1>
						<!-- <div class="alert alert-warning" role="alert"><strong>This is not a real working form!</strong><br>This is an example form for a demo purpose only.</div> -->
						<?php 
						if (isset($_GET['msg'])) {

							switch ($_GET['msg']) {
								case 'erro':	
								echo '<div class="alert alert-danger alert-dismissable">
								<i class="fa fa-ban"></i>
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<b>Alert!</b> حاول مرة اخرى من فضلك  .
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
								<b>Alert!</b> خطا , من فضلك ادخل جميع البيانات المطلوبة 
								</div>';
								break;
								
								case 'emailIN':
								echo '<div class="alert alert-danger alert-dismissable">
								<i class="fa fa-ban"></i>
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<b>Alert!</b> خطا , من فضلك ادخل بريد صالح 
								</div>';
								break;

								case 'done':
								echo '<div class="alert alert-success alert-dismissable">
								<i class="fa fa-check"></i>

								<b>Alert!</b> تم ارسال الحجز بنجاح 
								</div>' ;
								break;


								case 'deleted':
								echo '<div class="alert alert-success alert-dismissable">
								<i class="fa fa-check"></i>

								<b>Alert!</b> تم حذف البيانات بناجح , سنقوم بالاتصال بك قريبا 
								</div>' ;
								break;

							}
						}


						?>
					</div>
				</div>
				<form id="res_form" action="process-booking2.php?id=<?php echo $id; ?>" method="post">
					<div class="row">
						<div class="form-group col-sm-6" id="booking-name">
							<label for="booking-name"> الاسم </label>
							<input type="text" name="name" class="form-control"  >
						</div>
						<div class="form-group col-sm-6" id="booking-address">
							<label for="booking-company">العنوان </label>
							<input type="text" name="address" class="form-control" >
						</div>
					</div>

					<div class="row">
						<div class="form-group col-sm-6" id="booking-email">
							<label for="booking-email"> البريد </label>
							<input type="email" name="email" class="form-control" id="booking-email">
						</div>
						<div class="form-group col-sm-6" id="booking-phone">
							<label for="booking-phone">الجوال </label>
							<input type="phone" name="phone" class="form-control" id="booking-phone">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-12" id="booking-msg">
							<label for="booking-phone"> الرسال </label>
							<textarea name="msg" id="" class="form-control" cols="20" rows="4"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<button type="submit" name="book_this_hotel" class="btn color3"> ارسال </button>
						</div>
					</div>
				</form>

			</div>
		</section>

		<!-- ============ CONTENT END ============ -->

		<!-- ============ FOOTER START ============ -->

		<?php require 'footer.php'; ?>
		<!-- ============ FOOTER END ============ -->

		<!-- ============ RESERVATION BAR START ============ -->

		<!-- ============ RESERVATION BAR END ============ -->

		<?php require 'scripts.php'; ?>

	</body>
	</html>