<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
</button>
<<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="master.php">peserta</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="sertifikasi.php">sertifikasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tambah_peserta.php">daftar peserta</a>
    </li>
    
</ul>
</div>
</nav>

<div class="container mt-4">
<h1>Tambah Peserta</h1>

<form method="post" action="prosestambah_peserta.php">
    <label for="kd_skema">KD SKEMA</label>
    <input type="text" name="kd_skema" id="kd_skema" required><br>

    <label for="nama_peserta">Nama peserta</label>
    <input type="text" name="nama_peserta" id="nama_peserta" required><br>

    <label for="nik">NIK</label>
    <input type="text" name="nik" id="nik" required><br>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" required><br>

    <label for="jenis_kelamin">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" id="jenis_kelamin" required><br>

    <label for="no_telp">No Telp</label>
    <input type="number" name="no_telp" id="no_telp" required><br>

    <button type="submit">Simpan</button>
</form>
</div>
<script src="https://code.jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
