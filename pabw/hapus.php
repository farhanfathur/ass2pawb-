<?php 
 include "koneksi.php"; 
$ambil = $conn->query("SELECT * FROM ipk WHERE semester='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$conn->query("DELETE FROM ipk WHERE semester='$_GET[id]'");

 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='menu.php?halaman=ipk';</script>";

 ?>