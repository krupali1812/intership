<html>
	<body>
	<!--
	\\method 1(get "method is used to data will be visible in url.)
				(post "method is used to data will be Hidden in url.)
				(action: you can specify name where data will submit)
	-->
<h1>Registration Page</h1>
	<form action="process.php" method="post">
		
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" required//></td>
			</tr>
			
			<tr>
				<td>Age</td>
				<td><input type="number" name="age" min="1" max="100" required//></td>
			</tr>
			
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" required//></td>
			</tr>
			
			<tr>
				<td>Phone No</td>
				<td><input type="number" name="phoneno"  required//></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				<td><input type="radio" name="gender" value="male">Male</td>
				<td><input type="radio" name="gender"value="female">Female</td>
			</tr>
		
			<tr>
				<td><input type="Submit" /></td>
				<td><input type="Reset" /></td>
			</tr>
		</table>
		
	</form>
</body>
</html>