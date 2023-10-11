<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM dataparkiran WHERE id_kendaraan = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>