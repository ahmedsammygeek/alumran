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
                                    <th>order code </th>
                                    <th>date </th>
                                    <th>user</th>
                                    <th>user phone</th>
                                    <th>notes </th>
                                    <th>total price</th>
                                    <th>status</th>
                                    <th>details</th>
                                    <th>mark</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $orders = $conn->prepare("SELECT O.* , M.phone as phone , M.user_name  as name FROM orders as O LEFT JOIN members as M 
                                    on O.user_id = M.id WHERE status = 1 ");
                                $orders->execute();
                                $i = 1;
                                while ($order = $orders->fetch(PDO::FETCH_OBJ)) {
                                    echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$order->order_code.'</td>
                                    <td>'.$order->order_date.'</td>
                                    <td>'.$order->name.'</td>
                                    <td>'.$order->phone.'</td>
                                    <td>'.$order->notes.'</td>
                                    <td>'.$order->total_price.'</td> ';
                                    if($order->status == 1) {
                                        echo '<td> لم يتم الدفع بعد </td>';
                                    }
                                    elseif ($order->status == 2) {
                                         echo '<td> تم الدفع  </td>';
                                    }
                                    else {
                                        echo '<td> تم التوصيل   </td>';
                                    }
                                    echo '
                                    <td><a href="order_details.php?id='.$order->id.'" class="btn btn-sm btn-info">details</a></td>
                                    <td><a href="mark.php?id='.$order->id.'" class="btn btn-sm btn-primary">Mark</a></td>
                                    <td><a href="delete_order.php?id='.$order->id.'" class="btn btn-sm btn-danger">Delete</a></td>
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