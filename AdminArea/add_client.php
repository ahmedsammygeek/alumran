<?php 

require 'header.php';


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
            <li><a href="index.php"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li class="active">الاخبار</li>
        </ol>
    </section>

    <!-- Main content -->
    <section  dir="rtl" class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">اضافة خبر جديد</h3>
                    </div>

                    <!-- form start -->
                    
                    <div class="box-body">
                     <?php 
                     if(isset($_GET['msg']))  {
                        switch ($_GET['msg']) {


                          
                           case 'link':
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
                           لابد من ادخال الصورة  
                           </div>';
                           break;

                           case 'link_invalid':
                           echo '<div class="alert alert-danger alert-dismissable">
                           <i class="fa fa-ban"></i>
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           ادخل الرابط بشكل صحيح  
                           </div>';
                           break;

                           case 'invalid':
                           echo '<div class="alert alert-danger alert-dismissable">
                           <i class="fa fa-ban"></i>
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           من فضلك ادخل صورة بامتداد صالح 
                           </div>';
                           break;

                       }
                   }
                   ?>
                   <div class="row">
                     <form action="insert_client.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1"> اختر صورة </label>
                                <input type="file" name="client_pic"   >
                            </div>
                        </div>
                        <div class="col-md-12">
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1"> الرابط </label>
                                <input type="text" name="link" id="input" class="form-control"   >
                                <label for="exampleInputEmail1">  مثال : httP://www.yahoo.com</label>
                                
                            </div>

                           
                        </div>
      
                        <div class="box-footer">
                            <input type="submit" name="goo" class="btn btn-success pull-right" value="اضافة ">
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


</body>
</html>
