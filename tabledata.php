<?php
$con=mysqli_connect("localhost","root","","internship");
	$q=mysqli_query($con,"select * from tbl_student")or die("error".mysqli_error($con));
	
	
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Id</th>";
	echo "<th>Name</th>";
	echo "<th>Gender</th>";
	echo "<th>Mob_no</th>";
	echo "<th>Action</th>";
	echo "<tr>";
	$i=0;
	while($row=mysqli_fetch_array($q)){
		$i++;
		echo "<tr>";
			
			echo "<td>{$row['Student_id']}</td>";
			echo "<td>{$row['Student_name']}</td>";
			echo "<td>{$row['student_gender']}</td>";
			echo "<td>{$row['student_mobno']}</td>";
			echo "<td><a href='update.php?id={$row['Student_id']}'>update</a></td>";
			echo "<td><a href='delete.php?deleteid={$row['Student_id']}'>Delete</a></td>";
		echo "</tr>";
}
	
	echo "</table>";
	
	echo "<a href='insertdata.php'>Add record</a>";

?>