

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
        
					$q="SELECT * FROM `student` ;";
					$res=mysqli_query($conn,$q);
					$i=0;
					echo "<br>
          <div class='table-responsive'>
            <table class='table table-responsive' style='background-color:white;'>
              <thead>
                <tr>
                <th class='col-md-2'>SINO</th>
                  <th >Student ID</th>
                  <th >Name</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Branch</th>
                  <th>CPI  </th>
				
                </tr>
              </thead>
              <tbody>";
					while($row=mysqli_fetch_array($res))
					{
						$i++;
                        $id=$row['sid'];
						$name=$row['name'];
						$branch=$row['branch'];
						$cpi =$row['CPI'];
						
						$email =$row['email'];
						$phone =$row['phone'];
            
						echo "<tr  class='clickable-row' data-href='mem_home.php?id=$id'>
                        <td>S$i++</td>
                 <td>S$id</td>
                <td> $name</td>
                  <td>$phone</td>
                  <td>$email</td>        
                  <td>$branch</td>
                  <td>$cpi</td>
                </tr>";
					}
                                      
                                 

?>

               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
