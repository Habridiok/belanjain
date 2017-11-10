<?php 
include 'database.php'; 

    $user_id = $_GET['user_id'];
	$sql = "SELECT * FROM iklan WHERE iklan_id = $iklan_id";
	$query = $mysqli->query($sql);
	$row = $query->fetch_object();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Barang CRUD</title>
</head>
<body>

	<form method="POST" action="edit_process.php">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<label>
		Barcode:
		<input type="text" name="barcode" value="<?php echo $row->barcode;?>">
	</label></br>

	<label>
		Nama:
		<input type="text" name="nama" value="<?php echo $row->nama;?>">
	</label></br>

	<label>
		Harga:
		<input type="number" name="harga" value="<?php echo $row->harga;?>">
	</label></br>
		
	<br>
<input type="submit" value="Simpan">

	</form>
</body>
</html>