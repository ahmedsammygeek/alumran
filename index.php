

<?php
$active = "index";
require 'header.php'; 


$slides = $conn->prepare("SELECT * FROM slider");
$slides->execute();
$news =  $conn->prepare("SELECT * FROM news");
$news->execute();
$services =  $conn->prepare("SELECT * FROM services");
$services->execute();
$clients =  $conn->prepare("SELECT * FROM clients");
$clients->execute();

?>
<!-- Start Home Page Slider -->
<section id="home">
    <!-- Carousel -->
    <div id="main-slide" style="width:83%; margin-left:auto; margin-right:auto;" class="carousel slide" data-ride="carousel">



        <!-- Carousel inner -->
        <div class="carousel-inner">

         <?php 
         $i = 0;

         while ($slide = $slides->fetch(PDO::FETCH_OBJ)) {
            if ($i == 0) {
              echo '<div class="item active">
              <img class="img-responsive" src="uploaded/slider/'.$slide->image.'" alt="slider">
              <div class="slider-content">
              <div class="col-md-12 text-center">
              <h3 class="animated5">
            
              </h3>  

              </div>
              </div>
              </div>';

          } else {
            echo '<div class="item">
            <img class="img-responsive" src="uploaded/slider/'.$slide->image.'" alt="slider">
            <div class="slider-content">
            <div class="col-md-12 text-center">

            <h3 class="animated5">
           
            </h3>  

            </div>
            </div>
            </div>';
        }
        $i++;
    }
    ?>

</div>
<!-- Carousel inner end-->

<!-- Controls -->
<a class="left carousel-control" href="#main-slide" data-slide="prev">
    <span><i class="fa fa-angle-left"></i></span>
</a>
<a class="right carousel-control" href="#main-slide" data-slide="next">
    <span><i class="fa fa-angle-right"></i></span>
</a>
</div>
<!-- /carousel -->
</section>
<!-- End Home Page Slider -->

<div class="section service" >
    <div class="container">
        <div class="row">
          <!-- Start Recent Posts Carousel -->
          <div class="latest-posts">
            <h4 class="classic-title text-right"><span>اخر الاخبار</span></h4>
            <div  class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="3">

                <?php 
                while ($topic = $news->fetch(PDO::FETCH_OBJ)) {
                    $date = explode(" ", $topic->date);
                    $content = $topic->content_ar;
                    $content = strip_tags($content);
                    // $content = html_entity_decode($content);
                    echo '<div class="post-row item" >
                    <div class="left-meta-post">
                    <div class="post-date"><span class="day">'.$date[1].'</span><span class="month">'.$date[0].'</span></div>
                    <div class="post-type"><i class="fa fa-picture-o"></i></div>
                    </div>
                    <h3 class="post-title"><a href="topic.php?id='.$topic->id.'">'.$topic->title_ar.'</a></h3>
                    <div class="post-content"> <p>
                    '.mb_substr(strip_tags(htmlspecialchars_decode($content)), 0 ,168 , 'utf-8').'<a class="read-more" href="topic.php?id='.$topic->id.'">المزيد</a>
                    </p>
                    </div>
                    </div>';

                }
                ?>


            </div>
        </div>
        <!-- End Recent Posts Carousel -->
    </div>
</div>

</div>

<!-- Start Services Section -->
<div class="section service">
    <div class="container">
        <div class="row">

            <!-- Start Service Icon 1 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                <div class="service-icon">
                    <i class="fa fa-leaf icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>High Quality Theme</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>

                </div>
            </div>
            <!-- End Service Icon 1 -->

            <!-- Start Service Icon 2 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
                <div class="service-icon">
                    <i class="fa fa-desktop icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Full Responsive</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                </div>
            </div>
            <!-- End Service Icon 2 -->

            <!-- Start Service Icon 3 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
                <div class="service-icon">
                    <i class="fa fa-eye icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Retina Display Ready</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                </div>
            </div>
            <!-- End Service Icon 3 -->

            <!-- Start Service Icon 4 -->
            <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
                <div class="service-icon">
                    <i class="fa fa-code icon-large"></i>
                </div>
                <div class="service-content">
                    <h4>Clean Modern Code</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                </div>
            </div>
            <!-- End Service Icon 4 -->

           

        </div><!-- .row -->
    </div><!-- .container -->
</div>
<!-- End Services Section -->








<div class="container">

    <!-- Classic Heading -->
    <h4 class="classic-title text-right"><span>خدماتنا</span></h4>
    <div class="row">
      <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="3">

        <?php 
        while ($service = $services->fetch(PDO::FETCH_OBJ)) {
          echo ' <div class=" col-lg-12 col-md-12  col-sm-12  col-xs-12  image-service-box">
            <img class="img-thumbnail" src="uploaded/services/'.$service->image.'" alt="">
            <h4>'.$service->title_ar.'</h4>
            <p>'.$service->content_ar.'</p>
        </div>';
        }

         ?>
      

    </div>
    </div>
</div>






<!-- Start Client/Partner Section -->
<div class="partner">
    <div class="container">
        <div class="row">

            <!-- Start Big Heading -->
            <div class="big-title text-center">
             <h1>Our Happy <strong>Clients</strong></h1>
             <p class="title-desc">Partners We Work With</p>
         </div>
         <!-- End Big Heading -->

         <!--Start Clients Carousel-->
         <div class="our-clients">
             <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">
          <?php 
          while ($client = $clients->fetch(PDO::FETCH_OBJ)) {
           echo  '<div class="client-item item">
                   <a href="'.$client->link.'"><img src="uploaded/clients/'.$client->image.'" alt="" /></a>
               </div>';
          }
           ?>
                <!-- Client 1 -->
                

           </div>
       </div>
       <!-- End Clients Carousel -->
   </div><!-- .row -->
</div><!-- .container -->
</div>
<!-- End Client/Partner Section -->


<?php
require 'footer.php'; 
?>
