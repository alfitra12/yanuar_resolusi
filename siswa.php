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
  
  <div class="about">
    <div class="container">
      <div class="text-center">
        <h2>DAFTAR SISWA YANG MENDAFTAR </h2><br>
        
           <table class="table table-bordered">
            <thead>
              <tr>
                <th><div align="center"><span class="style1">No</span></div></th>
               
                <th><div align="center"><span class="style1">Foto</span></div></th>
                <th><div align="center"><span class="style1">ID Siswa</span></div></th>
                <th><div align="center"><span class="style1">Nama</span></div></th>
                <th><div align="center"><span class="style1">TGL</span></div></th>
                <th><div align="center"><span class="style1">Jenis Kelamin</span></div></th>
                <th><div align="center"><span class="style1">Umur</span></div></th>
                <th><div align="center"><span class="style1">Alamat</span></div></th>  
                <th><div align="center"><span class="style1">Agama</span></div></th>  
                <th><div align="center"><span class="style1">TGL Daftar</span></div></th>  
              </tr>
            </thead>
            <tbody>
              
                <tr><?php $nomor=1;?>
  <?php $ambil=$koneksi->query("SELECT * FROM tb_siswa");?>
  <?php while($pecah=$ambil->fetch_assoc()){?>
  <tr>
    <td><span class="style1"><?php echo $nomor;?></span></td>
    <td><img src="foto/<?php echo $pecah ['nama_foto']; ?>" width="100"></td>
    <td><span class="style1"><?php echo $pecah['id_siswa'];?></span></td>
   
    <td><span class="style1"><?php echo $pecah['nama'];?></span></td>
    <td><span class="style1"><?php echo $pecah['ttl'];?></span></td>
    <td><span class="style1"><?php echo $pecah['kelamin'];?></span></td>
    <td><span class="style1"><?php echo $pecah['umur'];?></span></td>
    <td><span class="style1"><?php echo $pecah['alamat'];?></span></td>
    <td><span class="style1"><?php echo $pecah['agama'];?></span></td>
    <td><span class="style1"><?php echo $pecah['tgl_daftar'];?></span></td>
  </tr>
  <?php $nomor++;?>
  <?php } ?>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
          
  
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
            <a type="submit" class="btn btn-default">Subscribe</a>
          </div>
        
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
  
    } ) 
    .init();
  </script> 
  </body>
</html>