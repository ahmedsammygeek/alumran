<?php 
// include 'header.php';
require 'sidebar.php';

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        add new menu 

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
                    <?php 
                    if (isset($_GET['msg'])) {
                        switch ($_GET['msg']) {
                            case 'empty_data':
        //this case if admin left inputs empty show allert (to complete this space)
                            echo '<div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b> you leave some data empty please complete inputs and try again.
                            </div>' ;
                            break;
                            case 'error_data':
        //this case if exist an error in sql request 
                            echo '<div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b>an error in your data insert please try again or sent message to us .
                            </div>' ;
                            break;
                            case 'ar_neq_en':
                            echo '<div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b>the number of categories in arabic not equal in english .
                            </div>' ;
                            break;
                           

                            default:

                            break;
                        }
                    }

                    ?>
                    <h3 class="box-title">enter data of menu</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="add_menu.php" method="post" enctype="multipart/form-data" >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">name (en)</label>
                            <input type="text" name="menu" class="form-control" id="exampleInputEmail1" placeholder="Enter new menu name">
                        </div>
                        


                    </div><!-- /.box-body -->
                     <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">name(ar)</label>
                            <input type="text" name="menu_ar" class="form-control" id="exampleInputEmail1" placeholder="Enter new menu name">
                        </div>
                        
                        <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">image</label>
                            <input type="file" name="file" class="form-control" id="exampleInputEmail1" >
                        </div>
                    </div>


                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">add</button>
                    </div>
                </form>
            </div><!-- /.box -->


        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->




</aside>
</div><!-- ./wrapper -->


<?php 
require 'footer.php';

?>



</body>
</html>