<?php
    include "config/koneksi.php";

    $idbio=$_POST['id']; 
    
    $sql= "DELETE FROM biodata WHERE id ='". $idbio."'";
    if ($conn->query($sql) === TRUE)
    {
        echo "true";
    } else
    {
        echo "false";
    }
?>
