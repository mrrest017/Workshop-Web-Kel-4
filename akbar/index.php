<html>
    <head>
</head>
<title>Index</title>
<body>
<form method="get" action="tampil.php">
<label><h1>Masukkan Nama Team</label><br/></h1>
	<input type="text"required placeholder="masukkan nama team" name="nama_team"><br/>
	<h1><label>Masukkan Bracket</label><br/></h1>
	<input type="text" required placeholder="Masukkan bracket" name="bracket"><br/><br>	
    <input type="submit" value="lihat data sementara" width="450">

</form>
</body>
<?php
echo "<br>";
echo "<br>";
  include('while.php');
  echo "<br>";
  require('array.php');
  ?>
    </html>