<?php
session_start();

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telefon = $_POST['telefon'];
$tarikh = $_POST['tarikh'];
$jenis = $_POST['jenis'];
$tempoh = $_POST['tempoh'] ?? "";
$alasan = $_POST['alasan'];

$spec = "";
if (isset($_POST['spec'])) {
    $spec = implode(", ", $_POST['spec']);
}

$error = "";

if (empty($nama)) {
    $error = "Nama tidak diisi";
} elseif (empty($alamat)) {
    $error = "Alamat tidak diisi";
} elseif (empty($telefon)) {
    $error = "Telefon tidak diisi";
} elseif (empty($tarikh)) {
    $error = "Tarikh tidak diisi";
} elseif (empty($jenis)) {
    $error = "Jenis laptop tidak dipilih";
} elseif (empty($tempoh)) {
    $error = "Tempoh tidak dipilih";
} elseif (strlen($alasan) < 25) {
    $error = "Alasan mesti lebih 25 aksara";
} else {
    $_SESSION['nama'] = $nama;
    $_SESSION['alamat'] = $alamat;
    $_SESSION['telefon'] = $telefon;
    $_SESSION['tarikh'] = $tarikh;
    $_SESSION['jenis'] = $jenis;
    $_SESSION['tempoh'] = $tempoh;
    $_SESSION['spec'] = $spec;
    $_SESSION['alasan'] = $alasan;
}

$_SESSION['error'] = $error;

header("Location: result.php");
exit();