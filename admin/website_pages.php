<?php 
require 'sidebar.php';
?>
<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">website pages</h3>

        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
         <?php 
         if (isset($_GET['msg'])) {
        //if exist msg in link get this message and do defferent action in every case and show alert

          switch ($_GET['msg']) {
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
            <th>#</th>
            <th>PAGE NAME</th>
            <th>TITLE(EN)</th>
            <th>TITLE(AR)</th>
            <th>DESCREPTION(EN)</th>
            <th>DESCREPTION(AR)</th>
            <th>UPDATE</th>
            <th>VIEW<small>(to show images)</small></th>

          </tr>
          <?php
          require '../connection/connection.php';
          $sql="SELECT * FROM pages ";
          $query=$conn->query($sql);
          $i=1;
          while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
           extract($result);
           if (!empty($descreption) && !empty($descreption_ar)) {
             $small_content = substr($descreption, 0 , 30);
             $small_content_ar = substr($descreption_ar, 0 , 30);
           }  
           echo " <tr>
           <td>$i</td>
           <td>$page_name</td>
           <td>$title</td>
           <td>$title_ar</td>
           <td>$small_content</td>
           <td>$small_content_ar</td>
           <td>
           <a href='edit_pages.php?id=$id' class='btn btn-warning btn-sm'>update</a>
           </td>
           <td>
           <a href='website_pages.php?id=$id' class='btn btn-sm btn-info'>view</a>
           </td>
           </tr>" ;
           $i++;

         } 
         if (isset($_GET['id'])) {
          $id = $_GET['id'];  
          echo '
          <h3 text-center>'.$page_name.'</h3>
          <div class="callout callout-info">
          <h4>title(en)</h4>
          <p>'.$title.'</p><hr>
          <h5>descreption(en)</h5>
          <p>'.$descreption.'</p>
          </div>' ;
          echo '<div class="callout callout-info">
          <h4>title(ar)</h4>
          <p>'.$title_ar.'</p> <hr>
          <h5>descreption(ar)</h5>
          <p>'.$descreption_ar.'</p>
          </div>' ;
          $query2 = $conn->query("SELECT image FROM pages_images WHERE page_id=$id");
          echo '<div class="callout callout-info"> images:&nbsp;&nbsp;&nbsp; ';
          while ($result2 = $query2->fetch(PDO::FETCH_OBJ)) {
            echo '<img src="../uploaded/pages_images/'.$result2->image.'" width="50" height="50" alt=""> &nbsp;&nbsp;&nbsp;'  ;

          }
          '</div>' ;

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