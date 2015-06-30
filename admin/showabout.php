<?php 
require 'sidebar.php';
?>
<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">about us</h3>

        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
         <?php 
         if (isset($_GET['msg'])) {
        //if exist msg in link get this message and do defferent action in every case and show alert

          switch ($_GET['msg']) {

            case 'error':
            //this case error in sql request to delete this data
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
            <th>CONTENT</th>
            <th>CONTENT(ar)</th>
            <th>UPDATE</th>
            <th>VIEW</th>

          </tr>
          <?php
          require '../connection/connection.php';
          $sql="SELECT * FROM aboutus ";
          $query=$conn->query($sql);
          $i=1;
          while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
           extract($result);
           if (!empty($content) && !empty($content_ar)) {
             $small_content = substr($content, 0 , 50);
             $small_content_ar = substr($content_ar, 0 , 50);
           }  
           echo " <tr>
           <td>$i</td>
           <td>$small_content</td>
           <td>$small_content_ar</td>
           <td>
           <a href='editabout.php?id=$id' class='btn btn-warning btn-sm'>update</a>
           </td>
           <td>
           <a href='showabout.php?id=$id' class='btn btn-sm btn-info'>view</a>
           </td>
           </tr>" ;
           $i++;

         } 
         if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $view = $conn->query("SELECT * FROM aboutus WHERE id = $id");
          $result2 = $view->fetch(PDO::FETCH_OBJ);
           echo '<div class="callout callout-info">
           <p>'.$result2->content.'</p>
           </div>' ;
           echo '<div class="callout callout-info">
           <p>'.$result2->content_ar.'</p>
           </div>' ;
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