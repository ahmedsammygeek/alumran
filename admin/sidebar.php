<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>retag Adminpanel </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
   
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

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
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>admin <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <p>log out now .</p>                                    </div>
                                        <div class="pull-right">
                                            <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
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
                            <div class="pull-left image">
                            </div>
                            <div class="pull-left info">

                            </div>
                        </div>

                      
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class="sidebar-menu">
                            <li class="active">
                                <a href="showadmin.php">
                                    <i class="fa fa-dashboard"></i> <span>admins</span>
                                </a>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>menu</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="show_menu.php"><i class="fa fa-angle-double-right"></i> menu </a></li>
                                    <li><a href="menu.php"><i class="fa fa-angle-double-right"></i> add menu</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>slider</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="showslider.php"><i class="fa fa-angle-double-right"></i> sliders </a></li>
                                    <li><a href="slider.php"><i class="fa fa-angle-double-right"></i> add slider</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>products</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="products.php"><i class="fa fa-angle-double-right"></i> products </a></li>
                                    <li><a href="add_product.php"><i class="fa fa-angle-double-right"></i> add product</a></li>
                                </ul>
                            </li>

                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>orders</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="orders.php"><i class="fa fa-angle-double-right"></i> all orders </a></li>
                                    <li><a href="new_orders.php"><i class="fa fa-angle-double-right"></i> new orders </a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="show_members.php">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>members</span>

                                </a>

                            </li>
                            <li>
                                <a href="show_subscribe.php">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>subscribe</span>

                                </a>

                            </li>
                            <li>
                                <a href="showabout.php">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>about_us</span>

                                </a>

                            </li>
                            <li>
                                <a href="show_terms.php">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>terms</span>

                                </a>

                            </li>

                            <li>
                                <a href="show_info.php">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>site info</span>

                                </a>

                            </li>

                            <li>
                                <a href="title.php">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span>title of products</span>

                                </a>

                            </li>


                            <li>
                                <a href="message.php">
                                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                </a>
                            </li>

                        </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>
                <aside class="right-side">