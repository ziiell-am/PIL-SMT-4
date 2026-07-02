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
<title>Tambah Biodata - Buku Tamu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="asset/css/w3.css">
<style>
  .fade-in { animation: fadeIn 0.8s ease-in; }
  @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-custom-blue w3-wide w3-padding w3-card">
    <a href="dashboard.php" class="w3-bar-item w3-button">Buku Tamu</a>
    <a href="keluar.php" class="w3-bar-item w3-button w3-red w3-right">LogOut</a>    
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding fade-in" style="max-width:1564px">

  <!-- Form Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Tambah Biodata</h3>
    
    <div class="w3-row">
      <form class="w3-container w3-col w3-card-4 w3-light-grey m3" action="simpanbiodata.php" method="post" enctype="multipart/form-data">
      <p>Lakukan Tambah Biodata pada Form ini.</p>

      <p><label>Nama</label>
      <input class="w3-input w3-border" name="nama" type="text"></p>

      <p><label>Phone</label>
      <input class="w3-input w3-border" name="phone" type="text"></p>

      <p><label>Email</label>
      <input class="w3-input w3-border" name="email" type="text"></p>

      <p><label>Foto </label>
      <input class="w3-input w3-border" name="filefoto" type="file"></p>

      <p><label>Gender</label>
      <select class="w3-select" name="gender">
        <option value="" disabled selected>pilih gender anda</option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
        
      </select>

      <input class="w3-button w3-custom-blue-btn w3-section" type="submit" name="submit" value="Simpan">
      </form>
      
    </div> 
    <a href="dashboard.php" class="w3-button w3-border w3-gray">Back</a>
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
