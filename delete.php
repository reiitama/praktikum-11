<?php
include 'koneksi.php';
$sq="DELETE FROM karyawan WHERE id=$id";
mysqli_query($conn,$sq);
header('location:index.php');
?>