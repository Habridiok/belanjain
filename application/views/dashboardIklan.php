      <!DOCTYPE html>
      <html lang="en">
      <head>

     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/cssnyatemplate.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>


      </head>
      <body>

    <div class="row">
      <div class="col-md-2" id="dashboard">
      <center>
      <div class="atas" id="dbatas">
        <img src="<?php echo base_url('assets'); ?>/img/cis.png">
      </div>
      <br>
      <div class="dashboard" id="tulisdd">
        DASHBOARD
      </div>
      <br>
      <div class="dashboard" id="tulisda">
        <?php echo $data_login['nama']; ?>
      </div>
           <ul class="nav nav-pills nav-stacked" id="dd">
           <li><img src="<?php echo base_url('uploads/profil/'.$data_login['foto_profil']); ?>" class="img-circle" width="180" height="180""></li>
           <br><br>
         <li><a href="<?php echo base_url('index.php/DashboardAdmin/dashboard') ?>" id="tulisan"> <span class="glyphicon glyphicon-user"> ListMember</span></a></li><br>
         <li><a href="<?php echo base_url('index.php/DashboardAdmin/dashboardiklan') ?>" id="tulisan"><span class="glyphicon glyphicon-sort"> ListIklan</span></a></li>
         <br><br>
           </ul>
      </div>

    <div class="col-md-10" id="navbarAdmin">
    <nav class="navbar navbar-default" id="navbar">
    <div class="col-md-12">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('index.php/Home/logoutadmin'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
     </div>
    </nav>
    <br>

  <div class="row">
  <div class="'col-md-10">
  <div class="col-md-1"></div>
    <div class="col-md-10" id="tableMember">
    <div class="table-responsive">
    <center id="tulisanTable">List Iklan</center><br>
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>Judul</th>
          <th>Foto_Iklan</th>
          <th>Harga</th> 
          <th>Deskripsi</th>    
          <th>Jumlah</th>
          <th>Status</th>      
          <th>Ubah Status</th>
          <th>Edit</th>
          <th>Delete</th>           
        </tr>
      </thead>

      <?php foreach ($data as $iklan): ?>
      <tbody>
        <tr>
          <td><?php echo $iklan->judul; ?></td>
          <td><a href="<?php base_url('uploads/').$iklan->foto_iklan; ?>"><?php echo $iklan->foto_iklan; ?></a></td>
          <td>Rp.<?php echo $iklan->harga; ?></td>
          <td><?php echo $iklan->deskripsi; ?></td>
          <td><?php echo $iklan->jumlah; ?></td>
          <td><?php echo $iklan->status_verifikasi; ?></td>
          <td>
            <a href="<?php echo base_url('index.php/DashboardAdmin/verifikasi/'.$iklan->iklan_id); ?>"><button class="btn btn-default" type="submit" id="verified">verified</button></a>
            <a href="<?php echo base_url('index.php/DashboardAdmin/unverifikasi/'.$iklan->iklan_id) ?>"><button class="btn btn-default" type="submit" id="unverified">unverified</button></a>
          </td>
          <td><a href="<?php echo base_url('index.php/DashboardAdmin/editIklan/'.$iklan->iklan_id); ?>"><button class="btn btn-default" type="submit" id="edit">edit</button></a></td>
          <td><a href="<?php echo base_url('index.php/DashboardAdmin/deleteIklan/'.$iklan->iklan_id) ?>"><button class="btn btn-default" type="submit" id="delete">delete</button></a></td>
        </tr>
      </tbody>
      <?php endforeach ?>

    </table>
  </div>
  </div>
  </div>
  </div>


      </div>
      </div>



      </body>
      </html>