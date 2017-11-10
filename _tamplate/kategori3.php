<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="cssnya_template.css">


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>

<!-- Navbar Atas-->
<div class="container">
<nav class="navbar navbar-default">
 <div class="container-fluid" id="navbar">
  <div class="row">

      <div class="col-md-2">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" id="dagangin"><img src="cis.png">
            </a> 
          </div>
        </div>
        

    <div class="col-md-2">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sudahLogin.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      </ul>
    </div>

     <div class="col-md-4">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
           <input type="text" class="form-control" placeholder="Search">
          </div>
            <button type="submit" class="btn btn-default" id="search">
             <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </button>
        </form>
     </div>

    <div class="col-md-4">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
         <li class="dropdown">
          <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="dropdown_navbar">
            <img src="a.png" alt="..." class="img-circle"><span class="caret"></span></a>
              <ul class="dropdown-menu" id="isi_dropdown">
                <li class="dropdown-header">Kategori</li>
                <li><a href="kategori1.php">Pakaian Wanita</a></li>
                <li><a href="kategori2.php">Pakaian Pria</a></li>
                <li><a href="kategori3.php" id="k1">Celana</a></li>
                <li><a href="kategori4.php">Rok</a></li>
                <li><a href="kategori5.php">Pakaian Muslim</a></li>
              </ul>
         </li>
        <li><a href="sudahLogin.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
 </div>
</nav>


    <!-- list Barang Dagangan -->
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
            <td><a href="kategori1.php" id="kategori_a">Pakaian Wanita</a></td>
          </tr>
          <tr>
            <td><a href="kategori2.php" id="kategori_a">Pakaian Pria</a></td>
          </tr>
          <tr>
            <td><a href="kategori3.php" id="k1">Celana</a></td>
          </tr>
          <tr>
            <td><a href="kategori4.php" id="kategori_a">Rok</a></td>
          </tr>
          <tr>
            <td><a href="kategori5.php" id="kategori_a">Pakaian Muslim</a></td>
          </tr>
        </tbody>
      </table>
    </div>
      <div class="col-md-2" align="center">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
            </tr>
            
          </thead>
         <tbody>
          <tr>
            <td>
            <div class="detail"id="judul_barang">
        <span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

        <div id="harga">
          <span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
        </div>

        <div><a href="#">
          <span class="see_more">See More...</span>
        </a></div>

        <tr>
          <td id="penjual">
            <span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion, Surabaya
          </td>
        </tr>

      </div>    
          
          </tr>
         </tbody>
        </table>
       
      </div>

        <div class="col-md-2" align="center">
          
          <table class="table table-bordered">
            <thead>
            <tr>
              <th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
            </tr>
            
          </thead>
         <tbody>
              <tr>
            <td>
            <div class="detail"id="judul_barang">
        <span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

        <div id="harga">
          <span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
        </div>
        <div><a href="#">
          <span class="see_more">See More...</span>
        </a></div>

        <tr>
          <td id="penjual">
            <span class="glyphicon glyphicon-sort-by-order"></span>Elenna Fashion<br> Surabaya
          </td>
        </tr>

      </div>    
          
          </tr>
            </tbody>
          </table>
         
      </div>

      <div class="col-md-2" align="center">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
            </tr>
            
          </thead>
         <tbody>
          <tr>
            <td>
            <div class="detail"id="judul_barang">
        <span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

        <div id="harga">
          <span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
        </div>

        <div><a href="#">
          <span class="see_more">See More...</span>
        </a></div>

        <tr>
          <td id="penjual">
            <span class="glyphicon glyphicon-sort-by-order"></span> Elenna Fashion, Surabaya
          </td>
        </tr>

      </div>    
          
          </tr>
         </tbody>
        </table>
       
      </div>

      <div class="col-md-2" align="center">
          
          <table class="table table-bordered">
            <thead>
            <tr>
              <th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
            </tr>
            
          </thead>
         <tbody>
              <tr>
            <td>
            <div class="detail"id="judul_barang">
        <span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

        <div id="harga">
          <span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
        </div>
        <div><a href="#">
          <span class="see_more">See More...</span>
        </a></div>

        <tr>
          <td id="penjual">
            <span class="glyphicon glyphicon-sort-by-order"></span>Elenna Fashion<br> Surabaya
          </td>
        </tr>

      </div>    
          
          </tr>
            </tbody>
          </table>
         
      </div>


      <div class="col-md-2" align="center">
          
          <table class="table table-bordered">
            <thead>
            <tr>
              <th><img src="baju1.jpg" class="img-thumbnail" alt="Gambar" width="304" height="236"></th>
            </tr>
            
          </thead>
         <tbody>
              <tr>
            <td>
            <div class="detail"id="judul_barang">
        <span class="detail_name">Kaos Biru dengan gambar Hitam simple </span></div>

        <div id="harga">
          <span  class="glyphicon glyphicon-tag">Rp.15.000,00</span>
        </div>
        <div><a href="#">
          <span class="see_more">See More...</span>
        </a></div>

        <tr>
          <td id="penjual">
            <span class="glyphicon glyphicon-sort-by-order"></span>Elenna Fashion<br> Surabaya
          </td>
        </tr>  
          
          </tr>
            </tbody>
          </table>
         
      </div>

      
  </div>
</div>
</div>

    <!--Pagination (buat pindah halaman)-->
  <div class="container">
    <div class="col-md-5"></div>
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

<div class="container">
<div class="row" id="navbar_bawah"></div>
<nav class="navbar navbar-default">
  <div class="container-fluid" id="navbar2" >
  <div class="row">
      <div class="col-md-3">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" id="copyright"><span class="glyphicon glyphicon-copyright-mark"></span>belanja.in 2017
            </a> 
          </div>
        </div>

        
    </div>
    </div>
    
 </nav>
 </div>


</div>

</body>
</html>
