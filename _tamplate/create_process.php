<?php  

include 'database.php';

$iklan_id = $_POST['iklan_id'];
$user_id = $_POST['user_id'];
$harga = $_POST['harga'];
$judul = $_POST['judul'];

$sql = "INSERT INTO iklan (iklan_id,user_id,harga, judul) values ('iklan_id', '$user_id', '$harga', '$judul')";

$mysqli->query($sql);

header('Location: display.php');

