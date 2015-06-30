<?php 
require 'sidebar.php';
            /*
            get id for this category
            */
            if (isset($_GET['id'])) {
              $id = $_GET['id'];

          }
          /*
          select data want to update
          */
          require 'connection.php';
          $query = $conn->prepare("SELECT * FROM menu_menu WHERE id = ?");
          $query->bindValue(1,$id,PDO::PARAM_INT);
          $query->execute();
          $result = $query->fetch(PDO::FETCH_OBJ);
          ?>
          <!-- Content Header (Page header) -->
          <section class="content-header">


            <h1>
                update category

            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <form action="update_category_menu.php<?php echo "?id=$id&menu_id=$result->menu_id"; ?>" method="post">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="box box-primary">
                            <div class="box-header">
                            </div><!-- /.box-header -->
                            <!-- form start -->

                        </div><!-- /.box-body -->

                    </div><!-- /.box -->


                    <!-- Form Element sizes -->
                    <div class="box box-success">
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
                                case 'error':
        //this case if exist an error in sql request 
                                echo '<div class="alert alert-danger alert-dismissable">
                                <i class="fa fa-ban"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <b>Alert!</b>an error in your data insert please try again or sent message to us .
                                </div>' ;
                                break;

                                default:

                                break;
                            }
                        }

                        ?>
                        <h3 class="box-title">category </h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label >category name (en)</label>
                            <input type="text" name="cat_name" value="<?php echo "$result->cat_name_menu"; ?>" class="form-control" >
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label >category name (ar)</label>
                            <input type="text" name="cat_name_ar" value="<?php echo "$result->cat_name_menu_ar"; ?>" class="form-control" >
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">update</button>
                    </div>
                </div><!-- /.box -->

            </div><!--/.col (left) -->



        </div>   <!-- /.row -->

    </form>
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<!-- jQuery 2.0.2 -->



<?php 
require 'footer.php';
?>

<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

<script>
$(".textarea").wysihtml5();
</script>

</body>
</html>