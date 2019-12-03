<?php
include 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$born = $_POST['born'];

sql = "INSERT INTO santri (name,email,password,$born)";
value ('$name','$email','$password,'$born')";
mysql_query($connect,$sql);
header('location:index.php');
 
