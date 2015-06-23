<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="The Traveller - HTML Template">
		<meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
		<title>The Traveller - HTML Template</title>
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
						<h5>Visit or call us</h5>
						<h1>Contact</h1>
					</div>
				</div>

				<!-- Contact Form Start -->
				<form>
					<div class="row">
						<div class="col-sm-4 form-group">
							<label class="sr-only" for="contact-name">Name</label>
							<div class="input-group">
								<input type="text" class="form-control" id="contact-name" placeholder="Name">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
							</div>
						</div>
						<div class="col-sm-4 form-group">
							<label class="sr-only" for="contact-email">Email</label>
							<div class="input-group">
								<input type="email" class="form-control" id="contact-email" placeholder="Email">
								<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
							</div>
						</div>
						<div class="col-sm-4 form-group">
							<label class="sr-only" for="contact-subject">phone</label>
							<div class="input-group">
								<input type="text" class="form-control" id="contact-subject" placeholder="Subject">
								<div class="input-group-addon"><i class="fa fa-pencil"></i></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 form-group">
							<label class="sr-only" for="contact-message">Email</label>
							<textarea class="form-control" rows="6" id="contact-message" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-primary btn-lg">Submit</button>
							<hr>
						</div>
					</div>
				</form>
				<!-- Contact Form End -->

				<!-- Contact Details Start -->
				<div class="row text-center" id="contact">
					<div class="col-sm-3">
						<p><span class="icon-fontic-hotel-pin primary-color"></span></p>
						<h4>Address</h4>
						<p>The Traveler Hotel<br>
						8699 Santa Monica Blvd<br>
						Los Angeles, CA 90069-4109</p>
					</div>
					<div class="col-sm-3">
						<p><span class="icon-fontic-hotel-reception primary-color"></span></p>
						<h4>Front Desk</h4>
						<p><i class="fa fa-phone"></i>+1 800 987 654<br>
						<i class="fa fa-fax"></i>+1 800 987 655<br>
						<a href="mailto:info@thetravellerhotel.com">Send email</a></p>
					</div>
					<div class="col-sm-3">
						<p><span class="icon-fontic-hotel-card primary-color"></span></p>
						<h4>Reservation</h4>
						<p><i class="fa fa-phone"></i>+1 800 987 654<br>
						<i class="fa fa-fax"></i>+1 800 987 655<br>
						<a href="mailto:info@thetravellerhotel.com">Send email</a></p></p>
					</div>
					<div class="col-sm-3">
						<p><span class="icon-fontic-hotel-hotel primary-color"></span></p>
						<h4>Management</h4>
						<p><i class="fa fa-phone"></i>+1 800 987 654<br>
						<i class="fa fa-fax"></i>+1 800 987 655<br>
						<a href="mailto:info@thetravellerhotel.com">Send email</a></p></p>
					</div>
				</div>
				<!-- Contact Details Start -->

			</div>
		</section>

		<!-- ============ CONTENT END ============ -->

		<!-- ============ MAP START ============ -->

		<section id="map">
			<!-- Google Map Script -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
			<script type="text/javascript">

				function initialize()
				{
					//-----------------------------------------------------------------------
					// Create an array of styles.
					
					var styles = [
						{
						"stylers": [
							{ "saturation": -100 },
							{ "gamma": 1 }
						]
						},{
							"featureType": "water",
							"stylers": [
								{ "lightness": -12 }
							]
						}
					];

					//-----------------------------------------------------------------------
					// Create a new StyledMapType object, passing it the array of styles,
					// as well as the name to be displayed on the map type control.
					
					var styledMap = new google.maps.StyledMapType(styles, {
						name: "Styled Map"
					});

					//-----------------------------------------------------------------------
					// Set up map pin position
					
					var latlng = new google.maps.LatLng(34.087504, -118.380134);

					//-----------------------------------------------------------------------
					// Set up map options

					var myOptions =
					{
						scrollwheel: false,
						zoom: 13,
						center: latlng,
						mapTypeControlOptions: {
							mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
						}
					};

					//-----------------------------------------------------------------------
					// Set up map ID's

					var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

					//-----------------------------------------------------------------------
					// Associate the styled map with the MapTypeId and set it to display.

					map.mapTypes.set('map_style', styledMap);
					map.setMapTypeId('map_style');

					//-----------------------------------------------------------------------
					// Setup up map pin image

					var image = {
						// Path to your map pin image
						url: 'images/map-marker.png',
						// This marker is 40 pixels wide by 42 pixels tall.
						size: new google.maps.Size(40, 42),
						// The origin for this image is 0,0.
						origin: new google.maps.Point(0,0),
						// The anchor for this image is the base of the pin at 20,42.
						anchor: new google.maps.Point(20, 42)
					};

					//-----------------------------------------------------------------------
					// Add marker

					var myMarker = new google.maps.Marker({
						position: latlng,
						map: map,
						icon: image,
						clickable: true,
						title:"Netvibes Inc."
					});

					myMarker.info = new google.maps.InfoWindow({
						content: "<b>Netvibes Inc.</b><br>8699 Santa Monica Blvd<br>Los Angeles, CA 90069-4109"
					});

					google.maps.event.addListener(myMarker, 'click', function() {
						myMarker.info.open(map, myMarker);
					});
				}

				google.maps.event.addDomListener(window, 'load', initialize);
			</script>

			<div id="map-canvas"></div>
		</section>

		<!-- ============ MAP END ============ -->

		<!-- ============ FOOTER START ============ -->

		<?php require 'footer.php'; ?>
		<!-- ============ FOOTER END ============ -->

		<!-- ============ RESERVATION BAR START ============ -->

	
		<!-- ============ RESERVATION BAR END ============ -->

	<?php require 'scripts.php'; ?>
	</body>
</html>