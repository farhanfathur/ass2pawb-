<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "pabw";

$conn = mysqli_connect($host, $user, $pw, $db);
if (!$conn) {
    die("koneksi gagal : " . mysqli_connect_error());
}
