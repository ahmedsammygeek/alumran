<?php 

require 'header.php';


?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            لوحة التحكم
            <small>الخدمات</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li class="active">الخدمات</li>
        </ol>
    </section>

    <!-- Main content -->
    <section  dir="rtl" class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">اضافة خدمة جديد</h3>
                    </div>

                    <!-- form start -->
                    
                    <div class="box-body">
                       <?php 
                       if(isset($_GET['msg']))  {
                        switch ($_GET['msg']) {


                         case 'title_ar':
                         case 'title':
                         case 'content_ar':
                         case 'content':
                         echo '<div class="alert alert-danger alert-dismissable">
                         <i class="fa fa-ban"></i>
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         برجاء ادخال كافة البيانات كاملة فى المحتوى العربى و الاجنبى 
                         </div>';
                         break;

                         case 'image':
                         echo '<div class="alert alert-danger alert-dismissable">
                         <i class="fa fa-ban"></i>
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         يجب ادخال الصورة 
                         </div>';
                         break;


                         case 'invalid':
                         echo '<div class="alert alert-danger alert-dismissable">
                         <i class="fa fa-ban"></i>
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         من فضلك ادخل امتداد صالح للصورة
                         </div>';
                         break;

                     }
                 }
                 ?>
                 <div class="row">
                   <form action="insert_service.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1">صورة الخدمة </label>
                            <input type="file" name="service_pic" id="input" class="form-control"   >
                        </div>                         
                    </div>
                    <div class="col-md-12">
                        <legend >البيانات بالعربية</legend>  
                        <div class="form-group">
                            <label for="exampleInputEmail1"> العنوان </label>

                            <input type="text" name="title_ar" id="input" class="form-control"   >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">  المحتوى </label>
                            <input type="text" class="form-control" name="content_ar">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <legend>البيانات بالانجليزية</legend> 
                        <div class="form-group">
                            <label for="exampleInputEmail1"> العنوان </label>
                            <input type="text" name="title" id="input" class="form-control"   >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">   المحتوى </label>
                            <input type="text" class="form-control" name="content">
                           
                        </div>


                    </div>


                    <div class="box-footer">
                        <input type="submit" name="goo" class="btn btn-success pull-right" value="اضافة  ">
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

 

</body>
</html>
