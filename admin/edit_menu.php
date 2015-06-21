<?php 
// include 'header.php';
require 'sidebar.php';

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        edit menu 

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
                    <h3 class="box-title">edit data of menu</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php   
                /*
                get id of row we want edit
                */
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $img = $_GET['img'];
                }
                /*
                select menu name in this id
                */
                require 'connection.php';
                $query = $conn->prepare("SELECT cat_name,cat_name_ar,image FROM menu WHERE id=?");
                $query->bindValue(1,$id,PDO::PARAM_INT);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_OBJ);

                ?>
                <form role="form" action="update_menu.php<?php echo "?id=$id&img=$img"; ?>" method="post" enctype="multipart/form-data" >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">name(en)</label>
                            <input type="text" name="menu" value='<?php echo "$result->cat_name"; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter new menu name">
                        </div>

                    </div><!-- /.box-body -->
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">name(ar)</label>
                            <input type="text" name="menu_ar" value='<?php echo "$result->cat_name_ar"; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter new menu name">
                        </div>

                    </div><!-- /.box-body -->
                    <div class="box-body">
                        <div class="form-group">
                            <p>last image: </p>
                            <img src="image/<?php echo "$result->image"; ?>" width='100px' height='70px' alt="">
            
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">image</label>
                            <input type="file" name="file" class="form-control" id="exampleInputEmail1" >
                        </div>
                    </div>

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