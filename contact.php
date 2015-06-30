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
					<?php 
					if (isset($_GET['msg'])) {
						switch ($_GET['msg']) {
							case 'empty_data':
							echo '<div class="alert alert-danger alert-dismissable">
							<i class="fa fa-ban"></i>
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<b>Alert!</b> من فضلك ادخل جميع البيانات  ..
							</div>';
							break;
							case 'sent':
							echo '<div class="alert alert-success alert-dismissable">
							<i class="fa fa-check"></i>

							<b>Alert!</b> تم ارسال الرسالة بنجاح .
							</div>' ;
							break;


							default:

							break;
						}
					}


					?>


					<div class="col-sm-12 text-center">
						<h5>تواصل معنا دائما فنحن نرحب بذلك </h5>
						<h1>اتصل بنا </h1>
					</div>
				</div>

				<!-- Contact Form Start -->
				<form action="insert_user_mail.php" method="post">
					<div class="row">
						<div class="col-sm-4 form-group">
							<label class="sr-only" for="contact-name"> الاسم </label>
							<div class="input-group">
								<input type="text" name="name" class="form-control" id="contact-name" placeholder="Name">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
							</div>
						</div>
						<div class="col-sm-4 form-group">
							<label class="sr-only" for="contact-email"> البريد</label>
							<div class="input-group">
								<input type="email" name="email" class="form-control" id="contact-email" placeholder="Email">
								<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
							</div>
						</div>
						<div class="col-sm-4 form-group">
							<label class="sr-only"  for="contact-subject"> الجوال </label>
							<div class="input-group">
								<input type="text" name="phone" class="form-control" id="contact-subject" placeholder="phone number">
								<div class="input-group-addon"><i class="fa fa-pencil"></i></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 form-group">
							<label class="sr-only" for="contact-message"> محتوى الرسالة </label>
							<textarea class="form-control" name="msg" rows="6" id="contact-message" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<button type="submit" name="submit" class="btn btn-primary btn-lg"> ارسال </button>
							<hr>
						</div>
					</div>
				</form>
				<!-- Contact Form End -->
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