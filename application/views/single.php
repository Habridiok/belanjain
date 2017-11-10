<div class="container">
	<div class="row">
		<div class="col-md-2">			
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3" align="center">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>
								<img src="<?php echo base_url('uploads/'.'iklan/'.$data->foto_iklan) ?>" class="img-thumbnail"
								max-width="100%"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td id="kategori_a">
									<?php echo $data->judul; ?>
									<br>
									<?php echo $data->harga ?>
									<br>
									<?php echo $data->deskripsi ?>
									<br>
									<?php echo 'Tersedia = '.$data->jumlah.' buah' ?>
									<br>
								</td>
							</tr>
						</tbody>


					</table>
				</div>
				<tbody>
							<tr>
								<td id="kategori_a">
								<thead>
									<tr>
										<th>
											<img src="<?php echo base_url('uploads/'.'profil/'.$data_user->foto_profil) ?>" class="img-circle" width="180" height="180"></th>
									</tr>
								</thead>
								<br>
									<?php echo $data_user->nama; ?>
									<br>
									<?php echo $data_user->no_hp ?>
									<br>
									<?php echo $data_user->email ?>
									<br>
								</td>
							</tr>
							<?php if ($data_login['user_id'] == $data_user->user_id): ?>
								echo "Ini Adalah Barang Jualan Anda"
							<?php else: ?>
								<?php if ($data_login == ""): ?>
								Anda harus login terlebih dahulu sebelum membeli produk ini
								<?php else: ?>
									<form action="<?php echo base_url('index.php/Iklan/beli'); ?>" method=POST>
										<input type="number" name="jumlahBeli">
										
										<input type="hidden" name="user_id" value="<?php echo $data_login['user_id']; ?>">
										<input type="hidden" name="nama" value="<?php echo $data_login['nama']; ?>">
										<input type="hidden" name="reciever_id" value="<?php echo $data->user_id ?>">
										<input type="hidden" name="judul" value="<?php echo $data->judul ?>">
										<input type="hidden" name="iklan_id" value="<?php echo $data->iklan_id; ?>">
										<input type="hidden" name="jumlahSekarang" value="<?php echo $data->jumlah; ?>">
										<input type="hidden" name="created_at" value="<?php $tgl=date("y-m-d"); $jam=date("h:i:s"); echo $tgl.' '.$jam ?>">
										<button type="submit" class="btn btn-primary">Beli</button>
									</form>
									<form action="<?php echo base_url('index.php/home/v_boxpesan2/'.$data_user->user_id); ?>" method=POST >
										<button type="submit" class="btn btn-primary">Hubungi Penjual?</button><!-- 
										<input type="hidden" name="reciever_id" value="<?php echo $data->user_id; ?>">
										<input type="hidden" name="sender_id" value="<?php echo $data_login['user_id']; ?>"> -->
									</form>
								<?php endif ?>
							<?php endif ?>

				</tbody>

				<div>
						
						
						<?php foreach ($data_komentar as $komentar): ?>
						<div class="col-md-3" align="center">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>
											Komentar Member = 
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td id="kategori_a">
											<?php echo $komentar->nama." = ".$komentar->konten; ?>
											<br>
											<?php if ($data_login['user_id'] = $komentar->user_id): ?>									<form action="<?php echo base_url('index.php/iklan/hapusKomen/'.$komentar->komentar_id."/".$data->iklan_id); ?>">
													<div class="button_daftar">
									  				<button type="submit" class="btn btn-default" id="daftar">Hapus</button></div>
								  				</form>
											<?php else: ?>	
											
											<?php endif ?>	
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<?php endforeach ?>
						<form action="<?php echo base_url('index.php/Iklan/komen'); ?>" method=POST>
							<input type="text-area" name="konten">
							<?php if ($data_login == ""): ?>
								Anda harus login terlebih dahulu sebelum memasukkan komentar
							<?php else: ?>
								<input type="hidden" name="user_id" value="<?php echo $data_login['user_id']; ?>">
								<input type="hidden" name="iklan_id" value="<?php echo $data->iklan_id; ?>">
								<input type="hidden" name="created_at" value="<?php $tgl=date("y-m-d"); $jam=date("h:i:s"); echo $tgl.' '.$jam ?>">
								<button type="submit" class="btn btn-primary">Kirim</button>
							<?php endif ?>

						</form>
				</div>

			</div>


