<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Halaman Web</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
<!--
.style1 {color: #000000}
-->
    </style>
</head>
  <body>	
	<header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div class="navbar-brand">
						<a href="index.php"><img src="img/logo.jpeg" alt="50" width="80" height="60" /></a>
					</div>
                </div>				
                <div class="navbar-collapse collapse">							
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="index.php">HOME</a></li>
							<li role="presentation"><a href="profil.php">PROFIL</a></li>
              				<li role="presentation"><a href="siswa.php" >DATA SISWA</a></li>
             				<li role="presentation"><a href="daftaruser.php" >DAFTAR USER</a></li>
              				<li role="presentation"><a href="galleri.php">GALLERI</a></li>
             				<li role="presentation"><a href="kontak.php">KONTAK</a></li>					
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	
	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">						
						<div align="center"><img src="img/home.jpg" class="img-responsive" alt=""> 
					  </div>
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								
								</form>
							</div>
						</div>
			      </div>
			
				    <div class="item">
						<img src="img/slider.JPG" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">								
								
								</form>
							</div>
						</div>
				    </div> 
				    <div class="item">
						<img src="img/kantor.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">								
									
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								
							</div>
						</div>
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>

		
	
	



	<div class="about">
		<div class="container">
			<div class="text-center">
				 <?php $ambil = $koneksi->query("SELECT * FROM tb_home"); ?>
          <?php while ($pilih = $ambil->fetch_assoc()) 
          { ?>

          	<h1 align="center" class="style1" >SELAMAT DATANG DI WEB</h1><br>
        <h4 align="justify" class="style1"><?php echo $pilih['pembuka']; ?></h4><br>
     
      <tr>
        <h4 align="justify"><?php echo $pilih['penutup']; ?></h4>
      </tr>
     
      <?php } ?>
  </div>
    </div>
    <br>
    
				
				</div>
		</div></div>
	</div>
	
	
	</footer>
	
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>	
				</div>
			</div>
			
			<div class="col-md-4 col-md-offset-4">
				<div class="copyright">
					&copy; Day 2015 by <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Bootstrap Themes</a>.All Rights Reserved.
				</div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Day
                -->
			</div>						
		</div>				
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>