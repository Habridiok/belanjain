 <div class ="container">
	 <div class="row">
		    <div class="'col-md-10">
			    <div class="col-md-10" id="tableMember">
			    <center id="tulisanTable">Tulis Pesan Ke = <?php echo $data->nama ?></center><br>
				   <form enctype="multipart/form-data" action="<?php echo base_url('index.php/home/c_boxpesan'); ?>" method=POST>
				    	<textarea class="form-control" name="konten" placeholder="isi pesan" ></textarea>
				    	<input type="hidden" name="sender_id" value="<?php echo $data_login['user_id']; ?>">
				  		<input type="hidden" name="reciever_id" value="<?php echo $data->user_id ?>">

				  		<div class="button_daftar">
				  			<table><button type="submit" class="btn btn-default, btn-success" id="kirim">Kirim</button></table>
				  		</div>
				    </form>
			    </div>
		    </div>
	  </div>
  </div>