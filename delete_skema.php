<?php
include "koneksidatabase.php";

$id = $_GET['id'];

$query = "DELETE FROM tb_skema WHERE id=$id";
$result = mysqli_query($db, $query);

if ($result) {
    echo "Data supplier berhasil dihapus.";
    header('Location: http://localhost/MY_APLIKASI/sertifikasi.php');
} else {
    echo "Error: " . mysqli_error($db);
}
?>
