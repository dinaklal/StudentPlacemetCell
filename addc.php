
<?php
	$name=$_POST['name'];
	$branch=$_POST['branch'];
    $cnt=$_POST['contact'];
	$email=$_POST['email'];
	$cpi=$_POST['cpi'];
    require_once('db_connect.php');   
    $sql = "INSERT INTO student  (`name`, `branch`, `phone`,`email`, `CPI`) VALUES ('$name','$branch','$cnt','$email','$cpi');";

		    $res=mysqli_query($conn,$sql);
			if($res)
			{
				echo ' <body onLoad="s()">';
            }
            else
            {
                 echo ' <body onLoad="w()">';
            }

		
?>
<html>
<script src="m/dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="m/dist/sweetalert.css">
<script>
function s() {



	swal({ title:"   IIIT G ",text:"Student Added ", type:"success"},function(){
    window.location.href = 'add_student.php';});
}
function w() {



swal({ title:"   IIIT G ",text:"Student Not Added ", type:"warning"},function(){
window.location.href = 'add_student.php';});
}
</script>