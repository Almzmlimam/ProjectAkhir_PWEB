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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Penduduk</h1>
    <p>Silahkan input data penduduk dengan mengklik tombol di bawah :</p>
    <!-- Tombol untuk input data penduduk -->
    <button><a href="input_data.php" style="color: white;">Input Data Penduduk</a></button>

    <!-- Tabel untuk menampilkan data penduduk -->
    <table border="1">
        <tr>
            <!-- Kolom-kolom dalam tabel -->
            <th>Nama</th>
            <th>Usia</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>
        <?php
        // Menghubungkan dengan file koneksi.php untuk terhubung ke database
        include 'koneksi.php';
        // Melakukan query untuk mengambil data dari tabel 'penduduk'
        $query = mysqli_query($conn, "SELECT * FROM penduduk");

        // Menampilkan data penduduk dalam bentuk baris tabel menggunakan perulangan while
        while($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            // Menampilkan data tiap kolom dari tabel 'penduduk'
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['usia']."</td>";
            echo "<td>".$row['tanggal_lahir']."</td>";
            echo "<td>".$row['tempat_lahir']."</td>";
            echo "<td>".$row['nik']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['pekerjaan']."</td>";
            // Menambahkan tombol Edit dan Delete dengan mengirimkan id data
            echo "<td><a href='edit_data.php?id=".$row['id']."'>Edit</a> | <a href='action.php?delete=".$row['id']."'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <!-- Bagian footer -->
    <div class="footer">
        <div class="text">
          <p>&copy; Copyright By Almzmlimam</p>
        </div>
    </div>
</body>
</html>