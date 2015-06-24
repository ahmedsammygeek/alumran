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
<label for=""></label> : ahme 
								<!-- THE MESSAGES -->
								<table class="table table-mailbox">
									<?php 
									require '../connection/connection.php';
									$query2=$conn->prepare("UPDATE booking SET seen=1 WHERE id=$id");
									$query2->execute();
									$sql="SELECT * FROM booking WHERE id=$id";
									$query=$conn->query($sql);
									$i=1;
									$result=$query->fetch(PDO::FETCH_ASSOC);
									extract($result);

									echo "<tr>
									<td><h3>FROM:</h3>$name</td>
									</tr>
									<tr>
									<td><h3>EMAIL:</h3>$email</td>
									</tr>
									<tr>
									<td><h3>CONTENT:</h3>msg</td>
									</tr>
									<tr>
									<td><h3>PHONE:</h3>$phone</td>
									</tr>
									<tr>
									<td><h3>address:</h3>$address</td>
									</tr>
									<tr>
									<td><h3>TIME:</h3>$date</td>
									</tr>
									<tr>
									<td><h3>hotel:</h3><a target='_blank' href='viewhotel.php?id=$id'>Click here to see the wanted hotel Details</a></td>
									</tr>
									";
									$i++;
									

									?>
									


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