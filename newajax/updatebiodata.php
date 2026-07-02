<?php
	session_start();
		
	if(!isset($_SESSION["user"])) 
	{ 
		echo "<script>alert('Session anda belum terdaftar, silakan login kembali'); document.location='login.php';</script>";
	}else
	{ 
		include "config/koneksi.php";

		$id=$_GET['id']; 
		
		$result=mysqli_query($conn,"SELECT * FROM biodata WHERE id=$id");
		if(mysqli_num_rows($result) > 0)
		{ 
		  $row=mysqli_fetch_assoc($result);		
		}
?>

<!DOCTYPE html>
<html>
<title>Edit Biodata - Buku Tamu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="asset/css/w3.css">
<script type="text/javascript" src="asset/js/jquery-3.4.0.js"></script>
<style>
  .fade-in { animation: fadeIn 0.8s ease-in; }
  @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
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

  <!-- Form Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Edit Biodata</h3>
    
    <div class="w3-row">
      <div class="w3-container w3-col w3-card-4 w3-light-grey m3">
      <p>Lakukan Edit Biodata pada Form ini.</p>
      <input name="id" type="hidden" id="idbio" value="<?php echo $row['id'];?>"> 

      <p><label>Nama</label>
      <input class="w3-input w3-border" name="nama" id="nama" type="text" value="<?php echo $row['nama'];?>"></p>

      <p><label>Phone</label>
      <input class="w3-input w3-border" name="phone" id="phone" type="text" value="<?php echo $row['phone'];?>"></p>

      <p><label>Email</label>
      <input class="w3-input w3-border" name="email" id="email" type="text" value="<?php echo $row['email'];?>"></p>

      <p><label>Gender</label>
      <select class="w3-select" name="gender" id="gender">
        <option value="" disabled>pilih gender anda</option>
        <option value="L" <?php if($row['gender']=='L') echo 'selected';?>>Laki-Laki</option>
        <option value="P" <?php if($row['gender']=='P') echo 'selected';?>>Perempuan</option>
      </select>

      <button class="w3-button w3-custom-blue-btn w3-section" onclick="updateData()">Simpan</button>
      </div>
      
    </div> 
    <a href="viewbiodata.php" class="w3-button w3-border w3-gray">Back</a>
  </div>
  

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-bottom w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<!-- Loading Spinner Modal -->
<div id="loadingModal" class="w3-modal" style="display:none">
  <div class="w3-modal-content w3-card-4 w3-center w3-padding-64" style="max-width:300px;background:rgba(255,255,255,0.95)">
    <i class="w3-spin w3-xxxlarge">&#8635;</i>
    <p>Memproses...</p>
  </div>
</div>

<script>
function updateData() {
    var id = document.getElementById("idbio").value;
    var nama = document.getElementById("nama").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var gender = document.getElementById("gender").value;

    if (nama != "" && phone != "" && email != "" && gender != "") {
        document.getElementById("loadingModal").style.display = "block";
        $.ajax({
            url: 'editbiodata.php',
            type: 'post',
            data: { id: id, nama: nama, phone: phone, email: email, gender: gender },
            success: function(response) {
                document.getElementById("loadingModal").style.display = "none";
                if (response == "true") {
                    alert("Update Data Berhasil");
                    setTimeout(function() {
                        window.location.assign('viewbiodata.php');
                    }, 100);
                } else {
                    alert("Update Data Tidak Berhasil");
                }
            }
        });
    } else {
        alert("Semua field harus diisi!");
    }
}
</script>

</body>
</html>

<?php
    $conn->close();
  };
?>
