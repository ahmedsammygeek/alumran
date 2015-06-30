<?php 
// include 'header.php';
require 'sidebar.php';
            /*
            get id for this category
            */
            if (isset($_GET['id'])) {
              $id = $_GET['id'];
          }
          ?>

          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
                Add New category

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
                                       case 'en_neq_ar':
                                    echo '<div class="alert alert-danger alert-dismissable">
                                    <i class="fa fa-ban"></i>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <b>Alert!</b>the number of categories in arabic not equal in english.
                                    </div>' ;
                                    break;

                                    default:

                                    break;
                                }
                            }

                            ?>
                            
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="add_category_menu.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
                         <div class="box-body">
                            <div class="form-group">
                                <label >put (,) between categories name(en)</label>
                                <input type="text" name="cat_name" class="form-control" placeholder="enter category name" >
                            </div>
                            <div class="form-group">
                                <label >title(en)</label>
                                <input type="text" name="title" class="form-control" placeholder="enter title of this category" >
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label >put (,) between categories name(ar)</label>
                                <input type="text" name="cat_name_ar" class="form-control" placeholder="enter category name">
                            </div>
                             <div class="form-group">
                                <label >title(ar)</label>
                                <input type="text" name="title_ar" class="form-control" placeholder="enter title(arabic) of this category">
                            </div>
                        </div>
                               

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