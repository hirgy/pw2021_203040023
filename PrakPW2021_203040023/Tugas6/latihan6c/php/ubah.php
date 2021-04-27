<?php
require 'functions.php';

$id = $_GET['id'];
$bundle = query("SELECT * FROM bundle WHERE id = $id")[0];

session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ubah Data Bundle</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h3>Form Ubah Data</h3>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $bundle['id']; ?>">
        <ul style="list-style: none;">
            <li>
                <label for="img" style="margin-right: 8px;">Picture</label>
                : <input type="text" name="Picture" id="Picture" require value="<?= $bundle['Picture']; ?>"><br><br>
            </li>
            <li>
                <label for="nama" style="margin-right: 16px;">Nama</label>
                : <input type="text" name="Name" id="Name" require value="<?= $bundle['Name']; ?>"><br><br>
            </li>
            <li>
                <label for="informasi_produk" style="margin-right: 21px;">Deskripsi</label>
                : <input type="text" name="Description" id="Description" require value="<?= $bundle['Description']; ?>"><br><br>
            </li>
            <li>
                <label for="jenis" style="margin-right: 9px;">Detail</label>
                : <input type="text" name="Detail" id="Detail" require value="<?= $bundle['Detail']; ?>"><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 7px;">Price</label>
                : <input type="text" name="Price" id="Price" require value="<?= $bundle['Price']; ?>"><br><br>
            <li>
                <label for="stock" style="margin-right: 7px;">Stock Item</label>
                : <input type="text" name="StokItem" id="StokItem" require value="<?= $bundle['StokItem']; ?>"><br><br>
            </li>
            </li>
            <button type="submit" name="ubah" style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">
                Ubah Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>