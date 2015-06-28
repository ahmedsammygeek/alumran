<?php 

require 'sidebar.php';
require 'check_admin.php';
require '../connection/connection.php';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        details

    </h1>

</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="row">
                <?php 
                if (isset($_GET['msg'])) {
                    //if exist msg in link get this message and do deffrent action in every case and show alert
                    switch ($_GET['msg']) {
                        case 'updated':
                        echo '<div class="alert alert-success alert-dismissable">
                        <i class="fa fa-check"></i>

                        <b>Alert!</b> data updated successfully.
                        </div>' ;
                        break;

                    }
                }


                ?>
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">website home page</h3>                                    
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title(en) </th>
                                    <th>description(en) </th>
                                    
                                    <th>title(ar)</th>
                                    <th>description(ar) </th>
                                    <th>update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = $conn->query("SELECT * FROM website_home");
                                $i = 1;
                                while ($result = $query->fetch(PDO::FETCH_OBJ)) {
                                    echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$result->title.'</td>
                                    <td>'.$result->content.'</td>
                                    
                                    <td>'.$result->title_ar.'</td>
                                    <td>'.$result->content_ar.'</td>
                                   
                                    <td><a href="edit_website_home.php?id='.$result->id.'" class="btn btn-warning btn-sm">UPDATE</a></td></tr>'; 
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