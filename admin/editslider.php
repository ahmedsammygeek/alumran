 <?php 
 require 'sidebar.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
        update image slider

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

             require 'connection.php';
             $sql="SELECT * FROM slider WHERE id=$id ";
             $query=$conn->query($sql);
             while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
                 extract($result);
             }
             ?>
             <a href="showslider.php"> <button class="btn btn-primary" >sliders</button></a>

             <form role="form" action="updateslider.php<?php echo "?id=$id&&img=$image"; ?>" method="post" enctype="multipart/form-data" ><br>
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
                    <label for="exampleInputFile">add image</label>
                    <input type="file" name="file" id="exampleInputFile">
                    <p class="help-block">click to choose image</p>
                    <?php echo '<img src="image/'.$image.'"><h3>'.$image.'</h3>'  ; ?>
                </div>
                   <div class="form-group">
                            <label for="exampleInputFile">choose image place: </label>
                            <select name="place" class="form-control">
                                <option value="1">left</option>
                                <option value="2">top</option>
                                <option value="3">bottom</option>
                                <option value="4">right</option>
                            </select>
                        </div>


            </div><!-- /.box-body -->

            <div class="box-footer">
             <button  name="submit" type="submit" class="btn btn-primary">update</button>
         </div>
     </form>
 </div><!-- /.box -->


</div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

<?php 

require 'footer.php';
?>