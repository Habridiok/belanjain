<!DOCTYPE html>
<html>
<head><title>Login - Belanja.in</title>
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
                    Login Admin Belanja.in
                </div><br>
        </center>

<div class="row">
	<div class="col-md-3">
	</div>

	<div class="col-md-6">
		<form action="<?php echo base_url('index.php/Home/logins'); ?>" method=POST>
  		   <div class="form-group">
    		<label for="exampleInputEmail1">Username</label>
    			<input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="username" required></div>
    			<div class="button_daftar">
    		<div class="form-group">
    		<label for="exampleInputPassword1">Password</label>
    			<input type="password" class="form-control" id="password" name = "password" placeholder="Password" required></div>
    			<input type="hidden" name="kapabilitas" value='admin'>
  					<table><td><button type="submit" class="btn btn-default" id="daftar">Login</button></td></table><div>
		</form>
	</div>


	<div class="col-md-3"></div>
		
	</div>
	</div>
	</div>

	
</body>
</html>