
 <div class="container">
  	<h2><?php echo $subtitle ?></h2>                
  	<ul class="nav nav-tabs nav-justified" role="tablist">
	    <li class="active"><a href="<?php echo base_url('index.php/home/profile/'.$data_login['user_id']) ?>">Profile</a></li>
	    <li><a class="" href="<?php echo base_url('index.php/home/belanjaanku/'.$data_login['user_id']) ?>">Belanjaanku</a></li>
	    <li><a class="" href="<?php echo base_url('index.php/home/jualanku/'.$data_login['user_id']) ?>">Jualanku</a></li>
	    <li><a class="" href="<?php echo base_url('index.php/home/editProfile/'.$data_login['user_id']) ?>">Edit Profile</a></li><li><a class="" href="<?php echo base_url('index.php/home/v_pesan/'.$data_login['user_id']) ?>">Pesan</a></li> 
   	</ul>
</div>