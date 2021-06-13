<?php
	$con=mysqli_connect("localhost","root","","internship");
		if(!isset($_GET['id'])|| empty($_GET['id'])){
			header("location:tabledata.php");
		}
	$editid=$_GET['id'];
	
	//select the data
	$editq=mysqli_query($con,"select * from tbl_student where Student_id='{$editid}'") or die(mysqli_error($con));
	$editdata=mysqli_fetch_array($editq);
	
	if($_POST){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$mobno=$_POST['mobno'];
	
	$uq=mysqli_query($con,"update tbl_student set Student_id='{$id}',Student_name='{$name}',student_gender='{$gender}',student_mobno='{$mobno}' where Student_id='{$editid}'")or die(mysqli_error($con));
		if($uq){
			echo "<script>alert('record updated'); window.location='tabledata.php';</script>";
			
		}
	}
		
	
	//print_r($editdata);
?>

<html>
	<body>
		<form method="post">
			Id:<input type="number" name="id" value="<?php echo $editdata['Student_id'];?>"/></br>
			Name:<input type="text" name="name" value="<?php echo $editdata['Student_name'];?>"/></br>
			gender:Male<input type="radio" name="gender"  value="male" <?php if($editdata['student_gender']=="male"){echo "checked";}?>/>
				Female:<input type="radio" name="gender"  value="female" <?php if($editdata['student_gender']=="female"){echo "checked";}?>/></br>
		
			Mobile NO:<input type="number" name="mobno" value="<?php echo $editdata['student_mobno'];?>"/></br>
		<input type="submit" value="submit"/></br>
		</form>
	</body>

</html>