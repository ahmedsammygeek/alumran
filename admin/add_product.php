<?php 
require 'sidebar.php';
require 'connection.php';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Add New product

    </h1>

</section>

<!-- Main content -->
<section class="content">
    <form action="insert_product.php" method="post" enctype="multipart/form-data" >
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Main Product Details  </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">
                        <div class="form-group">
                            <label >price</label>
                            <input type="text" name="price" class="form-control" >
                        </div>
                        <label for="exampleInputFile">Product's Categories </label>
                        
                            <?php 

                            $main_cats = $conn->prepare("SELECT id , cat_name FROM menu ");
                            $main_cats->execute();

                            while ($main_cat = $main_cats->fetch(PDO::FETCH_OBJ)) {
                                echo '<div class="checkbox">';
                                echo "<label > ".$main_cat->cat_name." </label><br>";
                                $sub_cats = $conn->prepare("SELECT * FROM menu_menu WHERE menu_id = ?");
                                $sub_cats->bindValue(1 , $main_cat->id , PDO::PARAM_INT);
                                $sub_cats->execute();

                                while ( $sub_cat = $sub_cats->fetch(PDO::FETCH_OBJ)) {
                                    echo '<label style="margin-left:9px;"><input name="cat_id[]" value="'.$sub_cat->id.'"
                                     type="checkbox"/>'.$sub_cat->cat_name_menu.'</label>';
                                }

                                echo "</div>";
                            }

                            ?>



                        


                        <div class="form-group">
                            <label for="exampleInputFile">Product's images </label>
                            <input type="file" name="images[]">
                            <input type="file" name="images[]">
                            <input type="file" name="images[]">
                            <input type="file" name="images[]">

                        </div>

                    </div><!-- /.box-body -->

                </div><!-- /.box -->

                <!-- Form Element sizes -->
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Product's Info in English </h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label >title</label>
                            <input type="text" name="title_en" class="form-control" >
                        </div>


                        <label >product description</label>
                        <textarea class="textarea" name="desc_en" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>


                        <label>product extra info </label>
                        <textarea class="textarea" name="extra_en" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>



                    </div>


                </div><!-- /.box -->

                <!-- Form Element sizes -->
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Product's Info in Arabic </h3>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label >title</label>
                            <input type="text" name="title_ar" class="form-control" >
                        </div>


                        <label >product description</label>
                        <textarea class="textarea" name="desc_ar" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>


                        <label>product extra info </label>
                        <textarea class="textarea" name="extra_ar" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>



                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">add</button>

                        <button type="reset" class="btn btn-primary">reset</button>
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