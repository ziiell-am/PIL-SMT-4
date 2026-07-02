 <?php   
    include "config/koneksi.php";
    $nama=$_POST['nama']; 
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

    $ekstensi_diperbolehkan	= array('png','jpg');
	$filenama = $_FILES['filefoto']['name'];
	$x = explode('.', $filenama);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['filefoto']['tmp_name'];
    $filefoto = 'upload/'.$filenama;	
	if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
	{
	    move_uploaded_file($file_tmp, 'upload/'.$filenama);		
    } 
    else 	
    {
	    echo "<script>alert('Gagal Upload'); document.location='addbiodata.php';</script>";
        exit();
    };



    $sql = "INSERT INTO biodata (nama, phone, email, foto, gender)
    VALUES ('$nama','$phone','$email','$filefoto','$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Telah Disimpan'); document.location='addbiodata.php';</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan'); document.location='addbiodata.php';</script>";
    };
?>