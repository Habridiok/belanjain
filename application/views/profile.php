        <div class="col-md-15">

                <form class="form-horizontal">
<!--                     <div class="form-group">
                         <br><img src="<?php echo base_url('uploads/'.'profil/'.$data->foto_profil) ?>" class="img-circle" alt="" width="100" height="100"> 
                    </div> -->
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="name">Full name:</label>
                        <div class="col-sm-4"><?php echo $data->nama; ?></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Email:</label>
                        <div class="col-sm-4"><?php echo $data->email; ?></div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Phone:</label>
                        <div class="col-sm-4"><?php echo $data->no_hp; ?></div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Birthday:</label>
                        <div class="col-sm-4"><?php echo $data->tanggal_lahir; ?>
                            <!-- input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Jumlah Iklan:</label>
                        <div class="col-sm-4"><?php echo $jumlah_iklan ?>
                        </div>
                    </div>
                </form>
                <br>
        </div>