<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/cssnyatemplate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css">
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" id="atas">
<div class="col-md-2"></div>
<div class="col-md-8">
        <center>
        <img src="<?php echo base_url('assets'); ?>/img/belanjain.png">
        	<div class="row" id="header_form"><br>
                    <?php echo $judul; ?>
                </div><br>
        </center>

<div class="row">
	<div class="col-md-3">
	</div>

	<div class="col-md-6">


        <?php if ($edit == 'no'): ?>
            <?php if ($data_login == ""): ?>
    		<form enctype="multipart/form-data" action="<?php echo base_url('index.php/Home/c_registrasi'); ?>" method=POST>
            <?php else: ?>
            <form enctype="multipart/form-data" action="<?php echo base_url('index.php/DashboardAdmin/c_tambahmember'); ?>" method=POST>
            <?php endif ?>
        <?php endif ?>
        <?php if ($edit == 'yes'): ?>
            <form enctype="multipart/form-data" action="<?php echo base_url('index.php/DashboardAdmin/c_editUser/'.$user_id); ?>" method=POST>
        <?php endif ?>
			
			<label for="exampleInputEmail1">Nama Lengkap</label>
    			<input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama Lengkap" required<?php if ($edit == 'yes'): ?> value="<?php echo $data->nama; ?>"<?php endif ?>
                <?php if ($edit == 'no'): ?><?php endif ?>><br>
	    			
			<label class="radio-inline" required>
				<input type="radio" name="inlineRadioOptions" id="inlineRadio1" name="laki_laki" value="laki_laki"> Laki-laki
			</label>
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="inlineRadio2" name="perempuan" value="perempuan"> Perempuan
			</label>

  		    <div class="form-group">
    			<label for="exampleInputEmail1"><br>Alamat Email</label>
    				<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required
                    <?php if ($edit == 'yes'): ?> value="<?php echo $data->email; ?>"<?php endif ?>
                        <?php if ($edit == 'no'): ?><?php endif ?>></div>

     	    <div class="form-group">
    			<label for="exampleInputEmail1"><br>Tempat Lahir</label>
    				<input type="text" class="form-control" id="exampleInputEmail1" name="tempat_lahir" placeholder="Tempat Lahir" required <?php if ($edit == 'yes'): ?> value="<?php echo $data->tempat_lahir; ?>"<?php endif ?>
                        <?php if ($edit == 'no'): ?><?php endif ?>></div>

    	    <div class="form-group">
    			<label for="exampleInputEmail1"><br>Tanggal Lahir</label>
    				<input type="tet" class="form-control" id="exampleInputEmail1" name="tanggal_lahir" placeholder="YYYY-MM-DD" required <?php if ($edit == 'yes'): ?> value="<?php echo $data->tanggal_lahir; ?>"<?php endif ?>
                        <?php if ($edit == 'no'): ?><?php endif ?>></div>	

    		<div class="form-group">
    			<label for="exampleInputEmail1"><br>Nomor HP</label>
    				<input type="text" class="form-control" id="exampleInputEmail1" name="no_hp" placeholder="Nomor HP" required <?php if ($edit == 'yes'): ?> value="<?php echo $data->no_hp; ?>"<?php endif ?>
                        <?php if ($edit == 'no'): ?><?php endif ?>></div>	

    		<div class="form-group">
    			<label for="exampleInputEmail1">Username</label>
    				<input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username" required <?php if ($edit == 'yes'): ?> value="<?php echo $data->username; ?>"<?php endif ?>
                        <?php if ($edit == 'no'): ?><?php endif ?>></div>		

            <?php if ($edit == 'no'): ?>
  			<div class="form-group">
    			<label for="exampleInputPassword1">Password</label>
    				<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required ></div>
            <?php endif ?>
            <?php if ($edit == 'yes'): ?><?php endif ?>

            <?php if ($data_login == ""): ?>
    		<input type="hidden" name="kapabilitas" value='user'>
            <?php else: ?>

            <div class="form-group">
                <label for="exampleInputPassword1">Kapabilitas</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="kapabilitas" placeholder="Kapabilitas" required <?php if ($edit == 'yes'): ?> value="<?php echo $data->kapabilitas; ?>"<?php endif ?>
                        <?php if ($edit == 'no'): ?><?php endif ?>></div>

             <div class="form-group">
                        <label class="control-label col-sm-3" for="exampleInputFile">Edit Photo Profile</label>
                            <input type="file" id="exampleInputFile" name="foto_profil" value="<?php echo $data_login['foto_profil']; ?>">
                        </div>
            <?php endif ?>

    		<input type="hidden" name="created_at" value="<?php $tgl=date("y-m-d"); $jam=date("h:i:s"); echo $tgl.' '.$jam ?>">
    		<input type="hidden" name="foto_profil" value="default.jpg">

    		<div class="button_daftar">
  				<table><td><button type="submit" class="btn btn-default" id="daftar"><?php echo $tombol; ?></button></td></table></div>
		</form>

	</div>

	<div class="col-md-3"></div>
    <br><br><br>
		
	</div>
	</div>
	</div>

	
</body>
</html>