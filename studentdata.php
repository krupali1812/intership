<?php
$con=mysqli_connect("localhost","root","","internship");
	if($_POST){
	$Name=$_POST['name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$MobileNO=$_POST['mobno'];
	$address=$_POST['addr'];
	$city=$_POST['city'];
	$bloodgroup=$_POST['bg'];


	$q=mysqli_query($con,"insert into tbl_student1(s_name,s_gender,s_dob,s_email,s_mobno,s_address,s_city,s_bloodgroup ) 
	values('$Name','$gender','$dob','$email','$MobileNO','$address','$city','$bloodgroup')")or die("error".mysqli_error($con));

	if($q)
	{
	echo "<script>alert('record added');</script>";
	}
}
?>
<html>
	<body>
		<form method="post" >
		Name:<input type="text" name="name"/><br/>
		gender:<select name="gender"><br/>
				<option>Male</option>
				<option>feMale</option>
			    </select><br/> 
		DOB:<input type="date" name="dob"/><br/>
		Email:<input type="email" name="email"/><br/>
		Mobile NO:<input type="number" name="mobno"/><br/>
		Address:<input type="text" name="addr"/><br/>
		City:<input type="text" name="city"/><br/>
		Blood Group:<input type="text" name="bg"/><br/>
		
		<input type="submit" value="submit"/><br/>
		
		
		
		</form>
	</body>
</html>