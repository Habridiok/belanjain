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
      	

    <div class="col-md-3">
      <ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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

		<div class="col-md-3">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>
         <li class="dropdown">
          <a href="#" class="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="dropdown_navbar">
            <img src="<?php  ?>" alt="..." class="img-circle"><span class="caret"></span></a>
              <ul class="dropdown-menu" id="isi_dropdown">
                <li class="dropdown-header">Kategori</li>
                <li><a href="#">Pakaian Wanita</a></li>
                <li><a href="#">Pakaian Pria</a></li>
                <li><a href="#">Sempak</a></li>
              </ul>
         </li>
				<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
  </div>
 </div>
 </div>
</nav>
</body>
</html>