<?php

	$user=$_COOKIE['user'];
	$pass=$_COOKIE['pass'];
	if(isset($user)) 
	{ 
		echo "<script>alert('Anda diarahkan ke dashboard'); document.location='halaman.php';</script>";
	}else
	{ 
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Isian Biodata</title>	
</head>
<body>

<form action="addbiodata.php" method="post">
<table width="400" border="0">
<tbody>
<tr>
<td colspan="2">Isi Biodata</td>
</tr>
<tr>
<td width="131" height="29">Nama :</td>
<td width="192"><input id="nama" type="text" name="nama" /></td>
</tr>
<tr>
<td height="30">Phone</td>
<td><input id="phone" type="text" name="phone" /></td>
</tr>
<tr>
<td height="30">Email</td>
<td><input id="email" type="email" name="email" /></td>
</tr>
<tr>
<td height="30">Foto</td>
<td><input id="foto" type="text" name="foto" /></td>
</tr>
<tr>
<td height="30">Gender</td>
<td><input id="gender" type="text" name="gender" /></td>
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
<?php }?>