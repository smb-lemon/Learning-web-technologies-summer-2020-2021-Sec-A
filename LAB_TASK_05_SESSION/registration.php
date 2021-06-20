<!DOCTYPE html>
<html>
<head>
	<title>PUBLIC HOME</title>
</head>
<body>
	<form method="post" action="regiCheck.php">
	
	<table border="1" width="50%">
		<tr>
			<td width="50%">
				Company
			</td>
			<td align="right"><a href="">Home</a>|<a href="">Login</a>|<a href="">Registration</a></td>
		</tr>
		<tr>
		<td colspan="2">
		<fieldset>
			<legend>REGISTRATION</legend>
		<table width="100%">
			<tr>
				<td>Name</td>
				<td>:<input type="text" name="name"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:<input type="email" name="email"></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td>:<input type="text" name="username"></td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>:<input type="Password" name=" Password"></td>
			</tr>
			<tr>
				<td>
					Confirm Password
				</td>
				<td>:<input type="Password" name=" CPassword"></td>
			</tr>
			<tr>
				<td>
				<fieldset>
					<legend>Gender</legend>
                    <input type="radio" name="">Male
                    <input type="radio" name="">Female
                    <input type="radio" name="">Other
				</fieldset>
			   </td>
				
			</tr>
			

			<tr>
				<td>
				<fieldset>
					<legend>Date of Birth</legend>
                    <input type="date" name="date of birth">

				</fieldset>
			   </td>
				
			</tr>
		
			<tr>
				<td>
					<input type="submit" name="Submit" value="Submit">
					<input type="Reset" name=" Reset">
				</td>
			</tr>
		</table>
	    </fieldset>
        </td>
		</tr>
		<tr><td colspan="2" align="center">Copy right 2017</td></tr>

	</table>
</form>
	
</body>
</html>