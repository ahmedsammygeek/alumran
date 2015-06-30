<?php 
// include 'header.php';
require 'sidebar.php';

?>

<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">menu</h3><br><br><br>
          <a href="menu.php"> <button class="btn btn-success btn-lg">add new menu</button></a>


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
              <th>name</th>
              <th>options</th>


            </tr>
            <?php
            /*
            get id for this category
            */
            if (isset($_GET['id'])) {
              $id = $_GET['id'];
            }


            /*
            select categories have this menu id

            */
            require 'connection.php';
            $query=$conn->prepare("SELECT cat_name_menu FROM menu_menu WHERE menu_id=?");
            $query->bindValue(1,$id,PDO::PARAM_INT);
            $query->execute();
            $i=1;
            while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
             extract($result);
             echo " <tr>
             <td>$i</td>
             <td>$cat_name_menu</td>
             <td><a href='delete_menu.php?id=$id' class='btn btn-danger btn-sm'>DELETE</a>
             <a href='edit_menu.php?id=$id' class='btn btn-warning btn-sm'>EDIT</a>
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