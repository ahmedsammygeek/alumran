<?php 
// include 'header.php';
require 'sidebar.php';

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        edit site information

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
                            <b>Alert!</b>an error in your data update please try again or sent message to us .
                            </div>' ;
                            break;

                            default:

                            break;
                        }
                    }

                    ?>
                    <h3 class="box-title">site info</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php   
                /*
                get id of row we want edit
                */
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                }
                /*
                select menu name in this id
                */
                require '../connection/connection.php';
                $query = $conn->prepare("SELECT * FROM site_info WHERE id=?");
                $query->bindValue(1,$id,PDO::PARAM_INT);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_OBJ);

                 ?>
                <form role="form" action="update_info.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">phone</label>
                            <input type="text" name="phone" value='<?php echo "$result->phone"; ?>' class="form-control" id="exampleInputEmail1" >
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">facebook</label>
                            <input type="text" name="facebook" value='<?php echo "$result->facebook"; ?>' class="form-control" id="exampleInputEmail1" >
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">twitter</label>
                            <input type="text" name="twitter" value='<?php echo "$result->twitter"; ?>' class="form-control" id="exampleInputEmail1" >
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">email</label>
                            <input type="text" name="email" value='<?php echo "$result->email"; ?>' class="form-control" id="exampleInputEmail1" >
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">address(ar)</label>
                            <input type="text" name="address_ar" value='<?php echo "$result->address_ar"; ?>' class="form-control" id="exampleInputEmail1" >
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1">address(en)</label>
                            <input type="text" name="address_en" value='<?php echo "$result->address_en"; ?>' class="form-control" id="exampleInputEmail1" >
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