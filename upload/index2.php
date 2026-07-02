<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="asset/css/w3.css">
<link rel='stylesheet' href='asset/css/sweetalert2.min.css'>
<script src='asset/js/sweetalert2.all.min.js'></script>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button">Upload Examples</a>
        
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

 

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Upload</h3>
    <p class="w3-center">Lets Try Upload.</p>
    <div class="w3-row">
      <div class="w3-col w3-container m3"></div>
      <div class="w3-col w3-container m6">
          <div id="pesan" ></div>
               
          <input id="fileupload" class="w3-input w3-border" type="file" required name="fileupload" >
          <button id="upload-button" class="w3-button w3-blue w3-section" onclick="uploadFile()"> Upload </button>

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

async function uploadFile() {
    const fileInput = document.getElementById('fileupload');
    const file = fileInput.files[0]; // Get the first selected file

    if (!file) {
        Swal.fire('Please select a file first!');
        return;
    }

    const formData = new FormData();
    formData.append('myFile', file); // 'myFile' is the key the server will look for

    try {
        const response = await fetch('http://localhost/upload/file-upload2.php', {
            method: 'POST',
            body: formData,
            // Note: Don't set 'Content-Type' manually; the browser sets it to 'multipart/form-data' with the correct boundary
        });

        if (response.ok) {
            console.log("Upload successful!");
            Swal.fire('The file has been uploaded successfully.');
        } else {
            console.error("Upload failed.");
            Swal.fire('The file has been Upload failed.');

        }
    } catch (error) {
        console.error("Error:", error);
        Swal.fire('Something Error.');
    }
}

</script>

</body>
</html>