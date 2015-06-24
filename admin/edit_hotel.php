<?php 
require 'sidebar.php';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    add new hotels

  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">enter data of hotel</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <?php
        if (isset($_GET['msg'])) {
         switch ($_GET['msg']) {
           case 'empty_data':
           echo '<div class="alert alert-danger alert-dismissable">
           <i class="fa fa-ban"></i>
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <b>Alert!</b>   you leave input empty please complete inputs and try again.
           </div>';
           break;
           case 'err_vali':
           echo '<div class="alert alert-danger alert-dismissable">
           <i class="fa fa-ban"></i>
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <b>Alert!</b> enter image (jpg , png , jpeg) .
           </div>';
           break;
           case 'not_exist':
           echo '<div class="alert alert-danger alert-dismissable">
           <i class="fa fa-ban"></i>
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <b>Alert!</b>this image not exist .
           </div>';
           break;
           case 'error':
           echo '<div class="alert alert-danger alert-dismissable">
           <i class="fa fa-ban"></i>
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <b>Alert!</b> an error in your update please try again.
           </div>';
           break;

           default:

           break;
         }
       } 
       if (!isset($_GET['id'])) {
         header("location: hotels.php");die();
       }
       $hotel_id = htmlspecialchars_decode($_GET['id']);
       /*connection db and select old data*/
       require '../connection/connection.php';
       $hotels = $conn->prepare("SELECT * FROM hotels WHERE id=?");
       $hotels->bindValue(1,$hotel_id,PDO::PARAM_INT);
       $hotels->execute();
       $hotel = $hotels->fetch(PDO::FETCH_OBJ);
       ?>
       <form role="form" method="post" action="update_hotel.php<?php echo "?id=$hotel_id"; ?>"  name="add_hotel" enctype="multipart/form-data" data-forma-number="0">
        <div class="box-body" data-forma-number="0">
          <h2 class="text-center">new hotel Data</h2>

          <div class="form-group">
            <label for="exampleInputEmail1">title(en)</label>
            <input type="text" name="title" value="<?php echo "$hotel->title"; ?>"  class="form-control" id="exampleInputEmail1" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">content(en)</label>

            <textarea class="textarea" name="content"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo "$hotel->desc"; ?></textarea>

          </div> 
          <div class="form-group">
            <label for="exampleInputEmail1">title(ar)</label>
            <input type="text" name="title_ar" value="<?php echo "$hotel->title_ar"; ?>" class="form-control" id="exampleInputEmail1" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">content(ar)</label>
            <textarea class="textarea" name="content_ar"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo "$hotel->desc_ar"; ?></textarea>

          </div> 
          <legend>  
            other data 
          </legend>
          <div class="form-group"> 
            <label for="">choose if this offer or normal hotel</label>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="yes" checked>
                hotel
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="no">
                offer
              </label>
            </div>

          </div>
          <label for=""> the hotel features </label>
          <div class="form-group"> 
            <div class="checkbox">
              <div class="col-md-12">
                <label>
                  <input type="checkbox" name="BED" value="1" />
                  KING SIZE BED
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="POOL" value="1"/>
                  SWIMMING POOL
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="SAFE" value="1"/>
                  SAFE
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="GAMES" value="1"/>
                  MEDIA & GAMES
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="TRANSPORT" value="1"/>
                  AIRPORT TRANSPORT
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="CONDITION" value="1"/>
                  AIR CONDITION
                </label> &nbsp;&nbsp;&nbsp;
              </div>
              <div class="col-md-12">

                <label>
                  <input type="checkbox" name="BATHTUB" value="1"/>
                  BATHTUB
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="CHAMPAIGNE" value="1"/>
                  CHAMPAIGNE
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="DINNER" value="1"/>
                  DINNER
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="ROOM_SERVICE" value="1"/>
                  24H ROOM SERVICE
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="PET_FRIENDLY" value="1"/>
                  PET FRIENDLY
                </label> &nbsp;&nbsp;&nbsp;
              </div>
            </div>
          </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" name="submit" id="add_all" class="btn btn-primary">update</button>
        </div>
      </form>
    </div><!-- /.box -->
    <table class="table table-bordered table-striped">

      <tbody><tr>
        <th>ID</th>
        <th>image</th>
        <th>delete</th>


      </tr>
      <?php 
      $images = $conn->prepare("SELECT * FROM hotel_images WHERE hotel_id=?");
      $images->bindValue(1,$hotel_id,PDO::PARAM_INT);
      $images->execute();
      $i = 1;
      while ($image = $images->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>
        <td>$i</td>
        <td><img src='../uploaded/hotels_images/".$image->pic."' width='50' height='50' alt='' ></td>
        <td><a href='delete_image_hotel.php?image_id=".$image->id."&hotel_id=".$hotel_id."'  class='btn btn-danger btn-sm'>DELETE</td>
        </tr>";
      } ?>
      <br>

    </tbody></table>
    <form action="add_image_hotel.php<?php echo "?id=$hotel_id"; ?>" method="post" enctype="multipart/form-data">
      <input type="file" name="file"><br>
      <button type="submit" name="submit" id="add_all" class="btn btn-primary">add</button>

    </form>



  </div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->



<?php 
require 'footer.php';
?>


<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script type="text/javascript">

$(function() {
  //bootstrap WYSIHTML5 - text editor
  $(".textarea").wysihtml5();
  // ad more file to upload it
  $(document).on('click'  , 'a.add_more_files' , function(event) {
    event.preventDefault();
    $(this).parent().append('<input type="file" class="lecture_files" name="files[]">');
  });
});
</script>
