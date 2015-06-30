<?php 
require 'sidebar.php';
?>
<section class="content">             

	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">

					<h3 class="box-title">hotels</h3>

				</div><!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<?php 
					if (isset($_GET['msg'])) {
						switch ($_GET['msg']) {

							case 'error':
							echo '<div class="alert alert-danger alert-dismissable">
							<i class="fa fa-ban"></i>
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<b>Alert!</b>   an error in your deletion please try again.
							</div>';
							break;
							case 'updated':
							echo '<div class="alert alert-success alert-dismissable">
							<i class="fa fa-check"></i>
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<b>Alert!</b> data deleted successfully.
							</div>';  
							break;

							case 'deleted':
							echo '<div class="alert alert-success alert-dismissable">
							<i class="fa fa-check"></i>
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<b>Alert!</b> data updated successfully.
							</div>';  
							break;

							default:

							break;
						}
					}


					?>

					<table class="table table-bordered table-striped">

						<tbody><tr>
							<th>ID</th>
							<th>TITEL</th>
							<th>TITLE(ar)</th>
							<th>DELETE</th>
							<th>UPDATE</th>
							<th>VIEW</th>

						</tr>
						<?php
						require '../connection/connection.php';
						$sql="SELECT * FROM hotels ";
						$query=$conn->query($sql);
						$i=1;
						while ($result=$query->fetch(PDO::FETCH_OBJ)) {
							echo " <tr>
							<td>$i</td>
							<td>$result->title</td>
							<td>$result->title_ar</td>
							<td><a href='delete_hotel.php?id=".$result->id."' class='btn btn-danger btn-sm'>DELETE</a>
							<td>
							<a href='edit_hotel.php?id=".$result->id."' class='btn btn-warning btn-sm'>update</a>
							</td>
							<td>
							<a href='hotels.php?id=".$result->id."' class='btn btn-sm btn-info'>view</a>
							</td>
							</tr>" ;
							$i++;

						} 
						if (isset($_GET['id'])) {
							$hotel_id = $_GET['id'];
							/*
							print content for this hotel

							*/
							$query2 = $conn->query("SELECT * FROM hotels WHERE id=$hotel_id");
							$result2 = $query2->fetch(PDO::FETCH_OBJ);
							echo '<div class="callout callout-info">
							<h4>content(en)</h4>
							<p>'.$result2->desc.'</p><hr>
							<h4>content(ar)</h4>
							<p>'.$result2->desc_ar.'</p>
							</div>' ;
							/*stars this hotel have */
							$stars = array('BED'=>$result2->BED,'POOL'=>$result2->POOL,
								'SAFE'=>$result2->SAFE,'GAMES'=>$result2->GAMES,
								'TRANSPORT'=>$result2->TRANSPORT,'CONDITION'=>$result2->CONDITION,
								'BATHTUB'=>$result2->BATHTUB,'CHAMPAIGNE'=>$result2->CHAMPAIGNE,
								'DINNER'=>$result2->DINNER,'ROOM_SERVICE'=>$result2->ROOM_SERVICE,
								'PET_FRIENDLY'=>$result2->PET_FRIENDLY);
							echo '<div class="callout callout-info">
							<h4>Stars</h4>';
							foreach ($stars as $key=>$value) {
								if ($value == 1) {
									$value = "yes";
								}else
								{
									$value = "no";
								}
								echo '
								<p>'.$key.': '.$value.'</p>
								' ;
							}
							echo "</div>";
							/*images*/
							$query3 = $conn->query("SELECT pic FROM hotel_images WHERE hotel_id=$hotel_id");
							echo '<div class="callout callout-info">
							<h4>images: </h4>';
							while ($result3 = $query3->fetch(PDO::FETCH_OBJ)) {
								echo '<img src="../uploaded/hotels_images/'.$result3->pic.'" width="70" height="70" alt="">
								';								
							}
							echo '</div>' ;


							
							
						}



						?>


						</tbody></table>
						</div><!-- /.box-body -->
						</div><!-- /.box -->
						</div>
						</div>
						</section><!-- /.content --> 

						<?php 
						require 'footer.php';
						?>
