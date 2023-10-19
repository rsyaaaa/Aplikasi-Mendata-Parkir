<script>

Swal.fire({
  type: 'success',
  title: 'Login Berhasil!',
  text: 'Anda akan di arahkan dalam 3 Detik',
  timer: 3000,
  showCancelButton: false,
  showConfirmButton: false
})



<?php

session_start();

session_destroy();

header("location:login.php");

?>