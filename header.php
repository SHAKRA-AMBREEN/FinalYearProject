<?php

session_start();

	
include('db.php');

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Test Phase </title>


  
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/js/bootstrap.min.js" rel="stylesheet" type="text/javascript">
  <link href="assets/js/jquery.js" rel="stylesheet" type="text/javascript">
  

  <style>
  body, h1, h2, h3, h4, h5, a {
	  font-family: Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; 
	  color:#fff !important;
	  
  }
  
  body {
	  
	  background: #795548;  
  }

	
	  footer{background-color: #000; padding: 25px; color:#fff;}
       ul, li{list-style-type: none;}
       .list{margin-top: 15px;}
	  footer, a {
		  
		  text-decoration: none !important;
		  color: #fff !important;
	  }
	  
	  
	  .copyright {
		      
		  
   background-color: #000000e3;
    color: #fff;
    padding: 15px;
	  }
	  .section-heading h2{
	text-align:center;
	color:white;
	font-family:Monotype Corsiva;
	
}




  .card-product:after {
    content: "";
    display: table;
    clear: both;
    visibility: hidden; }
  .card-product .price-new, .card-product .price {
    margin-right: 5px; }
  .card-product .price-old {
    color: #999; }
  .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center; }
    .card-product .img-wrap img {
      max-height: 100%;
      max-width: 100%;
      object-fit: cover; }
      
      .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .action-wrap {
    padding-top: 4px;
    margin-top: 4px; }
  .card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee; }
  .card-product .title {
    margin-top: 0; }
	
	
	
	.col-lg-12 {
		
		border:1px solid#fff;
		    padding: 15px;
	}
	
	</style>

</head>

<body>

<div class="container">
			<div class="row">
			<div class="col-lg-12" style="background-color:darkslategrey">
            
			<h2 style="color:#fff; text-align:center">Welcome to Test Phase for Online Car Accessories Shop </h2>
			<marquee>
			<h4 style="color:#fff;">Test Phase Final Year Project CS619 Virtual University of Pakistan</h4></marquee>

</div>
</div>
</div>

			<div class="container">
			<div class="row">
			<div class="col-lg-12">
			
<nav class="navbar navbar-inverse" style="background: darkcyan; margin: 15px;">
  
    <div class="navbar-header">
      <a class="navbar-brand active" href="#">Online Car Accessories Shop</a>
    </div>
   
    <ul class="nav navbar-nav">
		

     <?php 
     if (isset($_SESSION['email'])) {
		echo '
			<li><a href="user_home.php">Home</a></li>
			<li style="float: right;"><a href="logout.php">Logout</a></li>';
      }
	  
	  else {
      
      echo '

     <li><a href="index.php">Home</a></li>
      <li><a href="admin/index.php">Admin Login</a></li>
      <li><a href="register.php">Register</a></li>';
	  }
		 ?>
		 
    </ul>
   
  </div>
</nav>

		</div>
	</div>
</div>

