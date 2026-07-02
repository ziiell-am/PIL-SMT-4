<?php

$ekstensi_diperbolehkan = array('png');
$filenama = $_FILES['myFile']['name'];
//echo $filenama;
$x = explode('.', $filenama);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['myFile']['size'];
$file_tmp = $_FILES['myFile']['tmp_name'];
//echo $file_tmp." ";

if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
	if ($ukuran < 1024000) {
		move_uploaded_file($file_tmp, "tempatfile/" . $filenama);
		echo "TRUE";

	} else {
		echo "FALSE";
	}
} else {
	echo "FALSE";
}

?>