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
<h1>Input data penduduk</h1>

<?php
// Menghubungkan dengan file koneksi.php untuk terhubung ke database
include 'koneksi.php';

// Memeriksa apakah form telah disubmit (dengan mengecek apakah tombol 'SIMPAN' telah ditekan)
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
    mysqli_query($conn, "INSERT INTO penduduk (nama, usia, tanggal_lahir, tempat_lahir, nik, alamat, pekerjaan) 
                        VALUES ('$nama', '$usia', '$tanggal_lahir', '$tempat_lahir', '$nik', '$alamat', '$pekerjaan')");
    
    // Mengarahkan kembali ke halaman utama setelah data dimasukkan
    header("location:index.php");
}
?>

<!-- Form untuk memasukkan data penduduk baru -->
<form action="" method="post">
    <table>
        <!-- Field-field untuk data penduduk -->
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td><input type="number" name="usia"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td><input type="number" name="nik"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan"></td>
        </tr>
        <tr>
            <!-- Tombol 'SIMPAN' untuk menyimpan data -->
            <td></td>
            <td><input type="submit" name="SIMPAN"></td>
        </tr>
    </table>
</form>
<!-- Bagian footer -->
<div class="footer">
    <div class="text">
        <p>&copy; Copyright By Almzmlimam</p>
    </div>
</div>
</body>
</html>