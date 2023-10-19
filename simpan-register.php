<?php

include('koneksi.php');

$nama_lengkap = $_POST['nama_lengkap'];
$username     = $_POST['username'];
$password     = MD5($_POST['password']);

if(isset($_FILES['foto'])) {
    $file_name = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

   
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
$query = "INSERT INTO user (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$password')";        

if($connection->query($query)) {
    
    echo "success";

} else {
    
    echo "error";

}