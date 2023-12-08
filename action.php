<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Penduduk</title>
    <!-- Menghubungkan dengan font dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap"
      rel="stylesheet"
    />
    <!-- Menghubungkan dengan file CSS -->
    <link rel="stylesheet" href="style_action.css">
</head>
<body>
<?php
// Menghubungkan dengan file koneksi.php untuk terhubung ke database
include 'koneksi.php';

// Jika tombol 'SIMPAN' ditekan pada form input data, jalankan kode berikut
if(isset($_POST['SIMPAN'])) {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    // Menyisipkan data baru ke dalam tabel 'penduduk' dalam database
    mysqli_query($conn, "INSERT INTO penduduk VALUES ('','$nama','$usia','$tanggal_lahir','$tempat_lahir','$nik','$alamat','$pekerjaan')");
    
    // Mengarahkan kembali ke halaman utama setelah data dimasukkan
    header("location:index.php");
}

// Jika mendapatkan parameter 'delete' pada URL, jalankan kode berikut
if(isset($_GET['delete'])) {
    // Mengambil ID yang dikirimkan melalui URL untuk penghapusan data
    $id = $_GET['delete'];
    
    // Menghapus data penduduk dari tabel 'penduduk' berdasarkan ID
    mysqli_query($conn, "DELETE FROM penduduk WHERE id='$id'");
    
    // Mengarahkan kembali ke halaman utama setelah data dihapus
    header("location:index.php");
}
?>

<!-- Bagian footer -->
<div class="footer">
    <div class="text">
        <p>&copy; Copyright By Almzmlimam</p>
    </div>
</div>
</body>
</html>