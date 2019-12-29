<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logosmk.png" type="image/png">
    <title>SMK Darus Salam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Cari">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Tutup"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo2.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="../admin/aturdata.php">KEMBALI</a></li>
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Data</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="siswa2.php">Siswa</a></li>
									<li class="nav-item"><a class="nav-link" href="guru2.php">Guru</a></li>
									<li class="nav-item"><a class="nav-link" href="karyawan2.php">Karyawan</a></li>
									<li class="nav-item"><a class="nav-link" href="tampilcalonsiswa.php">Siswa Baru</a></li>
									<li class="nav-item"><a class="nav-link" href="jadwal.php">Jadwal</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Kehadiran</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="absensi.php">Daftar Hadir</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Galeri</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="photo2.php">Foto</a></li>
									<li class="nav-item"><a class="nav-link" href="video2.php">Video</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Info</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="pengumuman2.php">Pengumuman</a></li>
									<li class="nav-item"><a class="nav-link" href="berita2.php">Berita</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Prestasi</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="akademik2.php">Akademik</a></li>
									<li class="nav-item"><a class="nav-link" href="nonakademik2.php">Non - Akademik</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">ADMIN</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <!--================End Home Banner Area =================-->


	<!-- Start Sample Area -->
	<!-- End Sample Area -->
	<!-- Start Button -->
	<!-- End Button -->
    <!-- Start Align Area -->
    <div class="whole-wrap">
		<div class="container">
			<br><br>
				<h3 class="mb-30 title_color"><center>Form Guru</center></h3>
				<div class="row">
					<?php
                        include 'koneksi.php';
                        $id= $_GET['id_jadwal'];
                        $data = mysqli_query($koneksi,"select * from tb_jadwal where id_jadwal='$id'");
                        while($d = mysqli_fetch_array($data)){
                        ?>
				
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
						<input type="hidden" name="id" readonly value="<?php echo $d['id_siswa'] ?>" class="form-control">
					<label>Kelas</label><br>
							<select name="kelas" required>  
								<option value="" disabled>Kelas</option>  
								<?php
									$jk = $d['kelas'];
									if ($jk=="X") echo "<option value = 'X' selected>X</option>";
									else echo "<option value = 'X'>X</option>";
									if ($jk=="XI") echo "<option value = 'XI' selected>XI</option>";
									else echo "<option value = 'XI'>XI</option>";
									if ($jk=="XII") echo "<option value = 'XII' selected>XII</option>";
									else echo "<option value = 'XII'>XII</option>";
								?>
							</select><br><br>
							<label>Jenis Kelamin</label><br>
							<select name="jk" required>  
								<?php
									$jk = $d['jk_siswa'];
									if ($jk=="Laki - Laki") echo "<option value = 'Laki - Laki' selected>Laki - Laki</option>";
									else echo "<option value = 'Laki - Laki'>Laki - Laki</option>";
									if ($jk=="Perempuan") echo "<option value = 'Perempuan' selected>Perempuan</option>";
									else echo "<option value = 'Perempuan'>Perempuan</option>";
								?>
							</select><br><br>
							<label>Agama</label><br>
							<select name="agama" required>  
								<?php
									$agama = $d['agama_siswa'];
									if ($agama=="Islam") echo "<option value = 'Islam' selected>Islam</option>";
									else echo "<option value = 'Islam'>Islam</option>";
									if ($agama=="Kristen") echo "<option value = 'Kristen' selected>Kristen</option>";
									else echo "<option value = 'Kristen'>Kristen</option>";
									if ($agama=="Hindu") echo "<option value = 'Hindu' selected>Hindu</option>";
									else echo "<option value = 'Hindu'>Hindu</option>";
									if ($agama=="Budha") echo "<option value = 'Budha' selected>Budha</option>";
									else echo "<option value = 'Budha'>Budha</option>";
									if ($agama=="Katolik") echo "<option value = 'Katolik' selected>Katolik</option>";
									else echo "<option value = 'Katolik'>Katolik</option>";
								?>
							</select><br><br>
							
							<br><br>
							<button class="btn btn-primary" type="submit">Simpan</button>
							</form>
						</div>	
					</div>
					<?php 
                    }
                    ?>
				</div>
		</div>
	</div>
			
						
	<!-- End Align Area -->

	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<font size="3" color="#333333">&copy;2019 || SMK DARUS SALAM<br>All Rights Reserved<br>Powered by Kelompok 4</font>
					</div>
				</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
	
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
		<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="js/owl-carousel-thumb.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="vendors/counter-up/jquery.counterup.js"></script>
		<script src="js/mail-script.js"></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/theme.js"></script>
	</body>
	<script>
	function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
		
		return false;
		return true;
	}

	(function() {
		var _show = function( element, field ) {
			this.element = element;
			this.field = field;
			this.toggle();    
		};
	_show.prototype = {
		toggle: function() {
			var self = this;
			self.element.addEventListener( "change", function() {
			if( self.element.checked ) {
			self.field.setAttribute( "type", "text" );
			} else {
			self.field.setAttribute( "type", "password" );    
			}
			}, false);
		}
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		var checkbox = document.querySelector( "#show-pass" ),
		pass = document.querySelector( "#pass" ),
		_form = document.querySelector( "form" );
		var toggler = new _show( checkbox, pass );
	});
	})();
	</script>
	</html>