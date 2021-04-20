<?php
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$bundle = query("SELECT * FROM bundle WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>203040023</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="picture">
            <img width="220px" src="../assets/img/<?= $bundle["Picture"]; ?>" alt="">
        </div>
        <div class="deskripsi">
            <p><?= $bundle["Name"]; ?></p>
            <p><?= $bundle["Description"]; ?></p>
            <p><?= $bundle["Detail"]; ?></p>
            <p>Rp. <?= $bundle["Price"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>