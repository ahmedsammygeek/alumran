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
       ?>
       <form role="form" method="post" action="insert_hotel.php"  name="add_hotel" enctype="multipart/form-data" data-forma-number="0">
        <div class="box-body" data-forma-number="0">
          <h2 class="text-center">new hotel Data</h2>

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

          <div class="form-group files">
            <label>Lecture' files </label>
            <input type="file"  name="files[]">
            <a class="btn btn-warning pull-right add_more_files" href="">add more files</a>
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
        <button type="submit" name="submit" id="add_all" class="btn btn-primary">add</button>
        <a class="btn btn-success pull-right add_another_form" >add more hotel</a>
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
  // ad more file to upload it
  $(document).on('click'  , 'a.add_more_files' , function(event) {
    event.preventDefault();
    $(this).parent().append('<input type="file" class="lecture_files" name="files[]">');
  });

//   i = 0;
//   $('a.add_another_form').on('click', function(event) {
//     event.preventDefault();
//     i++;
//     $.ajax({
//       type    : 'POST', // define the type of HTTP verb we want to use (POST for our form)
//       url     : 'hotel_more_form.php' , 
//       data : {id:i} // the url where we want to POST
//     }).done(function(data){
//       $('form[name="add_hotel"]').last().append(data);
//       $('form[data-forma-number="'+ i+'"]').find('.textarea').wysihtml5();
//       $("input[type='checkbox'], input[type='radio']").iCheck({
//         checkboxClass: 'icheckbox_minimal',
//         radioClass: 'iradio_minimal'
//       });
//     })
//   });

//   $('button[id=add_all]').on('click' , function(event) {
//    event.preventDefault();
   

//    forms = $(document).find('form[data-forma-number]'); 
//    for (var i = 0; i < forms.length; i++) {
//   // $.post('insert_hotel.php', forms[i].serialize());
//   data = new FormData($('form[data-forma-number]')[i]);
//   console.log(data);
//   $.ajax({
//       type    : 'POST', // define the type of HTTP verb we want to use (POST for our form)
//       url     : 'insert_hotel.php' , 
//       data  : data,
//       processData: false,
//       contentType: false,
//        // the url where we want to POST
//      });
// };
// });

});
</script>
