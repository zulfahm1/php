<?php
include 'conncection.php';
$ID =DELETE FROM mahasiswa WHERE id ='$ID'";
 mysqli_query($connect,$sql);
header ('location:index.php');
