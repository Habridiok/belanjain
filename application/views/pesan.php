  <div class="row">
  <div class="'col-md-10">
  <div class="col-md-1"></div>
    <div class="col-md-10" id="tableMember">
    <div class="table-responsive">
    <center id="tulisanTable">List Pesan</center><br>
      <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th>Pesan Dari</th>
          <th>Isi Pesan</th>
          <th>Diterima Pada</th>
          <th>Balas</th>              
        </tr>
      </thead>

      <?php foreach ($data as $pesan): ?>
      <tbody>
        <tr>
          <td><?php echo $pesan->nama; ?></td>
          <td><?php echo $pesan->konten; ?></td>
          <td><?php echo $pesan->created_at ?></td>
          <td>
            <a href="<?php echo base_url('index.php/home/v_boxpesan/'.$pesan->sender_id.'/'.$pesan->pesan_id); ?>"><button class="btn btn-default" type="submit" id="verified">Balas</button></a>
          </td>
        </tr>
      </tbody>
      <?php endforeach ?>

    </table>
  </div>
  </div>
  </div>
  </div>