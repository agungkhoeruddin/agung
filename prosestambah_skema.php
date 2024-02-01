<?php
include "koneksidatabase.php";
$kd_skema = $_POST['kd_skema'];
$name = $_POST['nama_skema'];
$jenis_skema = $_POST['jenis_skema'];
$jumlah_unit = $_POST['jumlah_unit'];

// Query untuk menyimpan data ke dalam tabel supplier
$sql = "INSERT INTO tb_skema (kd_skema, nama_skema, jenis_skema, jumlah_unit) VALUES ('$kd_skema', '$name', '$jenis_skema', '$jumlah_unit')";
$result = mysqli_query($db, $sql);

if ($result) {
    echo "Data peserta berhasil disimpan.";
    header('location:http://localhost/MY_APLIKASI/sertifikasi.php');
} else {
    echo "Error: " . mysqli_error($db);
}
?>