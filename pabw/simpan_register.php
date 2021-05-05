<?php
//Include file koneksi ke database
include "koneksi.php";
$msg;
//menerima nilai dari kiriman form pendaftaran
$username = $_POST["username"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = md5($_POST["password"]); //untuk password digunakan enskripsi md5
$acces = $_POST["akses"];


//Query input menginput data kedalam tabel user

//validasi 1 akun hanya 1 email
$email_cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE email='$email' OR username='$username'"));
if ($email_cek > 0) {
  error_reporting(0);
  echo "
            <script>
            alert('Email/Username telah terpakai');
            document.location.href = 'register.php';
            </script>
            ";
} else {
  $sql = "insert into user (username,nama,email,password,akses) values
		('$username','$nama','$email','$password','User')";
}


//Mengeksekusi/menjalankan query diatas	
$hasil = mysqli_query($conn, $sql);


//Kondisi apakah berhasil atau tidak
if ($hasil) {
  echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'login.php';
            </script>
            ";
  exit;
} else {
  echo "Gagal simpan data user";
  exit;
}
