<?php

//include koneksi database
include('koneksi.php');

//get data dari for
$jenis_kendaraan =$_POST['jenis_kendaraan'];
$nama_kendaraan  = $_POST['nama_kendaraan'];
$plat_nomor     = $_POST['plat_nomor'];
$jam_masuk       = $_POST['jam_masuk'];
$jam_keluar       = $_POST['jam_keluar'];

//query insert data ke dalam database
$query = "INSERT INTO dataparkiran (jenis_kendaraan, nama_kendaraan, plat_nomor, jam_masuk) VALUES ('$jenis_kendaraan','$nama_kendaraan', '$plat_nomor', NOW())";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}     