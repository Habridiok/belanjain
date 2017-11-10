    <div class="row">
   <div class="col-md-2">
    <h4>
      <table class="table">
      <thead>
        <tr>
            <th id="table_kategori">Kategori</th>
        </tr>
        </thead>      
        </table></h4>
        <table class="table table" id="table_kategori_border">
        <tbody>
          <tr>
            <td><a href="<?php echo base_url('index.php/iklan/iklankategori/accessories'); ?>">Accessories</a></td>
          </tr>
          <tr>
            <td><a href="<?php echo base_url('index.php/iklan/iklankategori/baju'); ?>">Baju</a></td>
          </tr>
          <tr>
            <td><a href="<?php echo base_url('index.php/iklan/iklankategori/bawahan'); ?>">Bawahan</a></td>
          </tr>
          <tr>
            <td><a href="<?php echo base_url('index.php/iklan/iklankategori/dress'); ?>">Dress</a></td>
          </tr>
          <tr>
            <td><a href="<?php echo base_url('index.php/iklan/iklankategori/jaket'); ?>">Jaket</a></td>
          </tr>
          <tr>
            <td><a href="<?php echo base_url('index.php/iklan/iklankategori/sepatu'); ?>">Sepatu</a></td>
          </tr>
          <tr>
            <td><a href="<?php echo base_url('index.php/iklan/iklankategori/tas'); ?>">tas</a></td>
          </tr>
        </tbody>
      </table>
    </div>

      <div class="col-md-10">
      <div class="row">


        <?php foreach ($data as $iklan): ?>
      <div class="col-md-2">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th><img src="<?php echo base_url('uploads/'.'iklan/'.$iklan->foto_iklan) ?>" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
            </tr>            
          </thead>
         <tbody>
          <tr>
            <td>
            <div class="detail" id="judul_barang">
              <span class="detail_name"><?php echo $iklan->judul ?> </span></div>
               <div id="harga">
                <span  class="glyphicon glyphicon-tag">IDR.<?php echo $iklan->harga ?>,00</span>
               </div>
               <div id=jumlah>
                 <spanc class="detail_name">Tersedia = <?php echo $iklan->jumlah ?> buah</span>
               </div>
            <div><a href="<?php echo base_url('index.php/iklan/single/'.$iklan->iklan_id); ?>">
              <span class="see_more">See More...</span></a></div>
          <tr>
          <td id="penjual">
            <span class="glyphicon glyphicon-sort-by-order"></span> BELANJA.in<br>Indonesia 
          </td>
        </tr>
      </div>    
          </td>
          </tr>
         </tbody>
        </table>
      </div>
        <?php endforeach ?>     
      </div>
    </div>      



    <!--Pagination (buat pindah halaman)-->
  <div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-4" align="center">
    <nav aria-label="Page navigation">
        <ul class="pagination">
          <li>
              <a href="#" id="pagination" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
          </li>
            <li><a href="#" id="pagination">1</a></li>
            <li><a href="#" id="pagination">2</a></li>
            <li><a href="#" id="pagination">3</a></li>
            <li><a href="#" id="pagination">4</a></li>
            <li><a href="#" id="pagination">5</a></li>
          <li>
              <a href="#" id="pagination" aria-label="Next">
                <span aria-hidden="true">&raquo;
                </span>
              </a>
          </li>
        </ul>
    </nav>
    </div>
  </div>



</div>