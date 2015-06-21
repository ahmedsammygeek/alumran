<?php 
require 'sidebar.php';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    add information about us

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
        if (isset($_GET['id'])) {
         $id=$_GET['id'];
       }
       require '../connection/connection.php';
       $query = $conn->query("SELECT * FROM aboutus WHERE id=$id ");
       while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
         extract($result);
       }


       ?>
       <form role="form" action="updateabout.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
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
             case 'error_data':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b> enter this file as image .
             </div>';
             break;
             case 'error_update':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b>   an error in your update please try again.
             </div>';
             break;
            
             default:
                                     # code...
             break;
           }
         } 
         ?>
         <div class="form-group">
          <label for="exampleInputEmail1">content(en)</label>

<textarea class="textarea" name="content"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $content ; ?></textarea>
           
        </div> 
        <div class="form-group">
          <label for="exampleInputEmail1">content(ar)</label>
          <textarea class="textarea" name="content_ar"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $content_ar ; ?></textarea>
           
        </div> 

      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-primary">update</button>
      </div>
    </form>
  </div><!-- /.box -->


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
