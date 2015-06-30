<?php 
require 'check_user.php';
require 'connection.php';
$user = $conn->prepare("SELECT name  FROM admin WHERE id = ?");
$user->bindValue(1,$_SESSION['system_user_id'],PDO::PARAM_INT);
$user->execute();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>لوحة تحكم الموقع</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
      </head>
      <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminPanel
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">



                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $_SESSION['system_user_name']; ?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">


                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="profile.php" class="btn btn-default btn-flat">الملف الشخصى</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">تسجيل الخروج</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">

                        <div class="pull-left info">
                            <p>مرحبا بك </p>

                            
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="">
                            <a href="../index.php">
                                <i class="fa fa-dashboard"></i> <span>زياردة الموقع</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>الرئيسية</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="edit_about.php">
                                <i class="fa fa-dashboard"></i> <span>من نحن </span>
                            </a>
                        </li>

                        <li class="">
                            <a href="edit_site_data.php">
                                <i class="fa fa-dashboard"></i> <span>بيانات الموقع </span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="news.php">
                                <i class="fa fa-laptop"></i>
                                <span>الاخبار</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="add_news.php"><i class="fa fa-angle-double-right"></i>اضافة خبر جديد </a></li>

                                <li><a href="news.php"><i class="fa fa-angle-double-right"></i>جميع الاخبار </a></li>  
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="news.php">
                                <i class="fa fa-laptop"></i>
                                <span>عارض الصورة </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="slider.php"><i class="fa fa-angle-double-right"></i> جميع الشرائح </a></li>

                                <li><a href="add_slide.php"><i class="fa fa-angle-double-right"></i> اضافة جديد </a></li>  
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="services.php">
                                <i class="fa fa-laptop"></i>
                                <span>الخدمات</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="services.php"><i class="fa fa-angle-double-right"></i> الخدمات</a></li>

                                <li><a href="add_service.php"><i class="fa fa-angle-double-right"></i> اضافة جديد </a></li>  
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="clients.php">
                                <i class="fa fa-laptop"></i>
                                <span>العملاء</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="clients.php"><i class="fa fa-angle-double-right"></i> العملاء</a></li>

                                <li><a href="add_client.php"><i class="fa fa-angle-double-right"></i> اضافة جديد </a></li>  
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="pages.php.php">
                                <i class="fa fa-laptop"></i>
                                <span>الصفحات</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages.php"><i class="fa fa-angle-double-right"></i> الصفحات</a></li>

                                <li><a href="add_pages.php"><i class="fa fa-angle-double-right"></i> اضافة صفحة جديدة </a></li>  
                            </ul>
                        </li>


                        <li class="treeview">
                            <a href="works.php">
                                <i class="fa fa-laptop"></i>
                                <span>الاعمال</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="works.php"><i class="fa fa-angle-double-right"></i> الاعمال</a></li>

                                <li><a href="add_work.php"><i class="fa fa-angle-double-right"></i> اضافة جديد </a></li>  
                            </ul>
                        </li>



                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
