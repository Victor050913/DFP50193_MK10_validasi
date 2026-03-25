<?php
session_start();

$nama = trim($_POST['nama'] ?? '');
$alamat = trim($_POST['alamat'] ?? '');
$telefon = trim($_POST['telefon'] ?? '');
$tarikh = $_POST['tarikh'] ?? '';
$jenis = $_POST['jenis'] ?? '';
$tempoh = $_POST['tempoh'] ?? '';
$alasan = trim($_POST['alasan'] ?? '');

$spec = "";
if (isset($_POST['spec'])) {
    $spec = implode(", ", $_POST['spec']);
}

$error = "";

/* VALIDATION */
if ($nama == "") {
    $error = "Nama tidak diisi";
} elseif ($alamat == "") {
    $error = "Alamat tidak diisi";
} elseif ($telefon == "") {
    $error = "Telefon tidak diisi";
} elseif (!preg_match("/^[0-9+]{10,15}$/", $telefon)) {
    $error = "Format nombor telefon tidak sah";
} elseif ($tarikh == "") {
    $error = "Tarikh tidak diisi";
} elseif ($jenis == "") {
    $error = "Jenis laptop tidak dipilih";
} elseif ($tempoh == "") {
    $error = "Tempoh tidak dipilih";
} elseif (strlen($alasan) < 25) {
    $error = "Alasan mesti lebih 25 aksara";
}

/* SIMPAN SESSION */
$_SESSION['error'] = $error;

if ($error == "") {
    $_SESSION['nama'] = $nama;
    $_SESSION['alamat'] = $alamat;
    $_SESSION['telefon'] = $telefon;
    $_SESSION['tarikh'] = $tarikh;
    $_SESSION['jenis'] = $jenis;
    $_SESSION['tempoh'] = $tempoh;
    $_SESSION['spec'] = $spec;
    $_SESSION['alasan'] = $alasan;
}

header("Location: result.php");
exit();