<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$jenis_kendaraan  = $_POST['jenis_kendaraan'];
$nama_kendaraan  = $_POST['nama_kendaraan'];
$plat_nomor     = $_POST['plat_nomor'];



//query update data ke dalam database berdasarkan ID

$query = "UPDATE dataparkiran SET jenis_kendaraan = '$jenis_kendaraan', nama_kendaraan = '$nama_kendaraan', plat_nomor = '$plat_nomor' WHERE id= '$id'";


//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>