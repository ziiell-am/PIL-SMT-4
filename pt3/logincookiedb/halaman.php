<?php

	$user=$_COOKIE['user'];
	$pass=$_COOKIE['pass'];
	if(!isset($user)) 
	{ 
		echo "<script>alert('Cookies anda belum terdaftar, silakan login kembali'); document.location='login.php';</script>";
	}else
	{ 
 
?>
		<html>
		<head>
		<title>Halamn Login dengan menggunakan Cookies</title>
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
			Selamat datang dihalaman login anda masuk sebagai <?=$user?>
			</td>
		  </tr>
		</table>
		 
		</body>
		</html>
<?php }?>