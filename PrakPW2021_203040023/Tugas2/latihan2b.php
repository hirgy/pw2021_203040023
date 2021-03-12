<?php
 
// Nama :Muhammad Rhyamizard Hirgy
// NRP : 203040023
// Shift : Rabu pukul 09:00-10:00 WIB

?>

<?php
$jawabanIsset = "Isset adalah = Digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. <br> <br>";
$jawabanEmpty = "Empty adalah = Digunakan untuk membuat sebuah validasi dengan php untuk melakukan pemeriksaan terhadap variabel-variabel yang berada di luar php.";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;


function soal($style)
{
    echo "<div class = $style>
    <h1>" . $GLOBALS['isset'] . "</h1>
    <h1>" . $GLOBALS['empty'] . "</h1>
    </div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan2b_203040083</title>
    <style>
        .center {
            border: 1px solid black;
            padding-left: 10px;
            font-size: 8px;
            color: goldenrod;
            font-family: monospace;
            background-color: #222222;
        }
    </style>
</head>

<body>
    <?php
    echo soal("center");
    ?>
</body>

</html>