<?php
include "koneksidatabase.php";

$id = $_POST['id']; // Assuming you have a hidden input field in your form with name 'id'
$kd_skema = $_POST["kd_skema"];
$name = $_POST["nama_peserta"];
$nik = $_POST["nik"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$no_telp = $_POST["no_telp"];

$query = "UPDATE tb_peserta SET kd_skema='$kd_skema', nama_peserta='$name',nik='$nik, alamat='$alamat', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp' WHERE id=$id";
$result = mysqli_query($db, $query);

if ($result) {
    echo "Data peserta berhasil diupdate.";
    header('location: master.php');
} else {
    echo "Error: " . mysqli_error($db);
}
?>
