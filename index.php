<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <title>Permohonan Pinjaman Laptop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">

        <h1 class="title">Permohonan Pinjaman Laptop</h1>

        <form action="process.php" method="POST" class="form-box">

            <div class="form-grid">

                <div class="form-group">
                    <label class="label">Nama Penuh</label>
                    <input type="text" name="nama" class="input">
                </div>

                <div class="form-group">
                    <label class="label">Alamat</label>
                    <textarea name="alamat" class="textarea"></textarea>
                </div>

                <div class="form-group">
                    <label class="label">Nombor Telefon</label>
                    <input type="number" name="telefon" class="input">
                </div>

                <div class="form-group">
                    <label class="label">Tarikh</label>
                    <input type="date" name="tarikh" class="input">
                </div>

                <div class="form-group">
                    <label class="label">Jenis Laptop</label>
                    <select name="jenis" class="input">
                        <option value="">-- Pilih --</option>
                        <option>Dell</option>
                        <option>HP</option>
                        <option>Lenovo</option>
                        <option>Asus</option>
                    </select>
                </div>

            </div>

            <label class="label">Spesifikasi</label>
            <div class="group">
                <label><input type="checkbox" name="spec[]" value="RAM 8GB"> RAM 8GB</label>
                <label><input type="checkbox" name="spec[]" value="RAM 16GB"> RAM 16GB</label>
                <label><input type="checkbox" name="spec[]" value="SSD 512GB"> SSD 512GB</label>
            </div>

            <label class="label">Tempoh Pinjaman</label>
            <div class="group">
                <label><input type="radio" name="tempoh" value="1 Bulan"> 1 Bulan</label>
                <label><input type="radio" name="tempoh" value="3 Bulan"> 3 Bulan</label>
            </div>

            <div class="form-group full">
                <label class="label">Alasan Permohonan</label>
                <textarea name="alasan" class="textarea"></textarea>
            </div>

            <div class="btn-group">
                <button type="submit" class="btn-submit">Hantar</button>
                <button type="reset" class="btn-reset">Reset</button>
            </div>

        </form>

    </div>

</body>

</html>