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
//koneksi ke DB & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw_203040023');

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);

  //jika hasilnnya hanya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  //Ambil data dari elemen dalam form
  global $conn;
  $nrp = htmlspecialchars($data["nrp"]);
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);


  //Query insert data
  $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nrp','$nama','$email','$jurusan','$gambar')
                ";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
