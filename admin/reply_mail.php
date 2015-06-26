<?php 
// include 'header.php';
require 'sidebar.php';

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        reply message

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
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                    }
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
                            case 'nup':
                            echo '<div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b>contact with support pleace.
                            </div>' ;
                            break;


                            default:

                            break;
                        }
                    }

                    ?>
                    <h3 class="box-title">enter your message</h3>
                </div><!-- /.box-header -->

                <!-- form start -->
                <form role="form" action="add_mail.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">message: </label>
                            <textarea type="text" name="message" class="form-control" id="exampleInputEmail1"></textarea>
                        </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">image: </label>
                            <input type="file" name="file" class="form-control" id="exampleInputEmail1">
                        </div>

                    </div><!-- /.box-body -->
                  
                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">reply</button>
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