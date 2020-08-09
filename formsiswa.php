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
	
	 <div class="container">
      <div class="row">
        <div class="col-lg-12 contact_col">
          <div class="contact_form">
            <div class="contact_title style1 style1">Formulir Pendaftaran</div>
            <div class="contact_form_container">
              <form method="post" enctype="multipart/form-data">

    <div class="form-group style1">
    <label>ID Siswa</label>
    <input type="text" class="form-control" name="id_siswa">
  </div>

  <div class="form-group style1">
    <label>FOTO</label>
    <input type="file" class="form-control" name="foto">
  </div>
  
  <div class="form-group style1">
    <label>NAMA </label>
    <input type="text" class="form-control" name="nama">
  </div>

  <div class="form-group style1">
    <label>Tempat Tanggal Lahir</label>
    <input type="text" class="form-control" name="ttl">
  </div>
  
  <div class="form-group style1">
      <label>Jenis Kelamin</label>
                  <select class="form-control" name="kelamin">
                    <option>Pilih</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
    </div>

  <div class="form-group style1">
    <label>umur </label>
    <input type="text" class="form-control" name="umur">
  </div>

  <div class="form-group style1">
    <label>ALAMAT</label>
    <input type="text" class="form-control" name="alamat">
  </div>

  <div class="form-group style1">
    <label>AGAMA</label>
    <select class="form-control" name="agama">
      <option>Pilih</option>
      <option>Islam</option>
      <option>Kristen</option>
      <option>Khatolik</option>
      <option>Hindu</option>
      <option>Budha</option>
    </select>
  </div>

 <div class="form-group style1">
      <label>TGL DAFTAR</label>
        <select class="form-control" name="tgl_daftar">
                    <option>Pilih tgl</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                  </select>
    </div>
  
  
  <button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) 
{
  $nama=$_FILES['foto']['name'];
  $lokasi=$_FILES['foto']['tmp_name'];
  move_uploaded_file($lokasi, "../foto/".$nama);
  
  $koneksi->query("INSERT INTO tb_siswa (nama_foto,id_siswa,nama,ttl,kelamin,umur,alamat,agama,tgl_daftar) VALUES('$nama','$_POST[id_siswa]','$_POST[nama]','$_POST[ttl]','$_POST[kelamin]','$_POST[umur]','$_POST[alamat]','$_POST[agama]','$_POST[tgl_daftar]')");
 echo "<script>alert('Data berhasil di posting');</script>";
  echo "<script>location='siswa.php';</script>";

}
?>

          </div>
        </div>
      </div>
        </div>
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
	
		}	) 
		.init();
	</script>	
  </body>
</html>