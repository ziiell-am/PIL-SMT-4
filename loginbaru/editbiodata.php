<?php
include "config/koneksi.php";
$idbio = $_POST['id'];
$nama = $_POST['nama'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];

$sql = "UPDATE biodata SET 
            nama='" . $nama . "', 
            phone='" . $phone . "', 
            email='" . $email . "', 
            gender='" . $gender . "' 
            WHERE id='" . $idbio . "'";

if ($conn->query($sql) === TRUE) {
    echo "true";
} else {
    echo "false";
}
?>