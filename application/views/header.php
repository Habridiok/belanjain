<!DOCTYPE html>
<html lang="en">
<head><title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/cssnyatemplate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
</head>
<body>


<!-- Navbar Atas-->
<nav class="navbar navbar-default">
  <div class="container-fluid" id="navbar" >
	<div class="row">
	<div class="container">
  		<div class="col-md-2">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<a class="navbar-brand" href="<?php echo base_url('index.php/home/') ?>" id="dagangin"><img src="<?php echo base_url('assets'); ?>/img/cis.png">
      			</a> 
      		</div>
      	</div>

      	<div class="col-md-3">
      		<ul class="nav navbar-nav navbar-right">
				<!-- <li><a href="display.php"><span class="glyphicon glyphicon-home"></span> Home</a></li> -->
			</ul>
		</div>

     	<div class="col-md-4" >
     		<form class="navbar-form navbar-left" role="search" action="<?php echo base_url('index.php/iklan/search'); ?>" method="POST">
				<div class="form-group">
					<input type="text" name ="search" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default" id="search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</button>
			</form>
			</div>

		<div class="col-md-3">
      		<ul class="nav navbar-nav navbar-right">
      			<?php if ($data_login == ""): ?>
					<li><a href="<?php echo base_url('index.php/Home/v_daftar'); ?>"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      			<?php else: ?>	
      				<?php if ($ada == "yes"): ?>
      					<li class="dropdown">
	                        <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="dropdown_navbar">
	                            <span class="glyphicon glyphicon-bell" aria-hidden="true"></span><span class="caret"></span></a>
	                        <ul class="dropdown-menu" id="isi_dropdown">
	                            <li class="dropdown-header">NOTIFIKASI</li>
	                            <li><?php echo "$jumlahPesan pesan belum terbaca"; ?></li>
	                            <li><?php echo "$jumlahPemesanan barang anda terbeli"; ?></li>
	                        </ul>
                    	</li>
      				<?php endif ?>
      				<?php if ($ada == "no"): ?>
                    	<li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
      				<?php endif ?>	

                    <li><a href="<?php echo base_url('index.php/home/belanjaanku/'.$data_login['user_id']) ?>"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="dropdown_navbar">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $data_login['nama']; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" id="isi_dropdown">
                            <li class="dropdown-header">B E L A N J A . I N</li>
                            <li><a href="<?php echo base_url('index.php/home/profile/'.$data_login['user_id']) ?>">Profil</a></li>
                            <li><a href="<?php echo base_url('index.php/Home/logout'); ?>">Keluar</a></li>
                        </ul>
                    </li>
      			<?php endif ?>
			</ul>
		</div>
    </div>
    </div>
    </div>
 </nav>

  <!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header text-center">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"  id="myModalLabel">Login</h4>
	        <br>	
	        <img src="<?php echo base_url('assets'); ?>/img/belanjain.png">
	      </div>
	      <div class="modal-body ">
	        <form action="<?php echo base_url('index.php/Home/logins'); ?>" method=POST>
		    <div class="form-group">
    			<label for="exampleInputEmail1">Username</label>
    			<input type="text" class="form-control" name="username" placeholder="Username" required>
    		</div>
			 <div class="form-group">
    				<label for="exampleInputPassword1">Password</label>
    			<input type="password" class="form-control" name="password" placeholder="Password" required>
    		</div>
    		<input type="hidden" name="kapabilitas" value="user">
			 <div class="form-group">
				<button type="submit" class="btn btn-default btn-block btn-success" >Login</button>
    		</div>
		    </form>
	      </div>
	    </div>
	  </div>
	</div>