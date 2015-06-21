<?php 
// include 'header.php';
require 'sidebar.php';

?>
<section class="content">  
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">admins</h3>

        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <?php
          if (isset($_GET['msg'])) {
           switch ($_GET['msg']) {
             case 'data_inserted':
                     //case data about new admin insert successuful
             echo '<div class="alert alert-success alert-dismissable">
             <i class="fa fa-check"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b> successful in your inserted.
             </div>' ;
             break;
             case 'deleted':
                     //case successful delete old admin 
             echo '<div class="alert alert-success alert-dismissable">
             <i class="fa fa-check"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b> successful in your delete.
             </div>' ;
             break;
             case 'error_delete':
                     //an error in sql request 
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b>an error in your data delete please try again or sent message to us .
             </div>' ;
             break;

             default:
  # code...
             break;
           }
         } 
         ?>
         <table id="example1" class="table table-hover">

          <thead>
           <tr>
            <th>ID</th>
            <th>name</th>
            <th>password</th>
            <th>OPTIONS</th>
          </tr>
        </thead>
        <tbody>
         
          <?php
          include 'connection.php';
                //connection with database (met)
          $sql="SELECT * FROM admin ";
          $query=$conn->query($sql);
                //prepare sql request
                $i=1; // this variable is the number of every row in gellery (admins)
                while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
                  //put the result from sql request in array 
                 extract($result);
                   //put data in variables
                 echo " <tr>
                 <td>$i</td>
                 <td>$user_name</td>
                 <td>*********</td>
                 <td><a href='deleteadmin.php?msg=$id' class='btn btn-danger btn-sm'>DELETE</a></td>

                 </tr>";
                 $i++;

               } 



               ?>


             </tbody></table>
           </div><!-- /.box-body -->
         </div><!-- /.box -->
         <a href="admin.php"><button class="btn btn-success btn-lg">add new admin</button></a>
       </div>
     </div>
   </section><!-- /.content -->                
   <?php 
   require 'footer.php';

   ?>