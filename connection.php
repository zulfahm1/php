<?php
$serve ="localhost";
$user ="root";
$pass="indonesia";
$data= "santri_usman";
  
 
$connect= mysql_connect($serve,$user,$pass,$data);

if ($connect) {
   die("koneksi gagal =>" . mysql_connect_error());
}

$sql ="CREATE TABLE santri(
  id INT (30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR 	(30) NOT NULL,
  email VARCHAR 	(30) NOT NULL,
  password VARCHAR 	(30) NOT NULL,
  born	 DATE NOT NULL
)";
 mysqli_query($connect,$sql);

