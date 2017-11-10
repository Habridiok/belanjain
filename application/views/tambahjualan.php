<div class="col-md-15">
<div class = "container">   

        <?php if ($edit == 'no'): ?>
        <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url('index.php/c_DashboardAdmin/c_editIklan'); ?>" method=POST>
            
            <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control"  name="judul" placeholder="judul" required><br>
                    
            <div class="form-group">
                <label for="exampleInputFile">Tambah Foto Barang</label>
                        <input type="file"  name="foto_iklan" id="foto_iklan"></div>
        <?php endif ?>

        <?php if ($edit == 'yes'): ?>
         <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url('index.php/dashboardadmin/c_editiklan'); ?>" method=POST>
            
            <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" value="<?php echo $data->judul; ?>" class="form-control"  name="judul" placeholder="judul" required><br>
        <?php endif ?>    

            <div class="form-group">
                <label for="exampleInputEmail1"><br>Kategori</label>
                    <input type="text" class="form-control"  name="kategori" placeholder="EX: baju, accessories, bawahan, dress, jaket, sepatu, tas"<?php if ($edit == 'yes'): ?> value="<?php echo $data->kategori; ?>"<?php endif ?>
                    <?php if ($edit == 'no'): ?><?php endif ?> required></div>

            <div class="form-group">
                <label for="exampleInputEmail1"><br>Jumlah</label>
                    <input type="text" class="form-control"  name="jumlah" placeholder="jumlah" <?php if ($edit == 'yes'): ?> value="<?php echo $data->jumlah; ?>"<?php endif ?>
                    <?php if ($edit == 'no'): ?><?php endif ?> required></div>

            <?php if ($edit == 'yes'): ?>
            <div class="form-group">
                <label for="exampleInputEmail1"><br>Harga</label>
                    <input type="text" class="form-control"  name="harga" placeholder="harga" <?php if ($edit == 'yes'): ?> value="<?php echo $data->harga; ?>"<?php endif ?>
                        <?php if ($edit == 'no'): ?><?php endif ?> required></div>
                            <?php endif ?>

            <?php if ($edit == 'no'): ?>
            <div class="form-group">
                <label >Deskripsi:</label>
                    <textarea class="form-control" name="deskripsi" <?php if ($edit == 'yes'): ?> placeholder="<?php echo $data->deskripsi; ?>"<?php endif ?><?php if ($edit == 'no'): ?> placeholder="Deskripsi Barang Jualan" <?php endif ?> ></textarea></div>
            <?php endif ?>

            <?php if ($edit == 'yes'): ?>
                    <input type="hidden" name="iklan_id" value="<?php   echo $data->iklan_id ?>">

            <?php endif ?>

            <div class="button_daftar">
                <table><td><button type="submit" class="btn btn-default" id="daftar">edit Iklan</button></td></table><div>
        </form>
</div>
<br>    