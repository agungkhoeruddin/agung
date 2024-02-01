<?php
include "koneksidatabase.php";

$kd_skema = $_POST["kd_skema"];
$name = $_POST["nama_skema"];
$jenis_skema = $_POST["jenis_skema"];
$jumlah_unit = $_POST["jumlah_unit"];

$query = "UPDATE tb_skema SET nama_skema='$name', jenis_skema='$jenis_skema', jumlah_unit='$jumlah_unit' WHERE kd_skema='$kd_skema'";
$result = mysqli_query($db, $query);

if ($result) {
    echo "Data skema berhasil diupdate.";
    header('location: sertifikasi.php');
} else {
    echo "Error: " . mysqli_error($db);
}
?>
