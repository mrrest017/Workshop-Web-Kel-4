<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: ../index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
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
							<li class="nav-item submenu dropdown">
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
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Info</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="pengumuman2.php">Pengumuman</a></li>
									<li class="nav-item"><a class="nav-link" href="berita2.php">Berita</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="../admin/akademik.php">Prestasi</a></li>
							<li class="nav-item"><a class="nav-link" href="../admin/walikelas.php">Wali Kelas</a></li>
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
	<!--================ End Header Menu Area =================-->

	<!--================ Start Events Area =================-->
	<div class="popular_courses lite_bg">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="main_title">
                        <a href="#"><h2>Berita</h2></a>
                        <div class="button-group-area mt-10">
                            <a href="tambah-berita.php"><button class="btn btn-success">Tambah Berita</button></a>
                        </div>
                    </div>
                </div>
			</div>
			<div class="row">
                <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"select * from tb_berita");
                    while($d = mysqli_fetch_array($data)){
                ?>
				<!-- single course -->
				<div class="col-lg-3 col-md-6">
					<div class="single_course">
                        <div class="course_head overlay">
							<img class="img-fluid w-100" src="<?php echo "".$d['foto']; ?>" alt="">
						</div>
						<div class="course_content">
							<h4>
								<a href="lihatberita2.php?id_berita=<?php echo $d['id_berita']; ?>"><?php echo $d['judul']?></a>
							</h4>
						</div>
					</div>
				</div>
				<a href="hapus-berita.php?id_berita=<?php echo $d['id_berita'];?>" onClick="return confirm('Hapus Berita?')"><button class="btn btn-danger">Hapus</button></a>
                <?php
                    }
                ?>
			</div>
		</div>
	</div>
	<!--================ End Events Area =================-->

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
	<script src="js/countdown.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>