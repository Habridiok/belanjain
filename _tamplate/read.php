<?php  

include 'database.php';

$sql = 'SELECT * FROM iklan';
$query = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Barang CRUD</title>
</head>
<body>
<a href="create.php">Insert</a>
	<table>
		<tr>
			<th>Barcode</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php  
			while ($row = $query->fetch_object()) {
				echo "<tr><td>$row->barcode</td>";
				echo "<td>$row->nama</td>";
				echo "<td>$row->harga</td>";
				echo "<td><a href=\"edit.php?id=$row->id\">Edit</a></td>";
				echo "<td><a href=\"delete.php?id=$row->id\">Delete</a></td></tr>";
			}
		?>
	</table>
</body>
</html>