<?php
/*
Muhammad Rhyamizard Hirgy
203040023
https://github.com/hirgy/pw2021_203040023/tree/main/Kuliah
Pertemuan 10 - 29 April 2021
Koneksi DB & Insert Data
*/
?>

<?php
require 'function.php';
// cek apakah tombol submit sudah di tekan
if (isset($_POST["submit"])) {

  //cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0) {
    echo "
            <script>
                alert('data berhasil di tambah')
                document.location.href = 'latihan3.php';
            </script>
        ";
  } else {
    echo "
        <script>
            alert('data berhasil di tambah')
            document.location.href = 'latihan3.php';
        </script>
        ";
  }
};
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>

  <h1>Form Tambah Data Mahasiswa</h1>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="nrp">NRP:</label>
        <input type="text" name="nrp" id="nrp" required>
      </li>
      <li>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <li>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
      </li>
      <li>
        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
      <li>
        <label for="gambar">Gambar:</label>
        <input type="text" name="gambar" id="gambar" required>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </ul>

  </form>
</body>

</html>