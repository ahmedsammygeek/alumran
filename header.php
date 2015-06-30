<?php 

require 'AdminArea/connection.php';



$site_data = $conn->prepare("SELECT  * FROM site_data WHERE id=1");

$site_data->execute();



$info = $site_data->fetch(PDO::FETCH_OBJ);



$page1 = $conn->prepare("SELECT * FROM sub_pages WHERE parent_id = 1");

$page1->execute();



$page2 =  $conn->prepare("SELECT * FROM sub_pages WHERE parent_id = 2");

$page2->execute();





$page3 =  $conn->prepare("SELECT * FROM sub_pages WHERE parent_id = 3");

$page3->execute();

?>

<!doctype html>

<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->

<html lang="en">



<head>



    <!-- Basic -->

    <title><?php echo $info->title_ar ; ?> | Home</title>



    <!-- Define Charset -->

    <meta charset="utf-8">



    <!-- Responsive Metatag -->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <!-- Page Description and Author -->

    <meta name="description" content="<?php echo $info->title ?> susdi oil company">

   <!--  <meta name="author" content="iThemesLab"> -->



    <!-- Bootstrap CSS  -->

    <link rel="stylesheet" href="asset/css/bootstrap.css" type="text/css" media="screen">



    <!-- Font Awesome CSS -->

    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">



    <!-- Margo CSS Styles  -->

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">



    <!-- Responsive CSS Styles  -->

    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">



    <!-- Css3 Transitions Styles  -->

    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">




    <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />  





    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->



</head>



<body>



    <!-- Full Body Container -->

    <div id="container">





        <!-- Start Header Section --> 

        <div class="hidden-header"></div>

        <header class="clearfix">



            <!-- Start Top Bar -->

            <div class="top-bar">

                <div class="container">

                    <div class="row">

                        <div class="col-md-7">

                            <!-- Start Contact Info -->

                            <ul class="contact-details">

                                <li><a href="#"><i class="fa fa-map-marker"></i> <?php echo $info->address_ar; ?></a>

                                </li>

                                <li><a href="#"><i class="fa fa-envelope-o"></i> <?php echo $info->email; ?></a>

                                </li>

                                <li><a href="#"><i class="fa fa-phone"></i> <?php echo $info->phone; ?></a>

                                </li>

                            </ul>

                            <!-- End Contact Info -->

                        </div><!-- .col-md-6 -->

                        <div class="col-md-5">

                            <!-- Start Social Links -->

                            <ul class="social-list">

                                <li>

                                    <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" target="_blank" href="<?php echo $info->facebook; ?>"><i class="fa fa-facebook"></i></a>

                                </li>

                                <li>

                                    <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" target="_blank"  href="<?php echo $info->twitter; ?>"><i class="fa fa-twitter"></i></a>

                                </li>

                                <li>

                                    <a class="google itl-tooltip" data-placement="bottom" title="Google Plus"  target="_blank"  href="<?php echo $info->google; ?>"><i class="fa fa-google-plus"></i></a>

                                </li>

                            </ul>

                            <!-- End Social Links -->

                        </div><!-- .col-md-6 -->

                    </div><!-- .row -->

                </div><!-- .container -->

            </div><!-- .top-bar -->

            <!-- End Top Bar -->

            

            

            <!-- Start  Logo & Naviagtion  -->

            <div class="navbar navbar-default navbar-top">

                <div class="container">

                    <div class="navbar-header ">

                        <!-- Stat Toggle Nav Link For Mobiles -->

                        <button type="button" class="navbar-toggle navbar-left" data-toggle="collapse" data-target=".navbar-collapse">

                            <i class="fa fa-bars"></i>

                        </button>

                        <!-- End Toggle Nav Link For Mobiles -->

                        <a class="navbar-brand" href="index.php">

                            <img alt=""  src="images/logo.png" >

                        </a>

                    </div>

                    <div class="navbar-collapse collapse">



                        <!-- Start Navigation List -->

                        <ul class="nav navbar-nav ">

                         <li><a <?php if($active == "index" ) {echo 'class="active"'; } ?> href="index.php">الرئيسية </a>

                         </li>

                         <li><a <?php if($active == "about" ) {echo 'class="active"'; } ?> href="about.php">من نحن </a>

                         </li>

                         <li>



                            <a <?php if($active == "1" ) {echo 'class="active"'; } ?> href="#">الطاقة الشمسية</a>

                            <ul class="dropdown">

                                <?php 

                                while ($page = $page1->fetch(PDO::FETCH_OBJ)) {

                                    echo '<li><a href="page.php?id='.$page->id.'">'.$page->title_ar.'</a>

                                    </li>';

                                }



                                ?>

                                



                            </ul>

                        </li>





                        <li>

                            <a <?php if($active == "2" ) {echo 'class="active"'; } ?> href="#">طاقة الرياح</a>

                            <ul class="dropdown">

                               <?php 

                                while ($page = $page2->fetch(PDO::FETCH_OBJ)) {

                                    echo '<li><a href="page.php?id='.$page->id.'">'.$page->title_ar.'</a>

                                    </li>';

                                }



                                ?>

                           </ul>

                       </li>





                       <li>

                        <a <?php if($active == "3" ) {echo 'class="active"'; } ?> href="#">الطاقة الهجين</a>

                        <ul class="dropdown">

                           <?php 

                                while ($page = $page3->fetch(PDO::FETCH_OBJ)) {

                                    echo '<li><a href="page.php?id='.$page->id.'">'.$page->title_ar.'</a>

                                    </li>';

                                }



                                ?>

                       </ul>

                   </li>





                   <!-- <li><a href="our_customers.php">our customers</a> </li> -->

                   <li><a <?php if($active == "work" ) {echo 'class="active"'; } ?> href="our_works.php">مشاريعنا</a> </li>

                   <li><a <?php if($active == "content" ) {echo 'class="active"'; } ?> href="contact.php">اتصل بنا</a>
                   <li><a  href="en/index.php">English</a>



                   </li>

               </ul>

               <!-- End Navigation List -->

           </div>

       </div>

   </div>

   <!-- End Header Logo & Naviagtion -->



</header> 

<!-- End Header Section -->





