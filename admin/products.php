<?php 

require 'sidebar.php';
require 'check_admin.php';
require 'connection.php';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Products

    </h1>

</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="row">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Show all products</h3>                                    
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title</th>
                                    <th>price</th>
                                    <th>description</th>
                                    <th>update</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $products = $conn->prepare("SELECT id , title_ar , price , desc_ar , image1 FROM products");
                                $products->execute();
                                $i = 1;
                                while ($product = $products->fetch(PDO::FETCH_OBJ)) {
                                    echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$product->title_ar.'</td>
                                    <td>'.$product->price.'</td>
                                    <td>'.substr($product->desc_ar, 0 , 150).'</td>
                                    <td><a href="edit_product.php?id='.$product->id.'" class="btn btn-warning">Edit</a></td>
                                    <td><a href="delete_product.php?id='.$product->id.'" class="btn btn-danger">Delete</a></td>
                                    
                                </tr>';
                                $i++;
                                }
                                ?>                                       
                                
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<!-- jQuery 2.0.2 -->



<?php 
require 'footer.php';
?>


</body>
</html>