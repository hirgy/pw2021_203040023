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

$mahasiswa = query("SELECT * FROM mahasiswa");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>

      <tr>
        <td><?= $i; ?></td>

        <td><img src="<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        <td>
          <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
          <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="return confirm('Yakin?');">Hapus</a>
        </td>
      </tr>
      <?php $i++; ?>

    <?php endforeach; ?>
  </table>
</body>

</html>