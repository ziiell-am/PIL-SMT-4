<?php
	session_start();
		
	if(!isset($_SESSION["user"])) 
	{ 
		echo "<script>alert('Session anda belum terdaftar, silakan login kembali'); document.location='login.php';</script>";
	}else
	{ 
		include "config/koneksi.php";
		// Get total biodata count for statistics
		$total_result = mysqli_query($conn, "SELECT COUNT(*) as total FROM biodata");
		$total_row = mysqli_fetch_assoc($total_result);
		$total_biodata = $total_row['total'];
?>

<!DOCTYPE html>
<html>
<title>Dashboard - Buku Tamu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="asset/css/w3.css">
<style>
  .fade-in { animation: fadeIn 0.8s ease-in; }
  @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
  .stat-card { transition: transform 0.3s ease; cursor: default; }
  .stat-card:hover { transform: translateY(-5px); }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-custom-blue w3-wide w3-padding w3-card">
    <a href="dashboard.php" class="w3-bar-item w3-button">Buku Tamu</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-red w3-right">LogOut</a>    
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding fade-in" style="max-width:1564px">

  <!-- Dashboard Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Dashboard</h3>

    <!-- Menu Buttons -->
    <h4><p class="w3-center">Pilih Menu</p></h4>
    <div class="w3-row">
      <div class="w3-col w3-container w3-center m4">
        <a href="addbiodata.php" class="w3-button w3-border w3-xxxlarge w3-purple">Input Biodata</a>
      </div>
      <div class="w3-col w3-container w3-center m4">
        <a href="viewbiodata.php" class="w3-button w3-border w3-xxxlarge w3-purple">Daftar Biodata</a>
      </div>
      <div class="w3-col w3-container w3-center m4">
        <a href="profilbiodata.php" class="w3-button w3-border w3-xxxlarge w3-purple">Profil</a>
      </div>
    </div>
  </div>
  
</div>

<!-- Footer -->
<footer class="w3-bottom w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>

<?php
  $conn->close();
  };
?>
