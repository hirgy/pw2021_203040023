<?php
require 'functions.php';
$bundle = query("SELECT * FROM bundle");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040023</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Picture</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Detail</th>
                <th>Price</th>
                <th>Stock Item</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($bundle as $bdl) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href=""><button style="border: none; padding: 5px 13px; background-color: royalblue; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                        <a href="hapus.php?id=<?= $bundle['id']; ?>" onclick="return confirm('Hapus Data??')"><button style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
                    </td>
                    <td><img width="220px" src="../assets/img/<?= $bdl['Picture']; ?>" alt=""></td>
                    <td><?= $bdl['Name']; ?></td>
                    <td><?= $bdl['Description']; ?></td>
                    <td><?= $bdl['Detail']; ?></td>
                    <td><?= $bdl['Price']; ?></td>
                    <td><?= $bdl['StokItem']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>