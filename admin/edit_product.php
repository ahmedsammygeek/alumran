<?php 



if(!isset($_GET['id']) || empty($_GET['id'])) {
    header("location: products.php");
    die();
}
require 'sidebar.php';
$id = filter_input(INPUT_GET , 'id' , FILTER_SANITIZE_NUMBER_INT);
require '../connection/DB.php';
$product = $conn->prepare("SELECT * FROM products WHERE id = ?");
$product->bindValue(1 , $id , PDO::PARAM_INT);
$product->execute();

if(!$product->rowCount()) {
 header("location: products.php");
 die();
}
$item = $product->fetch(PDO::FETCH_OBJ);

$item_categories = $conn->prepare("SELECT * FROM product_categories WHERE product_id = ?");
$item_categories->bindValue(1 , $id , PDO::PARAM_INT);
$item_categories->execute();

$categoreis = array();

while ($one = $item_categories->fetch(PDO::FETCH_OBJ)) {
    $categoreis[] = $one->category_id;
}


?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Add New product

    </h1>

</section>

<!-- Main content -->
<section class="content">
    <form action="update_product.php?id=<?php echo $id; ?>" method="post">
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
                            <input type="text" name="price" class="form-control" value="<?php echo $item->price; ?>" >
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

                            while ($sub_cat = $sub_cats->fetch(PDO::FETCH_OBJ)) {
                                if(in_array($sub_cat->id  , $categoreis  )) {
                                    echo '<label style="margin-left:9px;"><input name="cat_id[]" value="'.$sub_cat->id.'"
                                    type="checkbox"checked />'.$sub_cat->cat_name_menu.'</label>';
                                }
                                else {
                                    echo '<label style="margin-left:9px;"><input name="cat_id[]" value="'.$sub_cat->id.'"
                                    type="checkbox"/>'.$sub_cat->cat_name_menu.'</label>';
                                }

                            }

                            echo "</div>";
                        }

                        ?>
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
                            <input type="text" value="<?php echo $item->title_en; ?>"  name="title_en" class="form-control" >
                        </div>


                        <label >product description</label>
                        <textarea class="textarea" name="desc_en" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo html_entity_decode($item->desc_en); ?></textarea>


                        <label>product extra info </label>
                        <textarea class="textarea" name="extra_en" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo html_entity_decode($item->extra_info_en); ?></textarea>



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
                            <input type="text" value="<?php echo $item->title_ar; ?>" name="title_ar" class="form-control" >
                        </div>


                        <label >product description</label>
                        <textarea class="textarea" name="desc_ar" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo html_entity_decode($item->desc_ar); ?></textarea>


                        <label>product extra info </label>
                        <textarea class="textarea" name="extra_ar" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo html_entity_decode($item->extra_info_ar); ?></textarea>



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