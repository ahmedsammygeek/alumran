	<header>
		<?php 
		require 'popup.php';
		require 'connection/connection.php';
		$site_info = $conn->query("SELECT phone , email FROM site_info");
		$info = $site_info->fetch(PDO::FETCH_OBJ);
		?>
		<div id="header">
			<div class="container">
				<div class="row">
					
					

					<div class="col-xs-4 col-sm-4" id="hotel-info">
						<ul>
							<li ><a href="en/index.php"><i class="fa fa-language fa-lg primary-color"></i>En</a></li>
							
							<li id="hotel-phone"><a href="tel:<?php echo $info->phone; ?>"><i class="fa fa-phone fa-lg primary-color"></i></a></li>
							<li id="contcat-link" ><a id="contcat-link" href="mailto:<?php echo $info->email; ?>"><i class="fa fa-envelope fa-lg primary-color"></i></a></li>

						</ul>
					</div>

					<div class="col-xs-4 col-sm-4">
						<p class="text-center hidden-sm hidden-xs" style="font-size:20px;font-weight:bold;color:white;line-height:74px">الكيالى للخدمات السياحة و التجارية</p>
					</div>


					<div id="logo" class="col-xs-4 col-sm-4 ">
						<a href="index.php"><img width="90" height="45" src="images/logo.jpg" alt="The Traveller. Modern hotel html template." class="img-responsive" /></a>
					</div>

				</div>

			</div>
		</div>

		<!-- Nav Start -->
		<nav>
			<div class="container ">
				<ul class="jetmenu ">
					<li class="active"><a href="index.php">الرئيسية </a>
					</li>
					<?php 
					$hotels = $conn->query("SELECT id FROM hotels WHERE hotel_or_not=1");
					$hotel = $hotels->fetch(PDO::FETCH_OBJ);
					$hotel_image = $conn->query("SELECT pic FROM hotel_images WHERE hotel_id=$hotel->id");
					$pic = $hotel_image->fetch(PDO::FETCH_OBJ); ?>
					<li><a href="#">السياحة</a>
						<div class="megamenu full-width">
							<div class="row">
								<div class="col-sm-3">
									<img src="uploaded/hotels_images/<?php echo "$pic->pic"; ?>" alt="" class="img-responsive" />
									<h4>حجوزات الفنادق</h4>
									<p>مع خدمة حجز الفنادق يمكن تحديد أفضل الفنادق الأكثر أهمية والمنتشرة في جميع أنحاء تركيا مع جميع الخدمات التي تقدمها لهم واختيار الكتاب المناسب</p>
									<p><a href="hotels.php" class="btn btn-primary">show</a></p>
								</div>
								<?php 
								$page5 = $conn->query("SELECT image FROM pages_images WHERE page_id=5");
								$image5 = $page5->fetch(PDO::FETCH_OBJ); ?>
								<div class="col-sm-3">
									<img src="uploaded/pages_images/<?php echo "$image5->image"; ?>" alt="" class="img-responsive" />
									<h4>حجوزات الطيران</h4>
									<p>شركة السياحة alkyaly والخدمات العامة ودليل اليد اليمنى التي تساعدك لحجز تذاكر الطيران من وإلى أي مكان في العالم </p>
									<p><a href="page.php?page_id=5" class="btn btn-primary">قراءة المذيد</a></p>
								</div>
								<?php 
								$page6 = $conn->query("SELECT image FROM pages_images WHERE page_id=6");
								$image6 = $page6->fetch(PDO::FETCH_OBJ); ?>
								<div class="col-sm-3">
									<img src="uploaded/pages_images/<?php echo "$image6->image"; ?>" alt="" class="img-responsive" />
									<h4>السياحة العلاجية</h4>
									<p>شركة السياحة alkyaly والخدمات العامة ويسر لتقديم خدمة السياحة العلاجية في تركيا، الرحالة العرب للإخوة في أفضل المستشفيات في اسطنبول </p>
									<p><a href="page.php?page_id=6" class="btn btn-primary">قراءة المذيد</a></p>
								</div>
								<?php 
								$offers = $conn->query("SELECT id FROM hotels WHERE hotel_or_not =0");
								$offer = $offers->fetch(PDO::FETCH_OBJ);
								$offers_image = $conn->query("SELECT pic FROM hotel_images WHERE hotel_id=$offer->id");
								$offer_image = $offers_image->fetch(PDO::FETCH_OBJ);
								?>
								<div class="col-sm-3">
									<img src="uploaded/hotels_images/<?php echo "$offer_image->pic"; ?>" alt="" class="img-responsive" />
									<h4>عروض</h4>
									<p>تقدم شركة الكيالى للسياحة و الخدمات التجارية اقوى عروض الصيف يمكنك مشاهدتها عبر زياة الصفحة </p>
									<p><a href="offers.php" class="btn btn-primary">قراءة المذيد</a></p>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#">استثمار</a>
						<div class="megamenu full-width">
							<div class="row">
								<?php 
								$page7 = $conn->query("SELECT image FROM pages_images WHERE page_id=7");
								$image7 = $page7->fetch(PDO::FETCH_OBJ);
								?>
								<div class="col-sm-3">
									<img src="uploaded/pages_images/<?php echo "$image7->image"; ?>" alt="" class="img-responsive" />
									<h4>مشاريع الاستثمار</h4>
									<p>شركة البناء حريصة على تشجيع الاستثمار من خلال توفير مستويات أعلى من الخدمة للمستثمرين في جميع الأوقات</p>
									<p><a href="page.php?page_id=7" class="btn btn-primary">قراءة المذيد</a></p>
								</div>
								<?php 
								$page8 = $conn->query("SELECT image FROM pages_images WHERE page_id=8");
								$image8 = $page8->fetch(PDO::FETCH_OBJ);
								// if(!$page8->rowCount()) {
								// 	$image8->image = 'image.png';
								// }

								?>
								<div class="col-sm-3">
									<img src="uploaded/pages_images/<?php echo "$image8->image"; ?>" alt="" class="img-responsive" />
									<h4>الدراسات الاقتصادية</h4>
									<p>إعداد دراسات الجدوى الاقتصادية الأولية هي واحدة من الخدمات التي تقدمها شركة البناء للسياحة والخدمات العامة</p>
									<p><a href="page.php?page_id=8" class="btn btn-primary">قراءة المذيد</a></p>
								</div>
								<?php 
								$page9 = $conn->query("SELECT image FROM pages_images WHERE page_id=9");
								$image9 = $page9->fetch(PDO::FETCH_OBJ);
								?>
								<div class="col-sm-3">
									<img src="uploaded/pages_images/<?php echo "$image9->image"; ?>" alt="" class="img-responsive" />
									<h4> الوساطة التجارية</h4>
									<p>إعداد دراسات الجدوى الاقتصادية الأولية هي واحدة من الخدمات التي تقدمها شركة البناء للسياحة والخدمات العامة</p>
									<p><a href="page.php?page_id=9" class="btn btn-primary">قراءة المذيد</a></p>
								</div>
								<?php 
								$page10 = $conn->query("SELECT image FROM pages_images WHERE page_id=10");
								$image10 = $page10->fetch(PDO::FETCH_OBJ);
								?>
								<div class="col-sm-3">
									<img src="uploaded/pages_images/<?php echo "$image10->image"; ?>" alt="" class="img-responsive" />
									<h4>خطوط الآلات والإنتاج.</h4>
									<p>مهندسي البناء شركة مؤهلة تسعى لوضع خبراتها لخدمة عملائها ومساعدتهم على فهم وتوصيف وتحديد الاحتياجات الصناعية</p>
									<p><a href="page.php?page_id=10" class="btn btn-primary">قراءة المذيد</a></p>
								</div>
							</div>
						</div>
					</li>

					<li><a href="page.php?page_id=1">تأجير سيارات</a>

					</li>

					<li><a href="page.php?page_id=2">عقارات</a>

					</li>

					<li><a href="page.php?page_id=3">الخدمات</a>

					</li>


					<li><a href="page.php?page_id=4">تعرف على تركيا</a>

					</li>
				</ul>
			</div>
		</nav>
		<!-- Nav End -->



		

	</header>
