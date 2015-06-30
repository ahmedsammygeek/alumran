<?php 

require 'header.php';

if(isset($_GET['id'], $_GET['img']) && !empty($_GET['id']) ) {
    // filter the id input
    $id = filter_input(INPUT_GET, 'id' ,FILTER_SANITIZE_NUMBER_INT  );
    // get the new info by id
    $select = $conn->prepare("SELECT * FROM news WHERE id = ? ");
    $select->bindValue(1,$id , PDO::PARAM_INT);
    $select->execute();
    // check if the ir returned data or not
    if(!$select->rowCount()) {
     header("Location: news.php");
     die();
 }

 $topic = $select->fetch(PDO::PARAM_INT);

}
else {
    header("Location: news.php");
    die();
}




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
    <section dir="rtl" class="content">

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
                       <form action="update_news.php?id=<?php echo $id.'&img='.$topic->image ; ?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-10">
                            <label for="">  الصورة الحالية </label>
                            <br>
                            <?php 
                            if(isset($topic->image)) {
                                echo '<img src="../uploaded/news/'.$topic->image.'" width="300" height="300" class="img-thumbnail">';
                            }
                            ?>
                            
                        </div>
                        <div class="col-md-12">
                            <p><legend >البيانات بالعربية</legend></p>  
                            <div class="form-group">
                                <label for="exampleInputEmail1"> العنوان </label>
                                <input type="text" value="<?php echo $topic->title_ar ?>" name="title_ar" id="input" class="form-control"   >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">  المحتوى </label>
                                <textarea id="editor1" class="form-control" name="content_ar"><?php echo $topic->content_ar ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <legend>البيانات بالانجليزية</legend> 
                            <div class="form-group">
                                <label for="exampleInputEmail1"> العنوان </label>
                                <input type="text" value="<?php echo $topic->title ?>" name="title" id="input" class="form-control"   >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">   المحتوى </label>
                                <textarea id="editor2" class="form-control" name="content"><?php echo $topic->content ?></textarea>
                            </div>


                        </div>

                        <div class="col-md-12">
                            <legend>معلومات اضافية </legend> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">صورة الخبر (اختيارى)</label>
                                <input type="file" name="news_pic" id="input" class="form-control"   >
                            </div>


                        </div>


                        <div class="box-footer">
                            <input type="submit" name="goo" class="btn btn-success pull-right" value="تعديل  الخبر">
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
