<html>
	<body>
	<!--
	\\method 1(get "method is used to data will be visible in url.)
				(post "method is used to data will be Hidden in url.)
				(action: you can specify name where data will submit)
	-->
<h1>Form Demo</h1>
	<form action="process.php" method="post">
		
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="text1" required//></td>
			</tr>
			
			<tr>
				<td>Age</td>
				<td><input type="number" name="text2" min="1" max="100" required//></td>
			</tr>
		
			<tr>
				<td><input type="Submit" /></td>
				<td><input type="Reset" /></td>
			</tr>
		</table>
		
	</form>
</body>
</html>