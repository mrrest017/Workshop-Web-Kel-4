<!DOCTYPE html>
<html>

<head>
    <title>Portofolio Of Mine</title>
</head>

<body>
    <h1 style="color:red">Selamat Belajar HTML</h1>
    <h2 style="color:blue">Nama Saya, Rizki Widya Pratama</h2>
    <h3>Politeknik Negeri Jember</h3>
    <button><a href="html2.html">Tugas 2</a></button><br /><br /><br /><br />
    <?php
    echo "Changed To PHP </br></br>";
    $tempat = "di Polije";
    $Tempat = "di Polije Kampus Bondowoso";
    $TempaT = "di Polije Kampus Impian";

    echo "<h1 style='color:red'>Selamat Belajar HTML " . $tempat . "</h1>";
    echo "<h2 style='color:blue'>Selamat Belajar HTML</h2>";
    echo "<h3>Selamat Belajar HTML " . $Tempat . "</h3>";
    echo $TempaT . "</br></br>";
    echo date("Y/m/d") . "</br></br>";

    //Penjumlahan
    $a = 10;
    $b = $c = 20;
    $d = 2;
    $jumlah = ($a + $b) / $d;

    echo $jumlah . "</br></br>";

    for ($x = 0; $x <= 10; $x++) {
        echo "Tempat Ke - " . $x . "<br>";
    }

    $t = date("H");

    if ($t < "20") {
        echo "Selamat Pagi!";
    }

    //Konstanta
    define("Khafid", "Selamat datang di Polije!");
    echo "</br></br>" . Khafid;

    //Fungsi
    function khafid()
    {
        echo "</br></br>" . Khafid . " Dua";
    }

    khafid();

    ?>
</body>

</html>