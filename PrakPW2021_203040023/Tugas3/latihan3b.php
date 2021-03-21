<?php 
// Nama :Muhammad Rhyamizard Hirgy
// NRP : 203040023
// Shift : Rabu pukul 09:00-10:00 WIB
?>

<?php 
$PemainBolaTerkenal = 
    ["Cristiano Ronaldo",
    "Lionel Messi",
    "Mohammad Salah",
    "Neymar Jr",
    "Zlatan Ibrahimovic",
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b_203040023</title>
</head>
<body>
    <h3>Daftar pemain bola terkenal</h3>
    <ol>
        <?php foreach($PemainBolaTerkenal as $pemain) : ?>
            <li><?= $pemain ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
    array_push($PemainBolaTerkenal,"Luca Modric","Sadio Mane");
    sort($PemainBolaTerkenal);
    ?>

    <h3>Daftar pemain bola terkenal baru</h3>
    <ol>
        <?php foreach($PemainBolaTerkenal as $pemainBaru) : ?>
            <li><?= $pemainBaru ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>