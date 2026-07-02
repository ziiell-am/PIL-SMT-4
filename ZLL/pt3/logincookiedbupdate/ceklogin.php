<?php
	
	include "koneksi.php";
	$username=$_POST['userlog']; 
	$passs=$_POST['passlog']; 
	 
	
	if (($username == ""  ) or ($passs==""))
	{ 
		echo "<script>alert('Username tidak boleh kosong');document.location='javascript:history.back(0);'</script>";
	}
	else
	{
		//$sql= "SELECT username,password FROM admin WHERE username = 
		//'$username' AND password = '$passs'";
		$result=mysqli_query($conn,"SELECT * FROM user WHERE (username ='".$username."') AND (password ='".$passs."')");

		//$result = mysqli_query($conn,$sql);
		
		//$e=mysqli_num_rows($sql);
		//var_dump($row);
		if(mysqli_num_rows($result) > 0)
		{ 
		  $row=mysqli_fetch_assoc($result);
		  $username =$row['username'];
		  $passs    =$row['password'];
		 
		  setcookie("user", $username, time()+3600);
		  setcookie("pass", $passs, time()+3600);
		  
		  header("location:halaman.php"); 
		  
		}
		else
		{
			echo "<script>alert('Login tidak berhasil, username dan password tidak valid'); document.location='login.php';</script>";
		}
	}
?>