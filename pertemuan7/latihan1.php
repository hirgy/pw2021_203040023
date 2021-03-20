<?php
/*
Muhammad Rhyamizard Hirgy
203040003
https://github.com/hirgy/pw2021_203040023
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai Get & Post
*/
?>
<?php
// $_GET
$mahasiswa = [
	[
		"nrp" => "203040023",
		"nama" => "Muhammad Rhyamizard Hirgy",
		"email" => "hirgy9@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "gy.jpg"
	],
    [
        "nama" => "James Bond",
        "nrp" => "203040007",
        "email" => "james_bond@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "jamesbond.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>