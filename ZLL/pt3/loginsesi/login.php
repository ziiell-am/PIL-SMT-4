<?php
session_start();

if (isset($_SESSION["user"])) {
	header("location:halaman.php");
} else {
	?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Login </title>
	</head>

	<body>

		<form action="ceklogin.php" method="post">
			<table width="400" border="0">
				<tbody>
					<tr>
						<td colspan="2">Login Menggunakan Session</td>
					</tr>
					<tr>
						<td width="131" height="29">Username</td>
						<td width="192"><input id="userlog" type="text" name="userlog" /></td>
					</tr>
					<tr>
						<td height="30">Password</td>
						<td><input id="passlog" type="password" name="passlog" /></td>
					</tr>
					<tr>
						<td height="35"></td>
						<td><input id="masuk" type="submit" name="masuk" value="Submit" /></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>

	</html>
<?php } ?>