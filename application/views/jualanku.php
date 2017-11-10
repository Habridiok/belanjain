	<div class="row">

<?php foreach ($databelanjaan as $iklan): ?>
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
						<span class="glyphicon glyphicon-sort-by-order"></span>Belanja.in Fashion Center<br>Indonesia
					</td>
				</tr>
	
					</td>
					</tr>
				 </tbody>
				</table>
			</div>
	  <?php endforeach ?>

    </div>
    <div class="row, Center-text" >
    	<a href="<?php echo base_url('index.php/home/tambahjualan/'.$data->user_id); ?>"><button type="button" class="btn btn-success">Tambah Jualan</button></a>
    </div>