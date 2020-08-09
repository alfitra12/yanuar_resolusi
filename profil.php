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
.style2 {color: #FFFFFF}
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
                        <span class="icon-bar"></span>                    </button>
                   <div class="navbar-brand">
              <a href="index.php"><img src="img/logo.jpeg" alt="50" width="80" height="60" /></a>          </div>
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
  </header>
  <span class="style2">
  <!--/header--> 
  </span>
  <div class="container">
    <div class="row">
          <h3 align="center" class="style2" style="background-color:#CCCC00"><b>GAMBAR ORGANISASI & SEJARAH</b></h3>
          <?php $ambil = $koneksi->query("SELECT * FROM tb_profil"); ?>
          <?php while ($pilih = $ambil->fetch_assoc()) 
          { ?>
          <div class="col-sm-6">
          <h2 align="center" class="style1">Gambar Struktur Orgabisasi</h2>
      <img src="foto/<?php echo $pilih['foto']; ?>" alt="" width="502" class="img-responsive pull-left" /></div> 
      <div class="col-lg-6">
        <h1 align="center" class="style1">SEJARAH SINGKAT </h1>
        <div align="center">
          <table>
            <thead>
              <tr>
                <H4 align="justify"><?php echo $pilih['sejarah']; ?></h4>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
      <b><h3 align="center" class="style2" style="background-color:#CCCC00">VISI DAN MISI </h3></b>
  
    <h1 align="center" class="style1" >visi </h1>
        <h4 align="justify" class="style1"><?php echo $pilih['visi']; ?></h4><br><br>
      <h1 align="center" class="style1" >misi</h1>
      <tr>
        <h4 align="justify"><?php echo $pilih['misi']; ?></h4>
      </tr>
     
      <?php } ?>
  </div>
    </div>
    <br>
    <br>
          
  
  <footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>About Us</h4>
        <p>Day is tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters.</p>           
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>Suite 54 Elizebth Street, Victoria State Newyork, USA </li>
            <li><i class="fa fa-phone fa"></i> +38 000 129900</li>
            <li><i class="fa fa-envelope fa"></i> info@domain.net</li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">       
        <div class="text-center">
          <h4>Photo Gallery</h4>
          <ul class="sidebar-gallery">
            <li><a href="#"><img src="img/logo.jpeg" alt="" /></a></li>
            <li><a href="#"><img src="img/logo.jpeg" alt="" /></a></li>
            <li><a href="#"><img src="img/logo.jpeg" alt="" /></a></li>
            <li><a href="#"><img src="img/logo.jpeg" alt="" /></a></li>
            <li><a href="#"><img src="img/logo.jpeg" alt="" /></a></li>
            <li><a href="#"><img src="img/logo.jpeg" alt="" /></a></li>          
          </ul>
        </div>
      </div>
      
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">       
        <div class="">
          <h4>Newsletter Registration</h4>
          <p>Subscribe today to receive the latest Day news via email. You may unsubscribe from this service at any time</p>
          <div class="btn-gamp">    
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
          </div>
          <div class="btn-gamp">
            <a type="submit" class="btn btn-default">Subscribe</a>          </div>
      </div>
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
          &copy; Sistem informasi hajj 2020 by <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Bootstrap Themes</a>.All Rights Reserved.        </div>
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
  
    } ) 
    .init();
  </script> 
  </body>
</html>