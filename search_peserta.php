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
</ul>
</div>
</nav>
<div class="container mt-4">
<div class="container">
<h1>Data peserta</h1>
<form action="search_peserta.php" method="POST" class="mb-3">
                <div class="input-group">
                    <input type="text"id="search_query" class="form-control" placeholder="Search Peserta" name="search_query">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>

            <?php
include "koneksidatabase.php";

if (isset($_POST['search_query'])) {
    $search_query = $_POST['search_query'];
    $query = "SELECT * FROM tb_peserta WHERE nama_peserta LIKE '%$search_query%'OR jenis_kelamin LIKE '%$search_query%'";
    $result = mysqli_query($db, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>KD SKEMA</th>
                        <th>Nama Peserta</th>
                        <th>ALAMAT</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telp</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['kd_skema'] . "</td>";
                        echo "<td>" . $row['nama_peserta'] . "</td>";
                        echo "<td>" . $row['alamat'] . "</td>";
                        echo "<td>" . $row['jenis_kelamin'] . "</td>";
                        echo "<td>" . $row['no_telp'] . "</td>";
                        echo "<td>
                            <a href='edit_peserta.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>
                            <a href='delete_peserta.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "<p>No results found.</p>";
        }
    } else {
        echo "<p>Error: " . mysqli_error($db) . "</p>";
    }
} else {
    echo "<p>No search query provided.</p>";
}
?>

</div>
</div>
<script src="https://code.jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
