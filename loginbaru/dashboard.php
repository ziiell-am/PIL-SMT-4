<?php
	session_start();
		
	if(!isset($_SESSION["user"])) 
	{ 
		echo "<script>alert('Session anda belum terdaftar, silakan login kembali'); document.location='login.php';</script>";
	}else
	{ 
 
?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="asset/css/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-yellow w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button">Login Examples</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-blue w3-right">LogOut</a>    
  </div>

</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Dashboard</h3>
    <h4><p class="w3-center">Choose Menu.</p></h4>
    <div class="w3-row">
      <div class="w3-col w3-container w3-center m4">
      <a href="addbiodata.php" class="w3-button w3-border w3-xxxlarge w3-purple">Input Biodata</a>
      </div>
      <div class="w3-col w3-container w3-center m4">
      <a href="viewbiodata.php" class="w3-button w3-border w3-xxxlarge w3-purple">Daftar Biodata</a>    
      </div>
      <div class="w3-col w3-container w3-center m4 "> 
      <a href="profilbiodata.php" class="w3-button w3-border w3-xxxlarge w3-purple">Profil</a>
      </div>
    </div> 
    
  </div>
  

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-bottom w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>

<?php
  };
?>