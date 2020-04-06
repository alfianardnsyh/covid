<?php
	session_start();
	
	include("lib/koneksi.php");
	include("lib/fungsi_tglindonesia.php");
	define("INDEX",true);
?>

<html>
	<head>
		<title>CoronaVirus</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="css/style.css">
		
		<script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
	</head>
	<body>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

		<header id="header"> 

			<center> <h2><font color="white">WEBISTE SEPUTAR VIRUS COVID-19</font></h2>
			</center>

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="gambar/galeri/tampil1.png" style="display: block; margin: auto;" alt="1">
      <center><h5><font color="white">TEPAT</font></h5></center>
    </div>

    <div class="item">
      <img src="gambar/galeri/tampil2.png" style="display: block; margin: auto;" alt="2">
      <center><h5><font color="white">AKURAT</font></h5></center>
    </div>

    <div class="item">
      <img src="gambar/galeri/tampil3.png" style="display: block; margin: auto;" alt="3">
      <center><h5><font color="white">TERPERCAYA</font></h5></center>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		</header>		
			
		<nav id="menu"> 	
			<div class="container">
				<div class="row">
					<div class="col-md-12"><?php include("menu.php"); ?> </div>
				</div>
			</div>
		</nav>			
			
		<content id="content">
			<div class="container">
				<div class="row">
					<div class="col-md-8"><?php include("konten.php"); ?> </div>
					<div class="col-md-4"> <?php include("sidebar.php"); ?> </div>
						
				</div>
			</div>
		</content>

		<div>
        <h2>Apa itu COVID-19</h2>
           <img src="gambar/galeri/artikel1.png" weight="200" height="150">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum aspernatur maxime officiis voluptates iusto magni facere nostrum, reprehenderit commodi qui. Similique voluptas blanditiis consequatur cupiditate, nihil voluptate perspiciatis mollitia?
        </p>
        <a href="#">Selengkapnya</a>
    </div>	
			
		<footer id="footer"> 
			<div class="container">
				<div class="row">
					<div class="col-md-12"> <p align="center"></p> </div>
				</div>
			</div>
		</footer>
		
		
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
