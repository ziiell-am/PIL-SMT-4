<?php
session_start();

if (isset($_SESSION["user"])) {
	header("location:dashboard.php");
} else {
?>

<!DOCTYPE html>
<html>
<title>Login - Buku Tamu</title>
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
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="#home" class="w3-bar-item w3-button">Buku Tamu - Login</a>
    </div>
  </div>

  <!-- Page content -->
  <div class="w3-content w3-padding fade-in" style="max-width:1564px">

    <!-- Login Section -->
    <div class="w3-container w3-padding-32" id="contact">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Login</h3>
      <p class="w3-center">Silakan login untuk melanjutkan.</p>
      <div class="w3-row">
        <div class="w3-col w3-container m4"></div>
        <div class="w3-col w3-container m4">

          <form class="w3-container" action="ceklogin.php" method="post">

            <input class="w3-input w3-border" type="text" placeholder="Username" required name="userlog"
              id="username">
            <input class="w3-input w3-section w3-border" type="password" placeholder="Password" required
              name="passlog" id="password">

            <input class="w3-button w3-blue w3-section" type="submit" name="submit" value="LOGIN">

          </form>
        </div>
        <div class="w3-col w3-container m4"></div>
      </div>

    </div>

    <!-- End page content -->
  </div>


  <!-- Footer -->
  <footer class="w3-bottom w3-center w3-black w3-padding-16">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
        class="w3-hover-text-green">w3.css</a></p>
  </footer>

</body>

</html>
<?php } ?>
