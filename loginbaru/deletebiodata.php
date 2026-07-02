<?php
    include "config/koneksi.php";

    $idbio=$_POST['id']; 
    
    $sql= "DELETE FROM biodata WHERE id ='". $idbio."'";
    //$result = mysqli_query($conn,$sql);
    if ($conn->query($sql) === TRUE)
    {
        echo "true";
    } else
    {
        echo "false";
    }
?>