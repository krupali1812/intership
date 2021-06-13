<?php

$con=mysqli_connect("localhost","root","","internship");
	
$id=$_GET['deleteid'];

$q=mysqli_query($con,"delete from tbl_student where Student_id ='{$id}'")or die(mysqli_error($con));

if($q){
	echo "<script>alert('record deleted..');window.location='tabledata.php';</script>";
}

?>