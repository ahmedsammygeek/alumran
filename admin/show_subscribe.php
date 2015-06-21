<?php 

require 'sidebar.php';
require 'check_admin.php';
require 'connection.php';
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

                        <?php 
                        if (isset($_GET['msg'])) {
        //if exist msg in link get this message and do defferent action in every case and show alert

                            switch ($_GET['msg']) {

                                case 'error':
            //this case error in sql request to delete this data
                                echo '<div class="alert alert-danger alert-dismissable">
                                <i class="fa fa-ban"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <b>Alert!</b>   an error in your delete please try again.
                                </div>';
                                break;
                                case 'deleted':
            //this case data deleted successful
                                echo '<div class="alert alert-success alert-dismissable">
                                <i class="fa fa-check"></i>

                                <b>Alert!</b> data deleted successfully.
                                </div>' ;
                                break;


                                default:

                                break;
                            }
                        }


                        ?>


                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>email</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = $conn->prepare("SELECT * FROM news_letter");
                                $query->execute();
                                $i = 1;
                                while ($result = $query->fetch(PDO::FETCH_OBJ)) {
                                    echo '<tr>
                                    <td>'.$i.'</td>
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