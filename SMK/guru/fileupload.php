<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nama_karyawan = $_POST['nama_karyawan'];
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
 $targetfolder = "pdf/";
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
$b=$_FILES['file']['name'];
$file_type=$_FILES['file']['type'];
if ($file_type=="application/pdf") {
 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
$query = mysqli_query($koneksi,"INSERT INTO `tb_materi` VALUES('','$nama','$nama_karyawan','$jurusan','$kelas', '$b')");
 echo "<script>alert('File $b  berhasil di Upload!');location='inputmateri.php';</script>";
 //Jalankan perintah insert ke database
 }
 else {
 echo "<script>alert('File $b  Gagal di Upload!');location='inputmateri.php';</script>";
 }
}
else {
 echo "<script>alert('Hanya Boleh upload PDF');location='inputmateri.php';</script>";
}
?>