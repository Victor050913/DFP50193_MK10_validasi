<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <title>Keputusan Permohonan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1 class="title">Keputusan Permohonan</h1>

        <?php if (!empty($_SESSION['error'])): ?>

            <div class="error-box">
                <?php echo $_SESSION['error']; ?>
            </div>

            <div class="center">
                <a href="index.php" class="btn-back">Kembali ke Borang</a>
            </div>

        <?php else: ?>

            <div class="success-box">
                Permohonan Berjaya Dihantar
            </div>

            <table class="result-table">
                <thead>
                    <tr>
                        <th>Maklumat</th>
                        <th>Butiran</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo htmlspecialchars($_SESSION['nama']); ?></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td><?php echo htmlspecialchars($_SESSION['alamat']); ?></td>
                    </tr>

                    <tr>
                        <td>Telefon</td>
                        <td><?php echo htmlspecialchars($_SESSION['telefon']); ?></td>
                    </tr>

                    <tr>
                        <td>Tarikh</td>
                        <td><?php echo htmlspecialchars($_SESSION['tarikh']); ?></td>
                    </tr>

                    <tr>
                        <td>Jenis</td>
                        <td><?php echo htmlspecialchars($_SESSION['jenis']); ?></td>
                    </tr>

                    <tr>
                        <td>Spesifikasi</td>
                        <td><?php echo htmlspecialchars($_SESSION['spec']); ?></td>
                    </tr>

                    <tr>
                        <td>Tempoh</td>
                        <td><?php echo htmlspecialchars($_SESSION['tempoh']); ?></td>
                    </tr>

                    <tr>
                        <td>Alasan</td>
                        <td class="wrap-text"><?php echo htmlspecialchars($_SESSION['alasan']); ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="center">
                <a href="index.php" class="btn-back">Permohonan Baru</a>
            </div>

        <?php endif; ?>

    </div>

</body>

</html>