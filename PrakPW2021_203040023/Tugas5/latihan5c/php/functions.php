<?php
// Koneksi Database 
function koneksi()
{
    $koneksi = mysqli_connect("localhost", "root", "");
    mysqli_select_db($koneksi, "pw_tubes_203040023");

    return $koneksi;
}

function query($sql)
{
    $koneksi = koneksi();
    $result = mysqli_query($koneksi, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $picture = htmlspecialchars($data['Picture']);
    $name = htmlspecialchars($data['Name']);
    $description = htmlspecialchars($data['Description']);
    $detail = htmlspecialchars($data['Detail']);
    $price = htmlspecialchars($data['Price']);
    $stock = htmlspecialchars($data['StokItem']);

    $query = "INSERT INTO bundle
                VALUES
                ('', '$name', '$description', '$detail', '$price', '$stock', '$picture')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM bundle WHERE id = $id");

    return mysqli_affected_rows($conn);
}
