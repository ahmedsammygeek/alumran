 <form  role="form" method="post" action="insert_hotel.php" name="add_hotel" data-forma-number="<?php echo $_POST['id']; ?>"  enctype="multipart/form-data">
   <div class="box-body" >

     <div class="form-group">
      <label for="exampleInputEmail1">title(en)</label>
      <input type="text" name="title[]r"  class="form-control" id="exampleInputEmail1" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">content(en)</label>

      <textarea class="textarea" name="content[]"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

    </div> 
    <div class="form-group">
      <label for="exampleInputEmail1">title(ar)</label>
      <input type="text" name="title_ar[]"  class="form-control" id="exampleInputEmail1" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">content(ar)</label>
      <textarea class="textarea" name="content_ar[]"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

    </div> 
    <legend>  
      other data 
    </legend>

    <div class="form-group files">
      <label>Lecture' files </label>
      <input type="file"  name="files[]">
      <a class="btn btn-primary pull-right add_more_files" href="">add more files</a>
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

</form>