
<?php
	$name=$_POST['name'];
	$place=$_POST['place'];
    $cnt=$_POST['phone'];
	$email=$_POST['email'];
    require_once('db_connect.php');   
    $sql = "INSERT INTO company  (`co_name`, `place`, `phone`,`email`) VALUES ('$name','$place','$cnt','$email');";

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



	swal({ title:"   IIIT G ",text:"Company Added ", type:"success"},function(){
    window.location.href = 'Add_company.php';});
}
function w() {



swal({ title:"   IIIT G ",text:"Company Not Added ", type:"warning"},function(){
window.location.href = 'Add_company.php';});
}
</script>