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
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Profil Foto Biodata</h3>
    <a href="dashboard.php" class="w3-button w3-border w3-gray">Back</a>
    <div class="w3-row">
    <table class="w3-table-all">
    <thead>
      <tr class="w3-green">
        <th>NAMA</th>
        <th>PHONE</th>
        <th>EMAIL</th>
        <th>FOTO</th>
        <th>GENDER</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <?php   
        include "config/koneksi.php";

        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }

        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM biodata";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM biodata LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);

    

		if(mysqli_num_rows($res_data) > 0)
		{ 
      while($row = mysqli_fetch_array($res_data)){		
    ?>
        <tr>
          <td><?php echo $row["nama"];?></td>
          <td><?php echo $row["phone"];?></td>
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["foto"];?></td>
          <td><?php echo $row["gender"];?></td>
          <td><a href="javascript:void(0)" class="w3-button w3-tiny w3-blue" onClick="lihatid('<?php echo $row['foto'];?>')">Lihat Foto</button></td>
        </tr>

    <?php
      };
    } else { ?>
      <tr>
          <td colspan ="6"><p align="center">No Data</p></td>
          
      </tr>
    <?php

     }
    ?>
    
    </table>
    <?php $conn->close(); ?>
    <div class="w3-bar w3-border">
      <?php
      $pagLink = ""; 
      if ($pageno >=2 ) {?>
        <a class='w3-bar-item w3-button' href='<?php echo "profilbiodata.php?pageno=".($pageno-1); ?>' >&laquo;</a>
      <?php 
      } else if ($pageno == 1) 
      {?>
         <a href="#" class="w3-bar-item w3-button" disabled>&laquo;</a>
      <?php } ?>
      <?php  

      for ($i=1; $i<=$total_pages; $i++) {   
        if ($i == $pageno) {   
            $pagLink .= "<a class='w3-bar-item w3-button w3-green' href='profilbiodata.php?pageno=".$i."'>".$i." </a>";   
        }               
        else  {   
            $pagLink .= "<a class='w3-bar-item w3-button' href='profilbiodata.php?pageno=".$i."'>".$i." </a>";     
        }   
      };     
      echo $pagLink; 
      if($pageno < $total_pages){  ?>
        <a class='w3-bar-item w3-button' href='<?php echo "profilbiodata.php?pageno=".($pageno+1);?>'>&raquo;</a>  
        <?php } else {    
        ?>
        <a href="#" class="w3-bar-item w3-button">&raquo;</a>
        <?php } ?>

      </div>
    </div> 
    
  </div>
  

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-bottom w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<div id="modal01" class="w3-modal w3-center" onclick="this.style.display='none'">
  <img class="w3-modal-content " id="img01" style="width:128px; height:auto">
</div>

<script>
function lihatid(urlsrc) {

  if( urlsrc != "" ){
    document.getElementById("img01").src = urlsrc;
    document.getElementById("modal01").style.display = "block";
  }
}
</script>

</body>
</html>

<?php
  };
?>