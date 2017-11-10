<?php  

include 'database.php';

$id = $_GET['id'];
$sql = "DELETE FROM barang where id = $id";
$mysqli->query($sql);

header ('Location: read.php');

?>