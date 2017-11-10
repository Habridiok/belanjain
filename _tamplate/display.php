
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

<div class="container">

<!-- Navbar Atas-->
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
				<li><a href="display.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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


 	<div class="row">
<!-- KATEGORI -->
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
						<td><a href="kategori1_nonlogin.php" id="kategori_a">Pakaian Wanita</a></td>
					</tr>
					<tr>
						<td><a href="kategori2_nonlogin.php" id="kategori_a">Pakaian Pria</a></td>
					</tr>
					<tr>
						<td><a href="kategori2_nonlogin.php" id="kategori_a">Celana</a></td>
					</tr>
					<tr>
						<td><a href="kategori2_nonlogin.php" id="kategori_a">Rok</a></td>
					</tr>
					<tr>
						<td><a href="kategori2_nonlogin.php" id="kategori_a">Pakaian Muslim</a></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-md-8">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

<!-- Indicators List Berjalan1 -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="tops.gif">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
    </div>
    <div class="item">
      <img src="vintage.jpg">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
    </div>
    <div class="item">
      <img src="rr.jpg">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
     </div>
     <div class="item">
      <img src="rt.jpg">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
    </div>
    <div class="item">
      <img src="jeans.jpg">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
    </div>
    <div class="item">
      <img src="muslim.jpg">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			</div>

		<div class="col-md-2">
			<div class="kanan">
				<table id="promo">
						<tr>
							<img src="promo.png" class="img-thumbnail" alt="Gambar" width="304" height="250">
								<img src="ongkir.gif" class="img-thumbnail" alt="Gambar" width="304" height="250">
						</tr>
				</table>
			</div>
		</div>

		</div>
		<br>


<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

 <!--Indicator List Berjalan 2 (baju)-->
 <!--List 5 pertama-->
<div class="row">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" id="list">
      <div class="row">
      <div class="col-md-1"></div>
			<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>
	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>
    
    		<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>

			<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>

			<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>
					</td>
					</tr>
				 </tbody>
				</table>
			</div>

			<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>

    		<div class="col-md-1">
			</div>

		</div>
	</div>

	<!--list 5 kedua-->
    <div class="item" id="list">
      <div class="row">
      <div class="col-md-1"></div>
			<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>
    
    		<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>

			<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>

			<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>
					</td>
					</tr>
				 </tbody>
				</table>
			</div>

			<div class="col-md-2">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail"id="judul_barang">
				<span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
				</div>

				<div><a href="#">
					<span class="see_more">See More...</span>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion<br>Surabaya
					</td>
				</tr>	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>

    		<div class="col-md-1">
			</div>


	</div>
</div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic1" type="" data-slide="prev" id="list_bergerak">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next" id="list_bergerak">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

<!--navbar bawah-->
<div class="row" id="navbar_bawah"></div>
<nav class="navbar navbar-default">
  <div class="container-fluid" id="navbar2" >
	<div class="row">
  		<div class="col-md-3">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<a class="navbar-brand" id="copyright"><span class="glyphicon glyphicon-copyright-mark"></span>belanja.in 2017
      			</a> 
      		</div>
      	</div>

      	
		</div>
    </div>
    
 </nav>		

</div>
	

</body>
</html>