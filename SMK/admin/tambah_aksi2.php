<?php 
// koneksi database
include 'koneksi.php';

$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];
$status = $_POST['jabatan'];
$ceknis = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE nip='$nip'"));
if($ceknis > 0){
    echo "<script>alert('NIP Sudah Digunakan');document.location.href='../admin/tambah-guru.php'</script>";
}else{
    mysqli_query($koneksi,"insert into tb_guru values('','$nip','$nama','$jk','$tmptlahir','$tgllahir','$agama','$alamat','$telp','$status','$nip','$nip')");
    echo "<script>alert('Data berhasil diupload');document.location.href='../admin/guru2.php'</script>";
}
?>