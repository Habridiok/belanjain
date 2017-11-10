<?php  

include 'database.php'; 

$iklan_id = $_POST['iklan_id'];
$user_id = $_POST['user_id'];
$harga = $_POST['harga'];
$judul = $_POST['judul'];

$sql = "UPDATE iklan SET iklan_id = '$iklan_id', user_id = '$user_id', harga = '$harga', judul= '$judul' WHERE iklan_id = $iklan_id";
$mysqli->query($sql);

header("Location: display.php"); 
