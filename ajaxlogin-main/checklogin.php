<?php
	//header('Content-type: application/json');
	
	include "config/koneksi.php";

	$user=$_POST['username']; 
	$pass=$_POST['password'];
	
	$sql= "SELECT username FROM user WHERE username = '".$user."' AND password = '".$pass."'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) 
	{
		echo "true";
	} else
	{
		echo "false";
	}


?>