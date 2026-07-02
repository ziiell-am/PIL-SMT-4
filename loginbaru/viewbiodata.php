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
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Daftar Biodata</h3>
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
          <td><a href="javascript:void(0)" class="w3-button w3-tiny w3-purple" onClick="deleteid(<?php echo $row['id'];?>,window.location.href)">Hapus</button></td>
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
        <a class='w3-bar-item w3-button' href='<?php echo "viewbiodata.php?pageno=".($pageno-1); ?>' >&laquo;</a>
      <?php 
      } else if ($pageno == 1) 
      {?>
         <a href="#" class="w3-bar-item w3-button" disabled>&laquo;</a>
      <?php } ?>
      <?php  

      for ($i=1; $i<=$total_pages; $i++) {   
        if ($i == $pageno) {   
            $pagLink .= "<a class='w3-bar-item w3-button w3-green' href='viewbiodata.php?pageno=".$i."'>".$i." </a>";   
        }               
        else  {   
            $pagLink .= "<a class='w3-bar-item w3-button' href='viewbiodata.php?pageno=".$i."'>".$i." </a>";     
        }   
      };     
      echo $pagLink; 
      if($pageno < $total_pages){  ?>
        <a class='w3-bar-item w3-button' href='<?php echo "viewbiodata.php?pageno=".($pageno+1);?>'>&raquo;</a>  
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

<script>
function deleteid(id,url) {
  
 
  if( id != "" ){

    if (confirm('Are you sure you want to delete '+id+' this thing into the database?')) {
        var xhttp;  
        xhttp = new XMLHttpRequest();
        xhttp.open("POST", "deletebiodata.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id="+id);   

        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
            if (data == "true" ){
              alert("Hapus Data Berhasil");
              setTimeout(function(){
                window.location.assign(url); }, 100);
            } else if (data == "false"){
              alert("Hapus Data Tidak Berhasil");
            } 
          }
        };
    } else {
      setTimeout(function(){
      window.location.assign(url); }, 100);
    } 
  
  
  }
}
</script>

</body>
</html>

<?php
  };
?>