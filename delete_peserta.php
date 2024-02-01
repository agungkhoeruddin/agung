<?php

include "koneksidatabase.php";

$id = $_GET['id'];

$query = "DELETE FROM tb_peserta WHERE id=$id";
$result = mysqli_query($db, $query);


if ($result) {
     echo "Data barang berhasil dihapus.";
     header('Location:http://localhost/MY_APLIKASI/master.php');

} else {
echo "Error: " .mysqli_error($db);
}
?>