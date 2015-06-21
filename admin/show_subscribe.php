<?php 

require 'sidebar.php';
require 'check_admin.php';
require '../connection/connection.php';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      subscribes

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
                        <h3 class="box-title"></h3>                                    
                    </div><!-- /.box-header -->
                    <a href="send_mail_all.php" class="btn btn-success btn-lg">send to all</a>

                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>email</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = $conn->prepare("SELECT * FROM newsletter");
                                $query->execute();
                                $i = 1;
                                while ($result = $query->fetch(PDO::FETCH_OBJ)) {
                                    echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$result->name.'</td>
                                    <td>'.$result->email.'</td>
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