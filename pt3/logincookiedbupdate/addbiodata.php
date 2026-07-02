<?php    
    include "koneksi.php";
    $nama=$_POST['nama']; 
    $phone=$_POST['phone'];
    $email=$_POST['email']; 
    $foto=$_POST['foto'];
    $gender=$_POST['gender'];

    $sql = "INSERT INTO biodata (nama, phone, email, foto, gender) VALUES ('$nama','$phone','$email','$foto','$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Telah Disimpan'); document.location='biodata.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan'); document.location='biodata.php';</script>";
    };
?>