<?php
require 'functions.php';

session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
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
    <title>Form Tambah Data Bundle</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="font-family: Arial, sans-serif;">
    <h3>Form Tambah Data</h3>
    <form action="" method="post">
        <ul style="list-style: none;">
            <li>
                <label for="picture" style="margin-right: 8px;">Picture</label>
                : <input type="text" name="img" id="Picture" require><br><br>
            </li>
            <li>
                <label for="name" style="margin-right: 16px;">Nama</label>
                : <input type="text" name="nama" id="Name" require><br><br>
            </li>
            <li>
                <label for="deskripsi" style="margin-right: 21px;">Deskripsi</label>
                : <input type="text" name="informasi_produk" id="Description" require><br><br>
            </li>
            <li>
                <label for="detail" style="margin-right: 9px;">Detail</label>
                : <input type="text" name="jenis" id="Detail" require><br><br>
            </li>
            <li>
                <label for="price" style="margin-right: 7px;">Price</label>
                : <input type="text" name="harga" id="Price" require><br><br>
            </li>
            <li>
                <label for="stock" style="margin-right: 7px;">Stock Item</label>
                : <input type="text" name="harga" id="StokItem" require><br><br>
            </li>
            <button type="submit" name="tambah" style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Tambah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>