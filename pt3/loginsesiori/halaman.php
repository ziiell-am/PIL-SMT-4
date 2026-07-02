<?php
session_start();

if (!isset($_SESSION["user"])) {
	echo "<script>alert('Session anda belum terdaftar, silakan login kembali'); document.location='login.php';</script>";
} else {

	?>
	<html>

	<head>
		<title>Halamn Login dengan menggunakan Seesion</title>
	</head>

	<body>
		<table width="541" border="0">
			<tr>
				<td>Hal1</td>
				<td>Hal2</td>
				<td><a href="logout.php">Logout</a></td>
			</tr>
			<tr>
				<td height="156" colspan="3" valign="top">
					Selamat datang dihalaman login anda masuk sebagai <?php echo $_SESSION['user']; ?>
				</td>
			</tr>
		</table>

	</body>

	</html>
<?php } ?>