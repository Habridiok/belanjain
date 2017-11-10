
<?php  

include 'database.php';

$sql = 'SELECT * FROM iklan';
$query = $mysqli->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="cssnya_template.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Ini Template Buat Proyek</title>
</head>
<body>

<!-- Navbar Atas-->
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid" id="navbar" >
	<div class="row">
  		<div class="col-md-2">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<a class="navbar-brand" href="#" id="dagangin"><img src="cis.png">
      			</a> 
      		</div>
      	</div>

      	<div class="col-md-3">
      		<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			</ul>
			</div>

     	<div class="col-md-4" >
     		<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default" id="search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</button>
			</form>
			</div>

		<div class="col-md-3">
      		<ul class="nav navbar-nav navbar-right">
				<li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div>
    </div>
    </div>
 </nav>


<!-- KATEGORI -->
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-md-2">
 		<h4>
 			<table class="table">
 			<thead>
 				<tr>
						<th id="table_kategori">Kategori</th>
				</tr>
				</thead>			
				</table></h4>
				<table class="table table" id="table_kategori_border">
				<tbody>
					<tr>
						<td><a href="#" id="kategori_a">Pakaian Wanita</a></td>
					</tr>
					<tr>
						<td><a href="#" id="kategori_a">Pakaian Pria</a></td>
					</tr>
					<tr>
						<td><a href="#" id="kategori_a">Sempak</a></td>
					</tr>
				</tbody>
			</table>
		</div>


		<!-- list Barang Dagangan -->
			<div class="col-md-2" align="center">
			  <a href="#">
				<table class="table table-bordered" >
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span>

				<div id="harga">
					<span class="detail_price">Rp.15.000,00</span>
				</div>
 </a>
				<tr>
					<td id="penjual">
						Elenna Fashion<br> Surabaya
					</td>
				</tr>

			</div>		
					
					</tr>
				 </tbody>
				</table>
			 
			</div>

				<div class="col-md-2" align="center">
				  <a href="#">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td id="kategori_a">Kaos Biru Laut Simple<br>
								Rp. 65.000,00</td>
							</tr>
						</tbody>
					</table>
				  </a>
			</div>

			<div class="col-md-2" align="center">
			  <a href="#">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td id="kategori_a">Kaos Biru Laut Simple<br>Rp. 65.000,00</td>
					</tr>
					</tbody>
				</table>
			  </a>
			</div>

			<div class="col-md-2" align="center">
			 <a href="#">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td id="kategori_a">Kaos Biru Laut Simple<br>Rp. 65.000,00</td>
					</tr>
					</tbody>
				</table>
				</a>
			</div>

			<div class="col-md-2" align="center">
			  <a href="#">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
					</thead>
					<tbody>
						<tr><td id="kategori_a">Kaos Biru Laut Simple<br>Rp. 65.000,00</td></tr>
					</tbody>
				</table>
			  </a>
			</div>
	</div>
</div>

		<!--Pagination (buat pindah halaman)-->
	<div class="container" align="center">
		<nav aria-label="Page navigation">
  			<ul class="pagination">
    			<li>
      				<a href="#" aria-label="Previous">
        				<span aria-hidden="true">&laquo;</span>
      				</a>
    			</li>
    				<li><a href="#" id="kategori_a">1</a></li>
    				<li><a href="#" id="kategori_a">2</a></li>
    				<li><a href="#" id="kategori_a">3</a></li>
    				<li><a href="#" id="kategori_a">4</a></li>
    				<li><a href="#" id="kategori_a">5</a></li>
    			<li>
      				<a href="#" aria-label="Next">
        				<span aria-hidden="true">&raquo;</span>
      				</a>
    			</li>
  			</ul>
		</nav>
	</div>
</div>
	

</body>
</html>
