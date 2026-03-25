<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Keputusan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1 class="title">Keputusan Permohonan</h1>

        <?php if ($_SESSION['error'] != ""): ?>

            <div class="error">
                <?php echo $_SESSION['error']; ?>
            </div>

            <a href="index.php" class="btn-back">Kembali</a>

        <?php else: ?>

            <div class="success">Permohonan Berjaya!</div>

            <div class="result-box">

                <p><b>Nama:</b> <?php echo $_SESSION['nama']; ?></p>
                <p><b>Alamat:</b> <?php echo $_SESSION['alamat']; ?></p>
                <p><b>Telefon:</b> <?php echo $_SESSION['telefon']; ?></p>
                <p><b>Tarikh:</b> <?php echo $_SESSION['tarikh']; ?></p>
                <p><b>Jenis:</b> <?php echo $_SESSION['jenis']; ?></p>
                <p><b>Spesifikasi:</b> <?php echo $_SESSION['spec']; ?></p>
                <p><b>Tempoh:</b> <?php echo $_SESSION['tempoh']; ?></p>
                <p><b>Alasan:</b> <?php echo $_SESSION['alasan']; ?></p>

            </div>

            <a href="index.php" class="btn-back">Permohonan Baru</a>

        <?php endif; ?>

    </div>

</body>

</html>