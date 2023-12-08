<?php 
  // Inisialisasi variabel yang menyimpan informasi koneksi ke database
  $host = 'localhost'; // Nama host database, dalam kasus ini 'localhost'
  $user = 'root'; // Nama pengguna untuk mengakses database, di sini 'root'
  $pwd = ''; // Kata sandi pengguna untuk mengakses database, dalam kasus ini kosong ('')
  $db_name = 'datapenduduk_50421097'; // Nama database yang akan digunakan
  
  // Membuat koneksi baru ke database menggunakan objek mysqli
  $conn = new mysqli($host, $user, $pwd, $db_name);

  // Memeriksa apakah koneksi berhasil
  if($conn->connect_error) {
    // Jika koneksi gagal, program akan berhenti dan menampilkan pesan kesalahan
    die("Connection Failed: ". $conn->connect_error);
  }
?>