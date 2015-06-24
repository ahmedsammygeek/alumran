<?php 
require 'sidebar.php';
?>
<section class="content-header no-margin">
	<h1 class="text-center">
		Booking Details 
	</h1>
</section>
<section class="content">
	<!-- MAILBOX BEGIN -->
	<div class="mailbox row">
		<div class="col-xs-12">
			<div class="box box-solid">
				<div class="box-body">
					<div class="row">

						<div class="col-md-12 col-sm-8">

							<div class="table-responsive">
								<?php 
								if (isset($_GET['id'])) {
									$id=$_GET['id'];

								}
								?>

								<!-- THE MESSAGES -->
								<table class="table table-mailbox">
									<?php 
									require '../connection/connection.php';
									// $query2=$conn->prepare("UPDATE booking SET seen=1 WHERE id=$id");
									// $query2->execute();
									$sql="SELECT * FROM booking WHERE id=$id";
									$query=$conn->query($sql);
									$i=1;
									$result=$query->fetch(PDO::FETCH_ASSOC);
									extract($result); ?>
									
									<tr>
										<td><label>name : </label><?php echo $name; ?></td>
									</tr>

									<tr>
										<td><label>email : </label><?php echo $email; ?></td>
									</tr>

									<tr>
										<td><label>address : </label><?php echo $address; ?></td>
									</tr>

									<tr>
										<td><label>content : </label><?php echo $msg; ?></td>
									</tr>
									<tr>
										<td><label>phone : </label><?php echo $phone; ?></td>
									</tr>
									<tr>
										<td><label>date : </label><?php echo $date; ?></td>
									</tr>
									<?php 

									$hotel = $conn->prepare("SELECT * FROM hotels WHERE id = ?");
									$hotel->bindValue(1,$refer_id,PDO::PARAM_INT);
									$hotel->execute();
									$details = $hotel->fetch(PDO::FETCH_OBJ);
									// var_dump($hotel->execute()); die;
									
									?>

									<tr>
										<td>
											<label>wanted hotel is :</label>
											<a target='_blank' href='viewhotel.php?id=<?php echo $refer_id; ?>'>
												<?php echo $details->title;  ?></a>
											</td>
										</tr>



									<!-- <tr>
									<td><h3>TIME:</h3>$date</td>
									</tr>
									<tr>
									<td><h3>hotel:</td>
									</tr>
									";
									$i++;
								-->

								<!-- ?> -->



							</table>
						</div><!-- /.table-responsive -->
					</div><!-- /.col (RIGHT) -->
				</div><!-- /.row -->
			</div><!-- /.box-body -->

		</div><!-- /.box -->
	</div><!-- /.col (MAIN) -->
</div>
<!-- MAILBOX END -->

</section><!-- /.content -->
<?php require 'footer.php';
?>