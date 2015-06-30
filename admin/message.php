<?php 
require 'sidebar.php';
?>
<section class="content-header no-margin">
	<h1 class="text-center">
		Mailbox
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
								if (isset($_GET['msg'])) {
									switch ($_GET['msg']) {
										case 'error_delete':
										echo '<div class="alert alert-danger alert-dismissable">
										<i class="fa fa-ban"></i>
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<b>Alert!</b>   an error in your delete please try again.
										</div>';
										break;
										case 'data_deleted':
										echo '<div class="alert alert-success alert-dismissable">
										<i class="fa fa-check"></i>

										<b>Alert!</b> data deleted successfully.
										</div>' ;
										break;


										default:

										break;
									}
								}


								?>

								<!-- THE MESSAGES -->
								<table class="table table-mailbox">
									<tr>
										<th>id</th>
										<th>name</th>
										<th>emial</th>
										<th>phone</th>
										<th>content</th>
										<th>date & time</th>
										<th>option</th>
										<th>WATCHED</th>
										<th>REPLY</th>
									</tr>
									<?php 
									require '../connection/connection.php';
									$sql="SELECT * FROM messages";
									$query=$conn->query($sql);
									$i=1;
									while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
										extract($result);
										$content = substr($content, 0,20);
										if ($watched == 0) {
											$view = "not watched";
										}
										else
										{
											$view = "watched";	
										}	
										echo "<tr>
										<td>$i</td>
										<td>$name</td>
										<td>$email</td>
										<td>$phone</td>
										<td>$content</td>
										<td>$time_sent</td>
										<td><a href='deletemessage.php?id=$id' class='btn btn-danger btn-sm'>DELETE</a>
										<a href='viewmessage.php?id=$id' class='btn btn-primary btn-sm'>VIEW</a></td>
										<td>$view</td>
										<td><a href='reply_mail.php?id=$id' class='btn btn-primary'>send</a></td>

										</tr>";
										$i++;
									}

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