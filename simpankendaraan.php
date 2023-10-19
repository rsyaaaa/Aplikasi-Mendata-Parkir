<?php

//include koneksi database
include('koneksi.php');

//get data dari for
$jenis_kendaraan =$_POST['jenis_kendaraan'];
$nama_kendaraan  = $_POST['nama_kendaraan'];
$plat_nomor     = $_POST['plat_nomor'];
$jam_masuk       = $_POST['jam_masuk'];
$jam_keluar       = $_POST['jam_keluar'];

if(isset($_FILES['gambar_kendaraan'])) {
    $file_name = $_FILES['gambar_kendaraan']['name'];
    $file_tmp = $_FILES['gambar_kendaraan']['tmp_name'];

   
    $target_dir = "gambar_kendaraan/";
    $target_file = $target_dir . basename($file_name);


    if (move_uploaded_file($file_tmp, $target_file)) {
        echo "File berhasil di upload.";
    } else {
        echo "Error: Gagal!.";
    }
} else {
    echo "Error: Gagal!.";
}
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