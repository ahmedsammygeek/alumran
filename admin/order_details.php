<?php 
require 'sidebar.php';
?>
<section class="content-header no-margin">
	<h1 class="text-center">
		order details 
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
								<!-- THE MESSAGES -->
								<table class="table table-mailbox">
									<?php 

									$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
									if (!$id) {
										header("location: orders.php");
										die();
									}
									require 'connection.php';
									$order=$conn->prepare("SELECT O.* , M.address , M.email ,  M.phone as phone , M.user_name  as name FROM orders as O LEFT JOIN members as M 
										on O.user_id = M.id  WHERE O.id = ?");
									$order->bindValue(1,$id , PDO::PARAM_INT);
									$order->execute();
									$order_info = $order->fetch(PDO::FETCH_OBJ);



									$sql="SELECT * FROM messages WHERE id=$id";
									$query=$conn->query($sql);
									
									$result=$query->fetch(PDO::FETCH_ASSOC);
									
									echo "<tr>
									<td><h2>user :</h2>".$order_info->name."</td>
									</tr>
									<tr>
									<td><h2>phone:</h2>".$order_info->phone."</td>
									</tr>
									<tr>
									<td><h2>CONTENT:</h2>".$order_info->email."</td>
									</tr>
									<tr>
									<td><h2> order date:</h2>".$order_info->order_date."</td>
									</tr>
									<tr>
									<td><h2>order code :</h2>".$order_info->order_code."</td>
									</tr>
									<tr>
									<td><h2>order notes :</h2>".$order_info->notes."</td>
									</tr>
									<tr>
									<td><h2>total price :</h2>".$order_info->total_price."</td>
									</tr>
									";
									
									?>
									

									<table class="table table-bordered">
										<tbody>
											<tr><label><h2><p> order items </p></h2></label></tr>
											<tr>
												<th style="width: 10px">#</th>
												<th>item name </th>
												<th>quntity </th>

											</tr>
											<?php 
											$items = $conn->prepare("SELECT  P.title_en  , P.price as product_price , P.id as product_id , O_I.item_id , O_I.qun FROM order_items as O_I
												LEFT JOIN products as P on O_I.item_id = P.id WHERE order_id = ?");
											$items->bindValue(1,$order_info->id , PDO::PARAM_INT);
											$items->execute();
											$i = 1;
											while ($item = $items->fetch(PDO::FETCH_OBJ)) {
												echo '<tr>
												<td>'.$i.'</td>
												<td>'.$item->title_en.'</td>
												<td>'.$item->qun.'</td>
											</tr>

												';
												$i++;
											}


											?>
											

										</tbody>
									</table>

									<img src="../uploaded/bank/<?php echo $order_info->transefer_image; ?>" class="img-responsive" alt="Responsive image">


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