
<?php 

require 'AdminArea/connection.php';
if(!isset($_GET['id']) || empty($_GET['id'])) {
  header("Location: index.php");
  die();
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT );

$topic = $conn->prepare("SELECT * FROM news WHERE id = ?");
$topic->bindValue(1,$id , PDO::PARAM_INT);
$topic->execute();
if(!$topic->rowCount()>0) {
   header("Location: index.php");
  die();
}
$post = $topic->fetch(PDO::FETCH_OBJ);
require 'header.php';

 ?>

<!-- Start Page Banner -->
<div class="page-banner">
 <div class="container">
  <div class="row">
   <div class="col-md-6">
    <h2>الاخبار</h2>
    <p><?php echo $post->title_ar; ?></p>
  </div>
  <div class="col-md-6">
    <ul class="breadcrumbs">
     <li><a href="#">الرئيسية</a></li>
     <li><a href="#">الاخبار</a></li>
   </ul>
 </div>
</div>
</div>
</div>
<!-- End Page Banner -->




<!-- Start Content -->
<div  id="content">
 <div class="container">
  <div class="row blog-post-page">
   <div class="col-md-12 blog-box">
    
    <!-- Start Single Post Area -->
    <div class="blog-post gallery-post">
      
      <!-- Start Single Post (Gallery Slider) -->
      <div class="post-head">
       <div class="touch-slider post-slider">
        <div class="item ">
          <a class="lightbox" title="This is an image title"  href="uploaded/news/<?php echo $post->image; ?>" data-lightbox-gallery="gallery1">
            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
            <img alt="" class="pull-right" src="uploaded/news/<?php echo $post->image; ?>">
          </a>
        </div>
   

      </div>
    </div>
    <!-- End Single Post (Gallery) -->
    
    <!-- Start Single Post Content -->
    <div dir="rtl" class="post-content">
     <div class="post-type"><i class="fa fa-picture-o"></i></div>
     <h2><?php echo $post->title_ar; ?></h2>
     <ul class="post-meta">
       <li>By <a href="#">Admin</a></li>
       <li><?php echo $post->date; ?></li>
       
     </ul>
     <p><?php echo html_entity_decode($post->content_ar); ?></p>
     


 </div>
 <!-- End Single Post Content -->
 
</div>
<!-- End Single Post Area -->


</div>





</div>

</div>
</div>
<!-- End content -->


<?php 

require 'footer.php';
 ?>