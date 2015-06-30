<?php 


require 'header.php';

$site = $conn->prepare("SELECT * FROM site_data WHERE id = 1");
$site->execute();

$info = $site->fetch(PDO::FETCH_OBJ);

?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            لوحة التحكم
            <small>بيانات الموقع</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li class="active">بيانات الموقع</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">بيانات الموقع الرئيسية</h3>
                    </div>

                    <!-- form start -->
                    
                    <div class="box-body">
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
                            
                            case 'done':
                            echo '<div class="alert alert-success alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            تم التعديل على البيانات بناجاح
                            </div>';
                            break;

                        }
                    }
                    ?>
                    <div class="row">
                     <form action="update_about.php" method="post">
                        <div class="col-md-12">
                            <legend >البيانات بالعربية</legend>  

                            <div class="form-group">
                                <label for="exampleInputEmail1"> من نحن </label>
                                <textarea id="editor1" class="form-control" name="about_ar"><?php echo $info->about_ar; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <legend>البيانات بالانجليزية</legend> 


                            <div class="form-group">
                                <label for="exampleInputEmail1">  من نحن </label>
                                <textarea id="editor2" class="form-control" name="about"><?php echo $info->about; ?></textarea>
                            </div>


                        </div>


                        <div class="box-footer">
                            <input type="submit" name="goo" class="btn btn-success pull-right" value="تعديل البيانات">
                        </div>
                    </form>
                </div>

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
<!-- AdminLTE App -->
<script src="js/AdminLTE/app.js" type="text/javascript"></script>

<!-- CK Editor -->
<script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                CKEDITOR.replace('editor2');

                //bootstrap WYSIHTML5 - text editor

            });
</script>

<!-- AdminLTE App -->
<script src="js/AdminLTE/app.js" type="text/javascript"></script>

</body>
</html>
