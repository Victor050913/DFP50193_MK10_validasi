<!DOCTYPE html>
<html lang="ms">

<head>

<meta charset="UTF-8">
<title>Borang Permohonan Laptop</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1 class="title">Permohonan Pinjaman Komputer Riba</h1>

<form action="process.php" method="POST" class="form-box">

<label class="label">Nama Penuh</label>
<input type="text" name="nama" class="input">

<label class="label">Alamat</label>
<textarea name="alamat" class="textarea"></textarea>

<label class="label">Nombor Telefon</label>
<input type="number" name="telefon" class="input">

<label class="label">Tarikh Permohonan</label>
<input type="date" name="tarikh" class="input">

<label class="label">Jenis Laptop</label>

<select name="jenis_laptop" class="input">
<option value="">Pilih Laptop</option>
<option>Dell</option>
<option>HP</option>
<option>Lenovo</option>
<option>Asus</option>
</select>

<label class="label">Spesifikasi Diperlukan</label>

<div class="check-group">

<label><input type="checkbox" name="spec[]" value="RAM 8GB" class="check"> RAM 8GB</label>

<label><input type="checkbox" name="spec[]" value="RAM 16GB" class="check"> RAM 16GB</label>

<label><input type="checkbox" name="spec[]" value="SSD 512GB" class="check"> SSD 512GB</label>

<label><input type="checkbox" name="spec[]" value="Graphic Card" class="check"> Graphic Card</label>

</div>

<label class="label">Tempoh Pinjaman</label>

<div class="radio-group">

<label><input type="radio" name="tempoh" value="1 Bulan" class="radio"> 1 Bulan</label>

<label><input type="radio" name="tempoh" value="3 Bulan" class="radio"> 3 Bulan</label>

<label><input type="radio" name="tempoh" value="6 Bulan" class="radio"> 6 Bulan</label>

</div>

<label class="label">Alasan Permohonan</label>
<textarea name="alasan" class="textarea"></textarea>

<div class="button-group">

<button type="submit" class="btn-submit">Hantar</button>

<button type="reset" class="btn-reset">Tetap Semula</button>

</div>

</form>

</div>

</body>
</html>