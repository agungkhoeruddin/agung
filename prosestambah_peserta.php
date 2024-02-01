<?php
include "koneksidatabase.php";

$kd_skema = $_POST ["kd_skema"];
$name = $_POST ["nama_peserta"];
$nik = $_POST["nik"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST ["jenis_kelamin"];
$no_telp = $_POST ["no_telp"];

$query = "INSERT INTO tb_peserta (kd_skema, nama_peserta, nik, alamat, jenis_kelamin, no_telp) VALUES ('$kd_skema', '$name', '$nik', '$alamat', '$jenis_kelamin', '$no_telp')";
$result = mysqli_query($db, $query);

if ($result) {
    echo "Data peserta berhasil disimpan.";
    header('location:http://localhost/MY_APLIKASI/master.php');
} else {
    echo "Error: " . mysqli_error($db);
}
?>