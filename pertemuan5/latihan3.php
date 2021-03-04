<?php
/*
Muhammad Rhyamizard Hirgy
203040003
https://github.com/hirgy/pw2021_203040023
Pertemuan 5 - 4 Maret 2021
Mempelajari tentang Array
*/
?>
<?php 
$mahasiswa = [
	["Muhammad Rhyamizard Hirgy", "203040023", "Teknik Informatika", "hirgy9@gmail.com"],
	[" James Bond", "203040007", "Teknik Mesin", "james_bond@gmail.com"],
	["Bruce Lee", "203040100", "Teknik Pangan", "bruce.lee@gmail.com"]
];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>