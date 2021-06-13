<?php
	$con=mysqli_connect("localhost","root","","internship");
	$q=mysqli_query($con,"select * from tbl_student1")or die("error".mysqli_error($con));
	
		$row=mysqli_fetch_row($q);
		
		print_r($row);
		
		//debug
		echo "</br>".$row[0],$row[2],$row[3],$row[4],$row[5],$row[6];
		
		//numerical associative array format
		$row=mysqli_fetch_array($q);
		echo "<pre>";
		print_r($row);
		echo "</br>".$row[0],$row[2],$row[3],$row[4],$row[5],$row[6];
?>