<?php



$con=mysqli_connect("localhost","root","","internship");
	if($_POST){
	$id=$_POST['id'];
	$Name=$_POST['name'];
	$gender=$_POST['gender'];
	$MobileNO=$_POST['mobno'];


	$q=mysqli_query($con,"insert into tbl_student(Student_id,Student_name,student_gender,student_mobno) 
	values('$id','$Name','$gender','$MobileNO')")or die("error".mysqli_error($con));

	if($q)
	{
	echo "<script>alert('record added');</script>";
	}
}
?>
<html>
	<body>
		<form method="post">
		Id:<input type="number" name="id"/></br>
		Name:<input type="text" name="name"/></br>
		gender:<select name="gender">
				<option>Male</option>
				<option>feMale</option>
			    </select></br>
		
		Mobile NO:<input type="number" name="mobno"/></br>
		<input type="submit" value="submit"/></br>
		</form>
	</body>
</html>

		<a href="tabledata.php">display record</a>
