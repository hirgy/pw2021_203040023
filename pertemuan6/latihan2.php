<?php
/*
Muhammad Rhyamizard Hirgy
203040023
https://github.com/hirgy/pw2021_203040023
Pertemuan 6 - 10 Maret 2021
Mempelajari mengenai Array Associative
*/
?>
<?php
// $mahasiswa = [
// 	["Muhammad Rhyamizard Hirgy", "203040023", "Teknik Informatika", "hirgy9@gmail.com"],
// [" James Bond", "203040007", "Teknik Mesin", "james_bond@gmail.com"],
// ["Bruce Lee", "203040100", "Teknik Pangan", "bruce.lee@gmail.com"]

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama" => "Muhammad Rhyamizard Hirgy", 
    "nrp" => "203040023",
    "email" => "hirgy9@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "gylex.jpeg"
    ],
    [
        "nama" => "Hans julio", 
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>	
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Email : <?= $mhs["jurusan"]; ?></li>
			<li>Jurusan  : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html> 