<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telefon = $_POST['telefon'];
$tarikh = $_POST['tarikh'];
$jenis = $_POST['jenis_laptop'];
$tempoh = $_POST['tempoh'];
$alasan = $_POST['alasan'];

$spec = "";

if (isset($_POST['spec'])) {
    $spec = implode(", ", $_POST['spec']);
}

$error = "";

if (empty($nama))
    $error .= "Nama tidak boleh kosong<br>";
if (empty($alamat))
    $error .= "Alamat tidak boleh kosong<br>";
if (empty($telefon))
    $error .= "Telefon tidak boleh kosong<br>";
if (empty($tarikh))
    $error .= "Tarikh tidak boleh kosong<br>";
if (empty($jenis))
    $error .= "Sila pilih jenis laptop<br>";
if (empty($tempoh))
    $error .= "Sila pilih tempoh pinjaman<br>";
if (strlen($alasan) < 25)
    $error .= "Alasan mesti sekurang-kurangnya 25 aksara<br>";

?>

<!DOCTYPE html>
<html>

<head>

    <title>Keputusan Permohonan</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">

        <h1 class="title">Keputusan Permohonan</h1>

        <?php

        if ($error != "") {

            echo "<div class='error'>$error</div>";

            echo "<a href='index.php' class='back-btn'>Kembali ke Borang</a>";

        } else {

            echo "<div class='success'>Permohonan berjaya dihantar!</div>";

            echo "<div class='result-box'>";

            echo "<p><b>Nama:</b> $nama</p>";
            echo "<p><b>Alamat:</b> $alamat</p>";
            echo "<p><b>Telefon:</b> $telefon</p>";
            echo "<p><b>Tarikh:</b> $tarikh</p>";
            echo "<p><b>Jenis Laptop:</b> $jenis</p>";
            echo "<p><b>Spesifikasi:</b> $spec</p>";
            echo "<p><b>Tempoh:</b> $tempoh</p>";
            echo "<p><b>Alasan:</b> $alasan</p>";

            echo "</div>";

            echo "<a href='index.php' class='back-btn'>Permohonan Baru</a>";

        }

        ?>

    </div>

</body>

</html>