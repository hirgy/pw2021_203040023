<?php
/* 
Muhammad Rhyamizard Hirgy
203040023
https://github.com/hirgy/pw2021_203040023
Pertemuan 13 - 16 Mei 2021
Live Searching & Upload Gambar
*/
?>

<?php

require '../functions.php';
$mahasiswa = cari($_GET['keyword']);

?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red;font-style: italic;">data mahasiswa tidak ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>
  <?php $i = 1;
  foreach ($mahasiswa as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" alt=""></td>
      <td><?= $m['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $m['id']; ?>">Lihat detail</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>