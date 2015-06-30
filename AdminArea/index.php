<?php  

require 'header.php';




?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

           <div class="col-md-12">
            <!-- Application buttons -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Control Panel</h3>
                </div>
                <div class="box-body">

                    <a href="edit_site_data.php" class="btn btn-app ">
                        <i class="fa fa-tasks"></i> بيانات الموقع
                    </a> 
                    <a href="edit_about.php" class="btn btn-app">

                        <i class="fa fa-envelope"></i> من نحن                                        
                    </a>
                    <a href="news.php" class="btn btn-app ">

                        <i class="fa fa-bullhorn"></i> الاخبار
                    </a>      
                    <a href="slider.php" class="btn btn-app ">
                        <i class="fa fa-files-o"></i> عارض الصور 
                    </a>


                    <a href="clients.php" class="btn btn-app ">
                        <i class="fa fa-files-o"></i> العملاء 
                    </a>


                    <a href="pages.php" class="btn btn-app ">
                        <i class="fa fa-files-o"></i> الصفحات
                    </a>



                    <a href="works.php" class="btn btn-app ">
                        <i class="fa fa-files-o"></i> الاعمال
                    </a>


                    <a href="services.php" class="btn btn-app ">
                        <i class="fa fa-files-o"></i> الخدمات
                    </a>


                    <a href="works.php" class="btn btn-app ">
                        <i class="fa fa-files-o"></i> الاعمال
                    </a>


                </div><!-- /.box-body -->
            </div><!-- /.box -->


        </div>
    </div>

    <div class="row">

       <div class="col-md-12">
         <div class="box">
            <div class="box-header" style="cursor: move;">
                <h3 class="box-title">My subjects</h3>
            </div>
            <div class="box-body">
                <?php 
            // if($subjects->rowCount()) {
            //     while ($user_subjects = $subjects->fetch(PDO::FETCH_OBJ)) {
            //         echo '<a href="subject.php?id='.$user_subjects->id.'" class="btn btn-app ">
            //     <i class="fa fa-book"></i> '.$user_subjects->name.'
            // </a>';
            //     }
            // }
            // else {
            //     echo "sorry ! no subject now you teach it to be shown here";
            // }
                ?>
            </div><!-- /.box-body -->
        </div>

    </div>
</div>
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<?php 
require 'scripts.php';
?>
</body>
</html>
