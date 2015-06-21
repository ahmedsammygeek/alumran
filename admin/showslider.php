<?php 
// include 'header.php';
require 'sidebar.php';

?>

<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">sliders</h3><br><br><br>
          <a href="slider.php"> <button class="btn btn-success btn-lg">add new slide</button></a>


        </div><!-- /.box-header -->

        <div class="box-body table-responsive no-padding">

          <?php 
          if (isset($_GET['msg'])) {
        //if exist msg in link get this message and do defferent action in every case and show alert

            switch ($_GET['msg']) {

              case 'error_delete':
            //this case error in sql request to delete this data
              echo '<div class="alert alert-danger alert-dismissable">
              <i class="fa fa-ban"></i>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <b>Alert!</b>   an error in your delete please try again.
              </div>';
              break;
              case 'data_inserted':
            //this case data inserted (sucsseful case)
              echo '<div class="alert alert-success alert-dismissable">
              <i class="fa fa-check"></i>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <b>Alert!</b>  data inserted successfully.
              </div>';
              break;
              case 'deleted':
            //this case data deleted successful
              echo '<div class="alert alert-success alert-dismissable">
              <i class="fa fa-check"></i>

              <b>Alert!</b> data deleted successfully.
              </div>' ;
              break;
              case 'not_exist':
              echo '<div class="alert alert-danger alert-dismissable">
              <i class="fa fa-ban"></i>
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <b>Alert!</b>  this image not exist in this file.
              </div>';
              break;
              case 'data_updated':
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

          <table class="table table-hover">

            <tbody><tr>
              <th>ID</th>
              <th>IMAGE</th>
              <th>place</th>
              <th>options</th>


            </tr>
            <?php
            include 'connection.php';
            $sql="SELECT * FROM slider ";
            $query=$conn->query($sql);
            $i=1;
            while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
             extract($result);
             switch ($place) {
              case '1':
              $place = "left";
              break;
              case '2':
              $place = "top";
              break;
              case '3':
              $place = "bottom";
              break;
              case '4':
              $place = "right";
              break;
              case '5':
              $place = "brand";
              break;
              
              default:
                # code...
              break;
            }
            echo " <tr>
            <td>$i</td>
            <td><img src='image/".$image."' width='50px' height='50px'></td>
            <td>$place</td>
            <td><a href='deleteslider.php?id=$id&img=$image' class='btn btn-danger btn-sm'>DELETE</a>
            <a href='editslider.php?id=$id&img=$image' class='btn btn-warning btn-sm'>update</a>
            </td>
            </tr>";
            $i++;

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