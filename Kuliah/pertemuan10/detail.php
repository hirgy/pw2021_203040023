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

$id = $_GET['id'];
// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>

  <ul>
    <li><img src="<?= $m['gambar']; ?>" width="150" alt=""></li>
    <li>NRP: <?= $m['nrp']; ?></li>
    <li>Nama: <?= $m['nama']; ?></li>
    <li>Email: <?= $m['email']; ?></li>
    <li>Jurusan: <?= $m['jurusan']; ?></li>
    <li> <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
      <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="return confirm('Yakin?');">Hapus</a>
    </li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>