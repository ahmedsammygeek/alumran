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
        <form role="form" action="insert_hotel.php" method="post" enctype="multipart/form-data" >
          <div class="box-body">
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
           ?>
           <div class="form-group">
            <label for="exampleInputEmail1">title(en)</label>
            <input type="text" name="title"  class="form-control" id="exampleInputEmail1" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">content(en)</label>

            <textarea class="textarea" name="content"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

          </div> 
          <div class="form-group">
            <label for="exampleInputEmail1">title(ar)</label>
            <input type="text" name="title_ar"  class="form-control" id="exampleInputEmail1" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">content(ar)</label>
            <textarea class="textarea" name="content_ar"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

          </div> 
          <legend>  
            other data 
          </legend>
          <div class="form-group">
            <label for="exampleInputEmail1">image</label>
            <input type="file" name="file" class="form-control" id="exampleInputEmail1" >
          </div>

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
                  <input type="checkbox" name="BED"/>
                  KING SIZE BED
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="POOL"/>
                  SWIMMING POOL
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="SAFE"/>
                  SAFE
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="GAMES"/>
                  MEDIA & GAMES
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="TRANSPORT"/>
                  AIRPORT TRANSPORT
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="CONDITION"/>
                  AIR CONDITION
                </label> &nbsp;&nbsp;&nbsp;
              </div>
              <div class="col-md-12">

                <label>
                  <input type="checkbox" name="BATHTUB"/>
                  BATHTUB
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="CHAMPAIGNE"/>
                  CHAMPAIGNE
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="DINNER"/>
                  DINNER
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="ROOM_SERVICE"/>
                  24H ROOM SERVICE
                </label> &nbsp;&nbsp;&nbsp;
                <label>
                  <input type="checkbox" name="PET_FRIENDLY"/>
                  PET FRIENDLY
                </label> &nbsp;&nbsp;&nbsp;



              </div>

            </div>
          </div>




        </div><!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" name="submit" class="btn btn-primary">update</button>
        </div>
      </form>
    </div><!-- /.box -->


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
              });
</script>
