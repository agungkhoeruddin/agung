<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Peserta</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="master.php">Peserta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sertifikasi.php">Sertifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambah_peserta.php">Daftar Peserta</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Edit Peserta</h1>

        <?php
        include "koneksidatabase.php";
        $id = $_GET['id'];

        $query = "SELECT * FROM tb_peserta WHERE id=$id";
        $result = mysqli_query($db, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
        ?>
                <form method="post" action="prosesedit_peserta.php">
                    <label for="kd_skema">KD SKEMA</label>
                    <input type="text" name="kd_skema" id="kd_skema" value="<?php echo $data['kd_skema']; ?>" required><br>

                    <label for="nama_peserta">Nama Peserta</label>
                    <input type="text" name="nama_peserta" id="nama_peserta" value="<?php echo $data['nama_peserta']; ?>" required><br>

                    <label for="nik">Nik</label>
                    <input type="text" name="nik" id="nik" value="<?php echo $data['nik']; ?>" required><br>

                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>" required><br>

                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" required><br>

                    <label for="no_telp">No Telp</label>
                    <input type="number" name="no_telp" id="no_telp" value="<?php echo $data['no_telp']; ?>" required><br>

                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit">Simpan</button>
                </form>
        <?php
            } else {
                echo "Data Peserta Tidak Ditemukan";
            }
        } else {
            echo "Error: " . mysqli_error($db);
        }
        ?>
    </div>

    <script src="https://code.jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
