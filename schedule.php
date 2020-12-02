

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
          <li><a href="index.php">Home</a></li>
             <li><a href="add_student.php">Add Student</a></li>
             <li class="active"><a href="view_students.php">View Students</a></li>
            <li  ><a href="Add_company.php">Add Company </a></li>
            <li  ><a href="view_company.php">View Company</a></li>
            <li ><a href="Add_dates.php">Add Available dates</a></li>
            <li><a href="Add_Interest.php">Add Interests</a></li>
            <li ><a href="View_Interest.php">View Interests</a></li>
            <li ><a href="schedule.php">Make schedule</a></li>
            <li ><a href="Add_Sele.php">Add Selection </a></li>
            <li ><a href="view_Sele.php">View Selected </a></li>



                 </ul>
       
       </div>
    <BR>
        
<?Php

		            require_once('db_connect.php');
          
          $q="delete from Schedule where cid > 0 ;";
          $res=mysqli_query($conn,$q);
					$q="select cid, count(1) as interests from intrested_in_company i 
          group by cid 
          order by count(1) desc ;";
          $res=mysqli_query($conn,$q);
          while($row=mysqli_fetch_array($res))
					{
            $i++;
            $co = $row['cid'];
            $q = "select c_date  from available_dates where cid = 1 order by c_date ;";
            $res1=mysqli_query($conn,$q);
            $flag = 0; 
            while($row1=mysqli_fetch_array($res1))
            {
              $di = $row1['c_date'];
              $q = "select *  from Schedule where date='$di' ;";
              $result = $mysqli->query($q);
              if($result->num_rows == 0) 
              {
  
                $q="insert into Schedule  (`cid`,`date`) values  ( '$co','$di')  ;";
                $res1=mysqli_query($conn,$q);
                $flag = 1; 
                break;
              }          
            }
            if ($flag == 0 )
            {
              $q = "select max(date) as max_date from Schedule ;";
              $res1=mysqli_query($conn,$q);
              $di = $res1['max_date'];
              $q="insert into Schedule  (`cid`,`date`) values  ( '$co','$di')  ;";
              $res1=mysqli_query($conn,$q);
            }
            
          }
				
?>