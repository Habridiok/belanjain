<div class="container"  id="bodinya">
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
						<td><a href="<?php echo base_url('index.php/iklan/iklankategori/accessories'); ?>">Accessories</a></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url('index.php/iklan/iklankategori/baju'); ?>">Baju</a></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url('index.php/iklan/iklankategori/bawahan'); ?>">Bawahan</a></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url('index.php/iklan/iklankategori/dress'); ?>">Dress</a></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url('index.php/iklan/iklankategori/jaket'); ?>">Jaket</a></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url('index.php/iklan/iklankategori/sepatu'); ?>">Sepatu</a></td>
					</tr>
					<tr>
						<td><a href="<?php echo base_url('index.php/iklan/iklankategori/tas'); ?>">tas</a></td>
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
      <img src="<?php echo base_url('assets'); ?>/img/tops.gif">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('assets'); ?>/img/vintage.jpg">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('assets'); ?>/img/rr.jpg">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
     </div>
     <div class="item">
      <img src="<?php echo base_url('assets'); ?>/img/rt.jpg">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('assets'); ?>/img/jeans.jpg">
      <div class="carousel-caption">
        DISKON UP TO 100% untuk Pembelian 1000 Smarthphone seharga 5 juta keatas
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('assets'); ?>/img/muslim.jpg">
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
					<img src="<?php echo base_url('assets'); ?>/img/sale.jpg" class="img-thumbnail" alt="Gambar" width="304" height="250"><br>
					<img src="<?php echo base_url('assets'); ?>/img/ongkir.gif" class="img-thumbnail" alt="Gambar" width="304" height="250">
			</div>
		</div>

		</div>
		<br>

      <div class="row">
	  <?php foreach ($data as $iklan): ?>
      <div class="col-md-1"></div>
			<div class="col-md-3">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><img src="<?php echo base_url('uploads/'.'iklan/'.$iklan->foto_iklan) ?>" class="img-thumbnail" alt="Gambar" width="304" height="236" id="table-baju"></th>
						</tr>
						
					</thead>
				 <tbody>
					<tr>
						<td>
						<div class="detail" id="judul_barang">
				<span class="detail_name"><?php echo $iklan->judul; ?></span></div>

				<div id="harga">
					<span  class="glyphicon glyphicon-tag">Rp. <?php echo $iklan->harga ?></span>
				</div>
				<div id="harga">
					<span  class=""><?php echo 'Tersedia = '.$iklan->jumlah.' buah' ?></span>
				</div>
				<div><a href="<?php echo base_url('index.php/iklan/single/'.$iklan->iklan_id); ?>">Read More...</a>
				</a></div>

				<tr>
					<td id="penjual">
						<span class="glyphicon glyphicon-sort-by-order"></span> BELANJA.in<br>Indonesia
					</td>
				</tr>
	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>
	  <?php endforeach ?>
	  </div>

</div>