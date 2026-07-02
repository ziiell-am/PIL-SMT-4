<?php		 
	if ($_POST['submit'])
	{		
	  	$ekstensi_diperbolehkan	= array('png');
		$filenama = $_FILES['fileField']['name'];
		//echo $filenama;
		$x = explode('.', $filenama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['fileField']['size'];
		$file_tmp = $_FILES['fileField']['tmp_name'];	
		//echo $file_tmp." ";

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
		{
			if($ukuran < 1024000) {			
			  move_uploaded_file($file_tmp, "tempatfile/"."gambarku.png");
			  echo "
			  	<!DOCTYPE html>
				<html>
				<head>
					<link rel='stylesheet' href='asset/css/sweetalert2.min.css'>
					<script src='asset/js/sweetalert2.all.min.js'></script>
					</head>
				<body>
					<script>Swal.fire('Upload Berhasil !!!');</script>;
				</body>
				</html>";
			  echo "<img src='tempatfile/gambarku.png' >";	
			}else{
			  echo "UKURAN FILE TERLALU BESAR"; }
		} else 	{
		echo "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
		}
	}
?>
	
