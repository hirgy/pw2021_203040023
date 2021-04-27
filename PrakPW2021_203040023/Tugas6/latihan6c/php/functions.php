<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040023");

    return $conn;
}
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
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

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $picture = htmlspecialchars($data['Picture']);
    $name = htmlspecialchars($data['Name']);
    $description = htmlspecialchars($data['Description']);
    $detail = htmlspecialchars($data['Detail']);
    $price = htmlspecialchars($data['Price']);
    $stock = htmlspecialchars($data['StokItem']);
    $query = "UPDATE `bundle`
            SET 
            `Name` ='$name',
            `Description` ='$description',
            `Detail`='$detail', 
            `Price`='$price', 
            `StokItem`='$stock', 
            `Picture`='$picture'
            WHERE id = '$id'
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username sudah di gunakan');
        </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
    mysqli_query($conn, $query_tambah);
    return mysqli_affected_rows($conn);
}
