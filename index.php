
<!DOCTYPE html>
<html>

	<head>
		<title>Multilevel Login Form</title>
	</head>
<body>
	<form action="simpan.php"method="POST">
		<table>
			<tr>
			   <td>User Type</td>
			   <td><select name="type">
			       <option value="-1">Select user type</option>
				   <option value="Admin">Admin</option>
				   <option value="User">User</option>
			       </td>
			</tr>
			
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="Username"></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>

