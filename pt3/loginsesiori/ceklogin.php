<?php
session_start();

$username = $_POST['userlog'];
$passs = $_POST['passlog'];


if (($username == "") or ($passs == "")) {
	echo "<script>alert('Username tidak boleh kosong');document.location='javascript:history.back(0);'</script>";
} else {


	if (($username == "saya") && ($passs == "dia")) {

		$_SESSION["user"] = $username;
		$_SESSION["pass"] = $passs;

		header("location:halaman.php");

	} else {
		echo "<script>alert('Login tidak berhasil, username dan password tidak valid'); document.location='login.php';</script>";
	}
}
?>