<?php 
require 'sidebar.php';
?>
<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">terms</h3>

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
                                      # code...
            break;
          }
        }


        ?>

        <table class="table table-hover">

          <tbody><tr>
            <th>ID</th>
            <th>CONTENT</th>
            <th>CONTENT(ar)</th>
            <th>UPDATE</th>

          </tr>
          <?php
          include 'connection.php';
          $sql="SELECT * FROM terms ";
          $query=$conn->query($sql);
          $i=1;
          while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
           extract($result);
           echo " <tr>
           <td>$i</td>
           <td>$content</td>
           <td>$content_ar</td>
           <td>
           <a href='edit_terms.php?id=$id' class='btn btn-warning btn-sm'>update</a>
           </td>
           </tr>" ;
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