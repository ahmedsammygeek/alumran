<?php 

require 'sidebar.php';
require 'check_admin.php';
require 'connection.php';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      members

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
                        <h3 class="box-title">Show all members</h3>                                    
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">

                        <?php 
                        if (isset($_GET['msg'])) {
                            switch ($_GET['msg']) {

                                case 'error':
                                echo '<div class="alert alert-danger alert-dismissable">
                                <i class="fa fa-ban"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <b>Alert!</b>   an error in your delete please try again.
                                </div>';
                                break;
                                case 'deleted':
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
                                    
                                    <th>username</th>
                                    <th>email</th>
                                    <th>address</th>
                                    <th>phone</th>
                                    <th>date</th>
                                    <th>delete</th>
                                    <th>message</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = $conn->prepare("SELECT * FROM members");
                                $query->execute();
                                $i = 1;
                                while ($result = $query->fetch(PDO::FETCH_OBJ)) {
                                    echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$result->user_name.'</td>
                                    <td>'.$result->email.'</td>
                                    <td>'.$result->address.'</td>
                                    <td>'.$result->phone.'</td>
                                    <td>'.$result->date.'</td>
                                    <td><a href="delete_member.php?id='.$result->id.'" class="btn btn-danger">Delete</a></td>
                                    <td><a href="send_mail.php?id='.$result->id.'" class="btn btn-primary">send</a></td>
                                    
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