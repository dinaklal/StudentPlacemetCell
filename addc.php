
<?php
	$name=$_POST['name'];
	$branch=$_POST['branch'];
    $cnt=$_POST['contact'];
	$email=$_POST['email'];
	$cpi=$_POST['cpi'];
    require_once('db_connect.php');   
    $sql = "INSERT INTO student  (`name`, `branch`, `phone`,`email`, `CPI`) VALUES ('$name','$branch','$cnt','$email',10);";

		    $res=mysqli_query($conn,$sql);
			if($res)
			{
				echo "done";#echo ' <body onLoad="s()">';
            }
            else
            {
                echo $res->connect_error;
            }

		
?>
<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function s() {



	swal({ title:"   IIIT G ",text:"Student Added ", type:"success"},function(){
    window.location.href = 'add_student.php';});
}
</script>