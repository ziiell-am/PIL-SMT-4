<?php

	$user=$_COOKIE['user'];
	$pass=$_COOKIE['pass'];
	if(!isset($user)) 
	{ 
		echo "<script>alert('Anda diarahkan ke dashboard'); document.location='halaman.php';</script>";
	}else
	{ 
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Preview Isian Biodata</title>	
</head>
<body>
<?php
    include "koneksi.php"; 
    $result=mysqli_query($conn,"SELECT * FROM biodata WHERE id =1005");
    if(mysqli_num_rows($result) > 0)
	{ 
		  $row=mysqli_fetch_assoc($result); 
          //var_dump($row['nama']);
?>		  
    

<table width="400" border="0">
<tbody>
<tr>
<td colspan="2">Preview Biodata</td>
</tr>
<tr>
<td width="131" height="29">Nama :</td>
<td width="192"><?php echo $row['nama'];?></td>
</tr>
<tr>
<td height="30">Phone :</td>
<td><?php echo $row['phone'];?></td>
</tr>
<tr>
<td height="30">Email :</td>
<td><?php echo $row['email'];?></td>
</tr>
<tr>
<td height="30">Foto :</td>
<td><img src=<?php echo $row['foto'];?>> </td>
</tr>
<tr>
<td height="30">Gender :</td>
<td><?php echo $row['gender'];?></td>
</tr>
<tr>
<td height="35"></td>
<td></td>
</tr>
</tbody>
</table>
<?php 
    }
?>
</body>
</html>
<?php }?>