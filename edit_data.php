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
<h1>Edit Data Diri Anda</h1>

<?php // Menghubungkan dengan file koneksi.php untuk terhubung ke database
include 'koneksi.php';
include 'koneksi.php';

// Memeriksa apakah ada parameter 'id' yang dikirimkan melalui URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Melakukan query untuk mengambil data penduduk berdasarkan id yang diberikan
    $query = mysqli_query($conn, "SELECT * FROM penduduk WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);

    // Jika data tidak ditemukan, akan diarahkan kembali ke halaman utama
    if (!$data) {
        header("location:index.php");
    }
} else {
    // Jika tidak ada parameter 'id', akan diarahkan kembali ke halaman utama
    header("location:index.php");
}

// Memeriksa apakah tombol 'UPDATE' ditekan
if(isset($_POST['UPDATE'])) {
    // Mengambil data yang diubah dari form
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    // Melakukan query untuk memperbarui data penduduk di database berdasarkan id
    mysqli_query($conn, "UPDATE penduduk SET nama='$nama', usia='$usia', tanggal_lahir='$tanggal_lahir' , tempat_lahir='$tempat_lahir' , nik='$nik' , alamat='$alamat' , pekerjaan='$pekerjaan' WHERE id='$id'");

    // Mengarahkan kembali ke halaman utama setelah data diupdate
    header("location:index.php");
}
?>

<!-- Form untuk mengedit data penduduk -->
<form action="" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td><input type="text" name="usia" value="<?php echo $data['usia']; ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>"></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td><input type="text" name="nik" value="<?php echo $data['nik']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="UPDATE"></td>
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