<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function suc() {



	swal({ title:"   IIIT G ",text:"Available Dates   Added ", type:"success"},function(){
    window.location.href = 'Add_dates.php';});
}
function fai() {



swal({ title:"   IIIT G ",text:"Available Dates Not Added ", type:"warning"},function(){
window.location.href = 'Add_dates.php';});
}
</script>
<?php

if (isset($_POST["company"]))
{
    echo "Request Came\n";
    $intrests = array_unique( array( $_POST["c1"],$_POST["c2"],$_POST["c3"],$_POST["c4"])) ;
    $s = $_POST["student"];
    foreach($intrests as $c) {
        echo $c,$s, '<br>';
      
    /*  require_once('db_connect.php');
      
        $q="insert  into intrested_in_company (`cid`,`sid`) values ( '$c','$s')  ;";
        $res=mysqli_query($conn,$q);   
        if($res)
        {
            echo ' <body onLoad="suc()">';
        }
        else 
		{
			echo ' <body onLoad="fai()">';
        }*/
    }

}

else
{
    ?>
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
function w()
{
  swal({   title: "INFINITY ",   text: "Tell my Name to prove you are A worker",   type: "input",   showCancelButton: false,  
   closeOnConfirm: false,   animation: "slide-from-top",   inputPlaceholder: "Write my name!" },
   function(inputValue){   if (inputValue === false) return false;      if ((inputValue !="unni" ) && (inputValue !="UNNI" )) {  
          swal.showInputError("You need to Remember my name to continue!");     return false   }   
             swal("Nice!", "Do Your Works Buddie! ", "success"); });
};
</script>
   <title>IIT G</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a class="navbar-brand" href="#" style="color:white;">IIIT G</a>
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
          <li><a href="index.php">Home</a></li>
             <li><a href="add_student.php">Add Student</a></li>
             <li><a href="view_students.php">View Students</a></li>
            <li  ><a href="Add_company.php">Add Company </a></li>
            <li><a href="view_company.php">View Company</a></li><li ><a href="Add_dates.php">Add Available dates</a></li>
            <li class="active"><a href="Add_dates.php">Add Available dates</a></li>
            <li ><a href="Add_Interest.php">Add Interests</a></li>
            <li ><a href="View_Interest.php">View Interests</a></li>
            <li ><a href="schedule.php">Make schedule</a></li>
            <li ><a href="Add_Sele.php">Add Selection </a></li>
            <li ><a href="view_Sele.php">View Selected </a></li>





                 </ul>
       
       </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="background-image:url('images/1.jpg') ;background-repeat: no-repeat; background-position: center;background-size: cover;">
            <center>  <b> <h1  style="color:green;font-weight: 10000; text-shadow: 2px 2px green;">Add Available Dates</h1></b></center>
          
          
          <form class="form-signin" role="form" action="Add_dates.php" method="post">
   			
          <div class="form-group">
            <span class="label label-primary">Company</span>
        <select class="form-control" class="form-control" name="company" required >
             
                          <?php


require_once('db_connect.php');

$q="SELECT * FROM `company` ;";
$res=mysqli_query($conn,$q);
$i=0;

while($row=mysqli_fetch_array($res))
					{
                        $i++;
                        $id=$row['cid'];
						$name=$row['co_name'];
                        echo "<option value='$id' >$name
                          </option >";
                     }
                     
                     
                     
                     ?>
                           
          </select></div>

          <div class="form-group">
            <span class="label label-primary">Date 1 </span>
            <input class="form-control" type="date" value="2020-08-19" name ="c1">
        </div>


            <div class="form-group">
            <span class="label label-primary">Date 2 </span>
            <input class="form-control" type="date" value="2020-08-19" name ="c2">
        </div>

        
        <div class="form-group">
            <span class="label label-primary">Date 3 </span>
            <input class="form-control" type="date" value="2020-08-19" name ="c3">
        </div>

        <div class="form-group">
            <span class="label label-primary">Date 4 </span>
            <input class="form-control" type="date" value="2020-08-19" name ="c3">
        </div> 
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Record Available Dates</button>
      </form>
        



          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
<?php 
}
?>