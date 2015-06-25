<?php 
require 'sidebar.php';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    edit this page content

  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">enter data</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <?php 
        if (!isset($_GET['id'])) {
         header("location: website_pages.php");die();
       }
       $id=$_GET['id'];
       require '../connection/connection.php';
       $query = $conn->query("SELECT * FROM pages WHERE id=$id ");
       while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
         extract($result);
       }


       ?>
       <form role="form" action="update_page.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
        <div class="box-body">
          <?php
          if (isset($_GET['msg'])) {
           switch ($_GET['msg']) {
             case 'empty_data':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b>   you leave input empty please complete inputs and try again.
             </div>';
             break;
             case 'error':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b> error contact with support please .
             </div>';
             break;
             default:
             break;
           }
         } 
         ?>
         <div class="form-group">
          <label for="exampleInputEmail1">title(en)</label>
          <input type="text" name="title" value='<?php echo "$title"; ?>' class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">content(en)</label>

          <textarea class="textarea" name="content"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $descreption ; ?></textarea>

        </div> 
        <div class="form-group">
          <label for="exampleInputEmail1">title(ar)</label>
          <input type="text" name="title_ar" value='<?php echo "$title_ar"; ?>' class="form-control" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">content(ar)</label>
          <textarea class="textarea" name="content_ar"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $descreption_ar ; ?></textarea>

        </div> 

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-primary">update</button>
      </div>
    </form>
  </div><!-- /.box -->
  <div class="box-body table-responsive no-padding">
   <?php 
   if (isset($_GET['msg'])) {
        //if exist msg in link get this message and do defferent action in every case and show alert

    switch ($_GET['msg']) {

      case 'empty_data':
      echo '<div class="alert alert-danger alert-dismissable">
      <i class="fa fa-ban"></i>
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <b>Alert!</b> enter new image please.
      </div>';
      break;
      case 'err_vali':
      echo '<div class="alert alert-danger alert-dismissable">
      <i class="fa fa-ban"></i>
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <b>Alert!</b> enter new image (ipg , png , jpeg).
      </div>';
      break;
      case 'deleted':
      echo '<div class="alert alert-success alert-dismissable">
      <i class="fa fa-check"></i>
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <b>Alert!</b> data deleted successfully.
      </div>';  
      break;
      case 'inserted':
      echo '<div class="alert alert-success alert-dismissable">
      <i class="fa fa-check"></i>
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <b>Alert!</b> data deleted successfully.
      </div>';  
      break;
      break; 
      break;

      default:

      break;
    }
  }


  ?>

  <table class="table table-bordered table-striped">

    <tbody><tr>
      <th>#</th>
      <th>IMAGES</th>
      <th>DELETE</th>


    </tr>
    <?php
    require '../connection/connection.php';
    $sql="SELECT id , image FROM pages_images WHERE page_id=$id ";
    $query=$conn->query($sql);
    $i=1;
    while ($result=$query->fetch(PDO::FETCH_OBJ)) {

     echo " <tr>
     <td>$i</td>
     <td> <img src='../uploaded/pages_images/".$result->image."' width='60' height='60'> </td>
     <td>
     <a href='delete_pages_image.php?image_id=$result->id&page_id=$id' class='btn btn-danger btn-sm'>delete</a>
     </td>
     </tr>" ;
     $i++;

   } 

   ?>
 </tbody></table>
 <form role="form" action="add_image_page.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
  <label for="">add image: </label>
  <input type="file" name="file"><br>
  <button type="submit" name="submit" class="btn btn-primary">ADD</button>

</form>
</div><!-- /.box-body -->



</div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->



<?php 
require 'footer.php';
?>


<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {

                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
              });
</script>
