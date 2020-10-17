

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/download.ico">
  <script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
</script>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: grey;
  color: white;
  text-align: center;
}
</style>
   <title>Placement Cell- IIIT G</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    </head>

<body style="background: url('images/bg.jpg')">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: darkblue">
   <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
         <a class="navbar-brand" href="#" style="color: white;">IIIT G</a>
     </div>
     <div class="navbar-collapse collapse">
       <ul class="nav navbar-nav navbar-right">
         <li><a  href="index.php" style="color:white;">Dashboard</a></li>
  
         
        
       </ul>
       
     </div>
   </div>
 </div>


 
 <div class="container-fluid">
      <div class="row">
        <div  class="col-sm-3 col-md-2 sidebar" >
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Home</a></li>
             <li><a href="add_student.php">Add Student</a></li>
             <li><a href="add_customer.php">Student Login</a></li>
            <li ><a href="shops.php">Companies</a></li>
                 <li ><a href="week_register.php">View Interests</a></li>



                 </ul>
       
       </div>



          <div class="row placeholders">
<?php

require_once('db_connect.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  
  
  $sql = "SELECT name FROM Student";
  $result = $conn->query($sql);

  
?>
</div>

<div class="footer">
            <h5 class="page-header">Powered By : DINAK LAL V </h5>
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>