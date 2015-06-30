<?php 
require 'sidebar.php';
?>
<section class="content-header no-margin">
	<h1 class="text-center">
		site information
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
        //if exist msg in link get this message and do defferent action in every case and show alert

									switch ($_GET['msg']) {

										case 'error_data':
            //this case error in sql request to delete this data
										echo '<div class="alert alert-danger alert-dismissable">
										<i class="fa fa-ban"></i>
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<b>Alert!</b>   an error in your delete please try again.
										</div>';
										break;
										case 'updated':
            //this case data deleted successful
										echo '<div class="alert alert-success alert-dismissable">
										<i class="fa fa-check"></i>

										<b>Alert!</b> data updated successfully.
										</div>' ;
										break;


										default:

										break;
									}
								}


								?>

								<!-- THE MESSAGES -->
								<table class="table table-mailbox">
									
									<?php 
									require '../connection/connection.php';
									$query=$conn->query("SELECT * FROM site_info");
									$result=$query->fetch(PDO::FETCH_OBJ);
									echo "
									<tr>
									<td>phone</td>
									<td>$result->phone</td>
									</tr>
									<tr>
									<td>facebook</td>
									<td>$result->facebook</td>
									</tr>
									<tr>
									<td>twitter</td>
									<td>$result->twitter</td>
									</tr>
									<tr>
									<td>email</td>
									<td>$result->email</td>
									</tr>
									<tr>
									<td>address_en</td>
									<td>$result->address</td>
									</tr>
									<tr>
									<td>address_ar</td>
									<td>$result->address_ar</td>
									</tr>
									";

									?>
									


								</table>
							</div><!-- /.table-responsive -->
						</div><!-- /.col (RIGHT) -->
					</div><!-- /.row -->
				</div><!-- /.box-body -->

			</div><!-- /.box -->
			<a href='edit_info.php<?php echo "?id=$result->id"; ?>' class='btn btn-primary btn-sm'>UPDATE</a>
		</div><!-- /.col (MAIN) -->
	</div>
	<!-- MAILBOX END -->

</section><!-- /.content -->
<?php require 'footer.php';
?>