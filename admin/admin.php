<?php 
// include 'header.php';
require 'sidebar.php';

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        add new admin to control panel

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

        default:
                                # code...
        break;
    }
}

?>
                    <h3 class="box-title">enter data of admin</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="addadmin.php" method="post" enctype="multipart/form-data" >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter new admin name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="enter password to this new admin">
                        </div>


                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">add admin</button>
                    </div>
                </form>
            </div><!-- /.box -->


        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
<?php 
require 'footer.php';

?>