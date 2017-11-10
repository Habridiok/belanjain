		<div class="col-md-15">
                     <form enctype="multipart/form-data" class="form-horizontal" action="<?php echo base_url('index.php/Home/c_editProfile'); ?>" method=POST>
                        
                        <div class="form-group">
                        <label class="control-label col-sm-3" for="exampleInputFile">Edit Photo Profile</label>
                            <input type="file" id="exampleInputFile" name="foto_profil" value="<?php echo $data_login['foto_profil']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="exampleInputEmail1">Full name:</label>
                            <div class="col-sm-4">
                                <input type="name" class="form-control" name="nama" value="<?php echo $data_login['nama']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="exampleInputEmail1">Tanggal Lahir:</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="tanggal_lahir" value="<?php echo $data_login['tanggal_lahir']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="exampleInputEmail1">Email:</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="email" value="<?php echo $data->email; ?>">
                            </div>
                        </div>
                
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="exampleInputEmail1">Nomor HP::</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="no_hp" value="<?php echo $data->no_hp; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="exampleInputEmail1">Password:</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda Disini Sebelum Menyimpan">
                            </div>
                        </div>

                        <input type="hidden" name="user_id" value="<?php echo $data_login['user_id']; ?>">
                         <br>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-10">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                </form>
        </div>