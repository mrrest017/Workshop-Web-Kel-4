<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis"></td>
            </tr>
            <tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jk"></td>
            </tr>
            <tr>
				<td>Agama</td>
				<td><input type="text" name="agama"></td>
            </tr>
            <tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tmptlahir"></td>
            </tr>
            <tr>
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tgllahir"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
            </tr>
            <tr>
				<td>No. Telp</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>