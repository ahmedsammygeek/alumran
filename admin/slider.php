 <?php 
 require 'sidebar.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
        add new image to slider

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
                if (isset($_GET['msg'])) {
                    //if exist msg in link get this message and do deffrent action in every case and show alert
                    switch ($_GET['msg']) {
                        case 'empty_data':
                        //here user left eny input place empty
                        echo '<div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b> please complete required data.
                        </div>';
                        break;
                        case 'error_data':
                        //this case error in sql request
                        echo '<div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b> erro in your data inserted please try again.
                        </div>';
                        break;
                        
                        default:
                                            # code...
                        break;
                    }
                }


                ?>
                <a href="showslider.php"> <button class="btn btn-primary" >sliders</button></a>

                <form role="form" action="addslider.php" method="post" enctype="multipart/form-data" ><br>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputFile">add image</label>
                            <input type="file" name="file" id="exampleInputFile">
                            <p class="help-block">click to choose image</p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">choose image place: </label>
                            <select name="place" class="form-control">
                                <option value="1">left</option>
                                <option value="2">top</option>
                                <option value="3">bottom</option>
                                <option value="4">right</option>
                                <option value="5">brand</option>
                            </select>
                        </div>


                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <input type="submit" name="submit" class="btn btn-primary" value="add slide">
                    </div>
                </form>
            </div><!-- /.box -->


        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->

<?php 

require 'footer.php';
?>