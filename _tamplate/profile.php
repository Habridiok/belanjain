<!DOCTYPE html>
<html lang="en">
    <head>

        <!--  jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

        <!-- Bootstrap Date-Picker Plugin -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
        <link rel="stylesheet" type="text/css" href="cssnya_template.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                var date_input = $('input[name="date"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                var options = {
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                };
                date_input.datepicker(options);
            })
        </script>

    </head>
    <body>
        
            <nav class="navbar navbar-default" id="navbar">
            <div class="container">
		       <div class="container-fluid">
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

    <!-- KATEGORI -->
    <div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <h4>
                    <table class="table">
                        <img src="carad.jpg" class="img-circle" alt="Cara Delevingne" width="100" height="100"> 			
                    </table></h4>
                <table class="table table" id="table_kategori_border">
                    <tbody>
                        <tr>
                            <td><a href="#" id="kategori_a">Belanjaanku</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" id="kategori_a">Jualanku</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" id="kategori_a">Edit Profile</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                        <div class="col-md-6">

                <form class="form-horizontal">
                	<div class="form-group">
    				<label class="control-label col-sm-4" for="exampleInputFile">
    				Edit Photo Profile</label>
    					<input type="file" id="exampleInputFile">
  				</div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="name">Full name:</label>
                        <div class="col-sm-8">
                            <input type="name" class="form-control" id="name" placeholder="Full name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Phone:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="Phone" placeholder="Phone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="pwd">Birthday:</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                        </div>
                    </div>
                </form>
                <br>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                </div>
                </form> 
            </div>
            </div>
            </div>
            </div>


