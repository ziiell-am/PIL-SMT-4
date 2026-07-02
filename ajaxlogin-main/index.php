<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="asset/css/w3.css">
<script type="text/javascript" src="asset/js/jquery-3.4.0.js"></script>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button">Login Examples</a>
        
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

 

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Login</h3>
    <p class="w3-center">Lets Try Login.</p>
    <div class="w3-row">
      <div class="w3-col w3-container m3"></div>
      <div class="w3-col w3-container m6">
          <div id="pesan" ></div>
        
          <input class="w3-input w3-border" type="text" placeholder="Username" required name="username" id="username">
          <input class="w3-input w3-section w3-border" type="password" placeholder="Password" required name="password" id="password">
          
          <button class="w3-button w3-blue w3-section" onclick="checkuser()" >LOGIN</button>
        

      </div>
      <div class="w3-col w3-container m3 "> </div>
    </div> 
    
  </div>
  

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-bottom w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>
function checkuser() {
  
  
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  
  if( username != "" && password != "" ){
        $.ajax({
            url:'checklogin.php',
            type:'post',
            data:{username:username,password:password},
            success:function(response){
                    
                    if(response == "true"){
                          alert("Login Berhasil");
                          setTimeout(function(){
                          $(window).attr('location','http://localhost/ajaxlogin/dashboard.php');}, 10000);
                    }else if (response == "false") {
                          alert("Login Tidak Berhasil");  
                    }
                        
                  }
          });
  
  }
}
</script>

</body>
</html>