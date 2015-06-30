<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-black">

    <div class="form-box" id="login-box">
         <?php 

        if (isset($_GET['msg'])) {

         switch ($_GET['msg']) {
             case 'data_empty':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b> please enter userid and password
             </div>';
             break;
             case 'data_error':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b> enter userid and password right and try again 
             </div>';


             break;

             default:
                           # code...
             break;
         }
     }   


     ?>
        <div class="header">MET Academy</div>

     <form action="check.php" method="post">
        <div class="body bg-gray">
            <div class="form-group">
                <label for="">username</label>
                <input type="text" name="userid" class="form-control" id='inputError' placeholder="User ID">
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>          

        </div>
        <div class="footer">                                                               
            <input type="submit" name="submit" class="btn bg-olive btn-block" value="Sign me in">  

        </div>
    </form>
</div>


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../js/bootstrap.min.js" type="text/javascript"></script>        


<meta style="visibility: hidden !important; display: block !important; width: 0px !important; height: 0px !important; border-style: none !important;"></meta></body>





</html>