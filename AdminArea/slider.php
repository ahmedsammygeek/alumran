<?php 

require 'connection.php';

require 'header.php';



$news = $conn->prepare("SELECT * FROM slider");

$news->execute();







?>

<!-- Right side column. Contains the navbar and content of the page -->

<aside class="right-side">

    <!-- Content Header (Page header) -->

    <section class="content-header">

        <h1>

            لوحة التحكم

            <small>الاخبار</small>

        </h1>

        <ol class="breadcrumb">

            <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>

            <li class="active">الاخبار</li>

        </ol>

    </section>



    <!-- Main content -->

    <section class="content">



        <div class="row">

            <div class="col-md-12">

               <?php 

               if(isset($_GET['msg']))  {

                switch ($_GET['msg']) {

                    case 'again':

                    echo '<div class="alert alert-danger alert-dismissable">

                    <i class="fa fa-ban"></i>

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    <b>تنبية!</b> برجاء المحاولة مرة اخر حدث خطاء

                    </div>';

                    break;



                    case 'ins_error':

                    echo '<div class="alert alert-danger alert-dismissable">

                    <i class="fa fa-ban"></i>

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    <b>تنبية!</b> حاول مرة اخرى لقد حدث خطاء 

                    </div>';

                    break;



                    case 'up_error':

                    echo '<div class="alert alert-danger alert-dismissable">

                    <i class="fa fa-ban"></i>

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    <b>تنبية!</b> لقد حدث عطل اثناء رفع الملف من فضلك اول مرة اخرى

                    </div>';

                    break;

                    

                    case 'done':

                    echo '<div class="alert alert-success alert-dismissable">

                    <i class="fa fa-ban"></i>

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    تم ادخل  البيانات بناجاح

                    </div>';

                    break;



                    case 'up_done':

                    echo '<div class="alert alert-success alert-dismissable">

                    <i class="fa fa-ban"></i>

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    تم التعديل على البيانات بناجاح

                    </div>';

                    break;



                    case 'de_done':

                    echo '<div class="alert alert-success alert-dismissable">

                    <i class="fa fa-ban"></i>

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    تم حذف الخبر بناجاح

                    </div>';

                    break;







                }

            }

            ?>

            <div class="box">

                <div class="box-header">

                    <h3 class="box-title">ادارة اخبار الوقع</h3>

                </div>

                <div class="box-footer">

                    <a  href="add_slide.php" class="btn btn-info pull-right ">اضف شريحة  جديد</a>

                    <br>

                </div>

                <div class="box-body table-responsive">

                    <table dir="rtl" id="tasks" class="table table-bordered table-hover">

                        <thead>

                            <tr>

                                <th class="text-center">مسلسل</th>

                                
                                <th class="text-center" >الصورة </th>

                                <th class="text-center" >تعديل </th>

                                <th class="text-center" >خذف</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php 

                            $i = 1;

                            while ($new = $news->fetch(PDO::FETCH_OBJ)) {

                                echo '<tr>

                                <td>'.$i.'</td>

                               

                                <td> <img src="../uploaded/slider/'.$new->image.'" width="200" height="100" alt=""> </td>

                                <td><a href="edit_slide.php?id='.$new->id.'&img='.$new->image.'" class="btn btn-warning">تعديل</a></td>

                                <td><a href="delete_slide.php?id='.$new->id.'&img='.$new->image.'" class="btn btn-danger">خذف</a></td>

                                </tr>';

                                $i++;

                            }

                            ?>

                            

                        </tbody>



                    </table>

                </div><!-- /.box-body -->

            </div>

        </div>

    </div>

</section><!-- /.content -->

</aside><!-- /.right-side -->

</div><!-- ./wrapper -->





<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<!-- Bootstrap -->

<script src="js/bootstrap.min.js" type="text/javascript"></script>



<script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>

<script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>



<script>

$(function () {

    $("#tasks").dataTable();

});

</script>





<!-- AdminLTE App -->

<script src="js/AdminLTE/app.js" type="text/javascript"></script>



</body>

</html>

