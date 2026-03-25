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

        <form action="process.php" method="POST">

            <div class="form-grid">

                <!-- Nama -->
                <div class="form-group">
                    <label>Nama Penuh</label>
                    <input type="text" name="nama" class="input" required>
                </div>

                <!-- Alamat -->
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="textarea" required></textarea>
                </div>

                <!-- Telefon -->
                <div class="form-group">
                    <label>Nombor Telefon</label>
                    <input type="text" name="telefon" class="input" pattern="[0-9+]{10,15}"
                        placeholder="Contoh: 0123456789" required>
                </div>

                <!-- Tarikh -->
                <div class="form-group">
                    <label>Tarikh</label>
                    <input type="date" name="tarikh" class="input" required>
                </div>

                <!-- Jenis -->
                <div class="form-group">
                    <label>Jenis Laptop</label>
                    <select name="jenis" class="input" required>
                        <option value="">-- Pilih --</option>
                        <option>Dell</option>
                        <option>HP</option>
                        <option>Lenovo</option>
                        <option>Asus</option>
                    </select>
                </div>

            </div>

            <!-- Spesifikasi -->
            <div class="form-group full">
                <label>Spesifikasi</label>
                <div class="group">
                    <label><input type="checkbox" name="spec[]" value="RAM 8GB"> RAM 8GB</label>
                    <label><input type="checkbox" name="spec[]" value="RAM 16GB"> RAM 16GB</label>
                    <label><input type="checkbox" name="spec[]" value="SSD 512GB"> SSD 512GB</label>
                    <label><input type="checkbox" name="spec[]" value="SSD 1TB"> SSD 1TB</label>
                </div>
            </div>

            <!-- Tempoh -->
            <div class="form-group full">
                <label>Tempoh Pinjaman</label>
                <div class="group">
                    <label><input type="radio" name="tempoh" value="1 Bulan" required> 1 Bulan</label>
                    <label><input type="radio" name="tempoh" value="3 Bulan"> 3 Bulan</label>
                </div>
            </div>

            <!-- Alasan -->
            <div class="form-group full">
                <label>Alasan Permohonan</label>
                <textarea name="alasan" class="textarea" required></textarea>
            </div>

            <!-- Button -->
            <div class="btn-group">
                <button type="submit" class="btn-submit">Hantar</button>
                <button type="reset" class="btn-reset">Reset</button>
            </div>

        </form>

    </div>

</body>

</html>