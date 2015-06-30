<?php 

require 'header.php';

?>







<!-- Start Page Banner -->

<div class="page-banner">

 <div class="container">

    <div class="row">

       <div class="col-md-6">

          <h2>Portfolio</h2>

          <p>Portfolio Subtitle</p>

      </div>

      <div class="col-md-6">

          <ul class="breadcrumbs">

             <li><a href="index.php">Home</a></li>

             <li>Portfolio</li>

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

                        <img src="../uploaded/works/'.$work->image.'" alt="" />

                        <div class="portfolio-item-content">

                            <span class="header">'.$work->title.'</span>

                            <p class="body">'.$work->content.'</p>

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