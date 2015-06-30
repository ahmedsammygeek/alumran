

<?php 

require 'sidebar.php';
require 'check_admin.php';
require '../connection/connection.php';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		details

	</h1>

</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-12">

			<?php 
			if (isset($_GET['msg'])) {
                    //if exist msg in link get this message and do deffrent action in every case and show alert
				switch ($_GET['msg']) {
					case 'deleted':
					echo '<div class="alert alert-success alert-dismissable">
					<i class="fa fa-check"></i>

					<b>Alert!</b> data updated successfully.
					</div>' ;
					break;

				}
			}


			?>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">website home page</h3>                                    
				</div><!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered ">
						<thead>
							<tr>
								<th>#</th>
								<th>name</th>
								<th>emial</th>
								<th>phone</th>
								<th>adress</th>
								<th>message</th>
								<th>date & time</th>
								<th>options </th>

							</tr>
						</thead>
						<tbody>
							<?php 
							require '../connection/connection.php';
							$sql="SELECT * FROM booking order by  id DESC  ";
							$query=$conn->query($sql);
							$i=1;

								// odd

							while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
								extract($result);
								if($seen == 0) {
									echo '<tr style="background:gray;">';
								}
								else {
									echo '<tr>';

								}


								echo "
								<td>$i</td>
								<td>$name</td>
								<td>$email</td>
								<td>$phone</td>
								<td>$address</td>
								<td>$msg</td>
								<td>$date</td> ";


								echo '<td>
								<div class="btn-group">
								<button type="button" class="btn btn-danger">options</button>
								<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<ul class="dropdown-menu" role="menu">
								<li><a href="viewbooking.php?id='.$id.'" >VIEW</a></li>

								<li><a href="delete_booking.php?id='.$id.'" >DELETE</a></li>
								</ul>
								</div></td> </tr>';







								$i++;
							}

							?>                             

						</tbody>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
			
		</div><!--/.col (left) -->
	</div>   <!-- /.row -->
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<!-- jQuery 2.0.2 -->



<?php 
require 'footer.php';
?>


</body>
</html>





