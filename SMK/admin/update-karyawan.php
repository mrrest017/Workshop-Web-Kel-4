<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];
$pass = $_POST['pass'];
$status = $_POST['jabatan'];

// update data ke database
mysqli_query($koneksi,"update tb_guru set nama_guru='$nama', nip='$nip', jk_guru='$jk', agama_guru='$agama', tmptlahir_guru='$tmptlahir', tgllahir_guru='$tgllahir', alamat_guru='$alamat', telp_guru='$telp', password='$pass', status=$status where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:guru2.php");

?>