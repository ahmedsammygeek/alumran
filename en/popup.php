<div id="concat_form">	
	<div id="reservation-container" class="primary-background img-rounded">
		<button class="close"><i class="fa fa-remove fa-lg"></i></button>
		<h2>Reservation</h2>
		<form  action="insert_user_mail.php" method="post" >
			<div class="row" >
				<div class="form-group col-sm-6" id="booking-name">
					<label for="booking-name">Your Name</label>
					<input type="text" name="name" class="form-control" >
				</div>
				<div class="form-group col-sm-6" id="booking-address">
					<label for="booking-company">phone</label>
					<input type="text" name="phone" class="form-control" >
				</div>
			</div>

			<div class="row" >
				<div class="form-group col-sm-12" id="booking-name">
					<label for="booking-name">email</label>
					<input type="text" name="email" class="form-control" >
				</div>
				</div>

				<div class="row">
						<div class="form-group col-sm-12" id="booking-msg">
							<label for="booking-phone">message</label>
							<textarea name="msg" id="" class="form-control" cols="30" rows="4"></textarea>
							
						</div>
						
					</div>
			<div class="row">
				<div class="col-sm-12">
					<button type="submit" name="submit" class="btn color3">SEND</button>
				</div>
			</div>
		</form>
	</div>
</div>
