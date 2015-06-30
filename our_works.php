<?php 
$active = "work";
require 'header.php';

?>







<!-- Start Page Banner -->

<div class="page-banner">

 <div class="container">

  <div class="row">

   <div class="col-md-6">

    <h2>معرض المشاريع</h2>

    <p>المشاريع</p>

  </div>

  <div class="col-md-6">

    <ul class="breadcrumbs">

     <li><a href="#">الرئيسية</a></li>

     <li>المشاريع</li>

   </ul>

 </div>

</div>

</div>

</div>

<!-- End Page Banner -->









<!-- Start Content -->

<div id="content">

 <div class="container">

  <div class=" portfolio-page portfolio-3column">



   <ul id="portfolio-list" >

    <?php 



    $works =  $conn->prepare("SELECT * FROM works");

    $works->execute();

    while ($work = $works->fetch(PDO::FETCH_OBJ)) {

      echo '<li>

      <img src="uploaded/works/'.$work->image.'" alt="" />

      <div class="portfolio-item-content">

      <span class="header">'.$work->title_ar.'</span>

      <p class="body">'.$work->content_ar.'</p>

      </div>                    

      </li>';

    }

    ?>





  </ul>

  <!-- End Portfolio Items -->



</div>

</div>

</div>

<!-- End Content -->

<?php 



require 'footer.php';

?>