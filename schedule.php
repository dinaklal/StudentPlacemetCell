

<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function suc() {



	swal({ title:"   IIIT G ",text:"Schedules   Added ", type:"success"},function(){
    window.location.href = 'schedule.php';});
}
function fai() {



swal({ title:"   IIIT G ",text:"Schedules Not Added ", type:"warning"},function(){
window.location.href = 'schedule.php';});
}
</script>
<?php

if (isset($_POST["set"]))
{
    echo "Request Came\n";
      require_once('db_connect.php');
      echo " started"; 
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
        $q = "select c_date  from available_dates where cid = '$co' order by c_date ;";
        $res1=mysqli_query($conn,$q);
        $flag = 0; 
        while($row1=mysqli_fetch_array($res1))
        {
      echo "I got dates\n";
          $di = $row1['c_date'];
          echo $di;
      $q = "select *  from Schedule where date='$di' ;";
          $result = mysqli_query($conn,$q);
          if(! mysqli_num_rows($result))
          {
      echo "imsrt  sttrted ";
            $q="insert into Schedule  (`cid`,`date`) values  ( '$co','$di')  ;";
            $res1=mysqli_query($conn,$q);
            echo "inserted ";
      $flag = 1; 
            break;
          }          
          echo mysqli_error($conn);
        }
        if ($flag == 0 )
        { 
      echo "hei  last if ";
          $q = "select max(date) as max_date from Schedule ;";
          $res1=mysqli_fetch_array(mysqli_query($conn,$q));
          $di = $res1['max_date'];
          $q="insert into Schedule  (`cid`,`date`) values  ( '$co',DATE_ADD('$di',INTERVAL 1 DAY))  ;";
          $res1=mysqli_query($conn,$q);
        }
        
      }


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
             <li><a href="view_students.php">View Students</a></li>
            <li ><a href="Add_company.php">Add Company </a></li>
            <li><a href="view_company.php">View Company</a></li>
            <li ><a href="Add_dates.php">Add Available dates</a></li>
            <li  ><a href="Add_Interest.php">Add Interests</a></li>
            <li ><a href="View_Interest.php">View Interests</a></li>
            <li ><a href="schedule.php">Make schedule</a></li>
            <li ><a href="Add_Sele.php">Add Selection </a></li>
            <li class="active" ><a href="view_Sele.php">View Selected </a></li>




                 </ul>
       
       </div>
    <BR>
        
    <form class="form-signin" role="form" action="schedule.php" method="post">
   			
         <div class="form-group">
  <input type="hidden" name="set">
          <button class="btn btn-lg btn-warning btn-block" type="submit">Update Schedule</button>
      </form>
        <hr> 





             
<?Php

        require_once('db_connect.php');
                
        $q=" select s.cid,c.co_name, s.date  from Schedule s join company c on
        c.cid = s.cid ; ;";
        $res=mysqli_query($conn,$q);
        $i=0;
                  echo "<br>
            
        <div class='col-sm-offset-2  table-responsive'>
          <table class='table table-responsive' style='background-color:white;'>
            <thead>
              <tr>

              <th >CID</th>
                <th >Company Name</th>
                <th>Scheduled Date</th>
                </tr>
            </thead>
            <tbody>";
        while($row=mysqli_fetch_array($res))
        {
          $i++;
                      $id=$row['cid'];
                      $c_name=$row['co_name'];
                      $date =$row['date'];

          
          echo "<tr  class='clickable-row' >
                  
              <td>S$id</td>
              <td> $c_name</td>
                <td>$date</td>
              

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

    <?php

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
             <li><a href="view_students.php">View Students</a></li>
            <li ><a href="Add_company.php">Add Company </a></li>
            <li><a href="view_company.php">View Company</a></li>
            <li ><a href="Add_dates.php">Add Available dates</a></li>
            <li  ><a href="Add_Interest.php">Add Interests</a></li>
            <li ><a href="View_Interest.php">View Interests</a></li>
            <li ><a href="schedule.php">Make schedule</a></li>
            <li ><a href="Add_Sele.php">Add Selection </a></li>
            <li class="active" ><a href="view_Sele.php">View Selected </a></li>




                 </ul>
       
       </div>
    <BR>
        
    <form class="form-signin" role="form" action="schedule.php" method="post">
   			
         <div class="form-group">
  <input type="hidden" name="set">
          <button class="btn btn-lg btn-warning btn-block" type="submit">Update Schedule</button>
      </form>
        <hr> 




             
<?Php

		            require_once('db_connect.php');
        
					$q=" select s.cid,c.co_name, s.date  from Schedule s join company c on
          c.cid = s.cid ; ;";
					$res=mysqli_query($conn,$q);
					$i=0;
                    echo "<br>
              
          <div class='col-sm-offset-2  table-responsive'>
            <table class='table table-responsive' style='background-color:white;'>
              <thead>
                <tr>

                <th >CID</th>
                  <th >Company Name</th>
                  <th>Scheduled Date</th>
                  </tr>
              </thead>
              <tbody>";
					while($row=mysqli_fetch_array($res))
					{
						$i++;
                        $id=$row['cid'];
                        $c_name=$row['co_name'];
			            			$date =$row['date'];
			
            
						echo "<tr  class='clickable-row' >
                     
                 <td>S$id</td>
                <td> $c_name</td>
                  <td>$date</td>
                
      
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

<?php
}
?>