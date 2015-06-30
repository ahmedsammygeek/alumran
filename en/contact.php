<?php 

require 'header.php';
 ?>
		
			<!-- Start Map -->
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7323128.552528785!2d17.2692101!3d26.3347113!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1424659483270" width="100%" height="470" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</div>
		</div>

<!-- Start Content -->
<div id="content">
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-8">
				<?php 

				if(isset($_GET['msg']) && !empty($_GET['msg'])) {
					echo "<h3>";
					echo '<strong class="accent-color">';
					echo "";
					switch ($_GET['msg']) {
						case 'fail':
							echo "sorry please try again to send  this email";
							break;
							case 'done':
							echo "your message has been send successfully";
							break;
							case 'inv_email':
							echo "please enter a valid email";
							break;
							case 'empty':
							echo "please enter all required data";
							break;		
					}
				}
				echo "</strong>  </h3>";
				 ?>
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Contact Us</span></h4>
				
				<!-- Start Contact Form -->
				<div id="contact-form" class="contatct-form">
					<div class="loader"></div>
					<form action="send.php" class="contactForm" name="cform" method="post">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Name<span class="required">*</span></label>
								<span class="name-missing">Please enter your name</span>  
								<input id="name" name="name" type="text" value="" size="30">
							</div>
							<div class="col-md-4">
								<label for="e-mail">Email<span class="required">*</span></label>
								<span class="email-missing">Please enter a valid e-mail</span> 
								<input id="e-mail" name="email" type="text" value="" size="30">
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="message">Add Your Comment<span class="required">*</span></label>
								<span class="message-missing">Say something!</span>
								<textarea id="message" name="message" cols="45" rows="10"></textarea>
								<input type="submit" name="submit" class="button" id="submit_btn" value="Send Message">
							</div>
						</div>
					</form>
				</div>
				<!-- End Contact Form -->
				
			</div>
			
			<div class="col-md-4">
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Information</span></h4>
				
				<!-- Some Info -->
				<p>You can always contact us through these means</p>
				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:10px;"></div>
				
				<!-- Info - Icons List -->
				<ul class="icons-list">
					<li><i class="fa fa-globe">  </i> <strong>Address:</strong> <?php echo $info->address; ?></li>
					<li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> <?php echo $info->email; ?></li>
					<li><i class="fa fa-mobile"></i> <strong>Phone:</strong> <?php echo $info->phone; ?></li>
				</ul>
				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:15px;"></div>
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Working Hours</span></h4>
				
				<!-- Info - List -->
				<ul class="list-unstyled">
					<?php echo html_entity_decode($info->working_dates); ?>
				</ul>
				
			</div>
			
		</div>
		
	</div>
</div>
<!-- End content -->

<?php 

require 'footer.php';
 ?>