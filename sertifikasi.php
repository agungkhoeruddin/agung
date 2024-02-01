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
<div class="container mt-5">
<div class="container">
    <h1>Skema</h1>
    <a href="tambah_skema.php" class="btn btn-primary mb-3">Tambah Skema</a>

    <table class="table table-striped">
        <thead>
            <tr>
               
                <th>Kd Skema</th>
                <th>Nama Skema</th>
                <th>Jenis</th>
                <th>Jumlah Unit</th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksidatabase.php";
            $query = "SELECT * FROM tb_skema";
            $result = mysqli_query($db, $query);

            if($result) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['kd_skema'] . "</td>";
                        echo "<td>" . $row['nama_skema'] . "</td>";
                        echo "<td>" . $row['jenis_skema'] . "</td>";
                        echo "<td>" . $row['jumlah_unit'] . "</td>";
                        echo "<td>
                            <a href='edit_skema.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>
                            <a href='delete_skema.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a>
                            </td>";
                        echo "<tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data supplier.</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Error: " . mysqli_error($db) . "</td></tr>";
            }
            ?>
        </tbody>

    </table>
</div>
</div>

<script src="https://code.jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
