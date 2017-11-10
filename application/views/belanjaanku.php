<div class="container">          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id pesanan</th>
        <th>Nama Barang</th>
        <th>Kuantitas</th>
        <th>Total Harga</th>
      </tr>
    </thead>
    <?php if ($data_iklan!=null) { ?>
    <?php for ($i=0; $i < $batas ; $i++) { ?>
    <tbody>
      <tr>
        <td>BLNJ.IN.1239.<?php echo $data[$i]->pemesanan_id; ?></td>
        <td><?php echo $data_iklan[$i]->judul; ?></td>
        <td><?php echo $data[$i]->jumlah_pemesanan; ?> Buah</td>
        <td>Rp.<?php $total = $data[$i]->jumlah_pemesanan * $data_iklan[$i]->harga; echo $total; ?></td>
      </tr>
    </tbody>
    <?php } ?>
    <?php } ?>

  </table>
</div>